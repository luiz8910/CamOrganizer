<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait UploadImage
{
    public function uploadImage($file)
    {
        try {
            if (!$file->isValid()) {
                throw new \Exception('Invalid file upload');
            }

            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

            // Config do S3 vem de config/filesystems.php (disco 's3'), que lê do
            // .env (AWS_ACCESS_KEY_ID, AWS_SECRET_ACCESS_KEY, AWS_DEFAULT_REGION,
            // AWS_BUCKET, AWS_URL). Antes isso era lido de um env.json avulso.
            $region = config('filesystems.disks.s3.region');
            $bucket = config('filesystems.disks.s3.bucket');
            $key = config('filesystems.disks.s3.key');
            $secret = config('filesystems.disks.s3.secret');

            if (!$bucket || !$key || !$secret || !$region) {
                throw new \Exception('Missing AWS S3 credentials');
            }

            $s3Client = new \Aws\S3\S3Client([
                'version' => 'latest',
                'region' => $region,
                'credentials' => [
                    'key' => $key,
                    'secret' => $secret,
                ],
            ]);

            // Sem ACL: o bucket concede leitura pública via bucket policy e tem
            // ACLs desabilitadas (Object Ownership = Bucket owner enforced), então
            // enviar 'public-read' faria o upload falhar.
            $s3Client->putObject([
                'Bucket' => $bucket,
                'Key' => $fileName,
                'Body' => file_get_contents($file),
            ]);

            return $s3Client->getObjectUrl($bucket, $fileName);

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
}
