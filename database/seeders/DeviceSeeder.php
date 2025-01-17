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
        ];

        while($index < count($device)) {
            Device::factory()->create([
                'name' => $device[$index],
            ]);

            $index++;
        }
    }
}
