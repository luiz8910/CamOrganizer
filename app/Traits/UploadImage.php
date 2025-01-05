<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Aws\S3\Exception\S3Exception;

trait UploadImage
{
    use Environment;

    public function uploadImage($file)
    {
        try {
            if (!$file->isValid()) {
                throw new \Exception('Invalid file upload');
            }

            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

            // Retrieve AWS configuration directly from env.json using getKeys method
            $region = $this->getKeys('env.AWS_DEFAULT_REGION');
            $bucket = $this->getKeys('env.AWS_BUCKET');
            $key = $this->getKeys('env.AWS_ACCESS_KEY_ID');
            $secret = $this->getKeys('env.AWS_SECRET_ACCESS_KEY');

            if (!$bucket || !$key || !$secret || !$region) {
                throw new \Exception('Missing AWS S3 credentials');
            }

            // Instantiate S3 client with retrieved credentials
            $s3Client = new \Aws\S3\S3Client([
                'version' => 'latest',
                'region' => $region,
                'credentials' => [
                    'key' => $key,
                    'secret' => $secret,
                ],
            ]);

            // Upload the file to S3
            $s3Client->putObject([
                'Bucket' => $bucket,
                'Key' => $fileName,
                'Body' => file_get_contents($file),
            ]);

            // Generate the public URL for the uploaded file
            $publicUrl = $s3Client->getObjectUrl($bucket, $fileName);

            return $publicUrl;

        } catch (\Aws\S3\Exception\S3Exception $e) {
            Log::error('AWS S3 Error', [
                'message' => $e->getAwsErrorMessage(),
                'code' => $e->getStatusCode(),
            ]);

            throw new \Exception('AWS S3 Error: ' . $e->getAwsErrorMessage());
        } catch (\Exception $e) {
            Log::error('S3 Upload Error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            throw new \Exception('Error uploading image: ' . $e->getMessage());
        }
    }

    private function getKeys($keys)
    {
        return $this->getEnvJsonValue($keys);
    }

}
