<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $index = 0;

        $device = [
            'DVR',
            'Camera',
            'Roteador',
            'Facial',
        ];

        $icon = [
            'ki-router',
            'ki-technology-4',
            'ki-wlan',
            'ki-scan-barcode',
        ];

        while($index < count($device)) {
            Device::updateOrCreate(
                ['name' => $device[$index]],
                ['icon' => $icon[$index]]
            );

            $index++;
        }
    }
}
