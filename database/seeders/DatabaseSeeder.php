<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(!User::first())
            \App\Models\User::factory()->create();

        // Ordem importa: devices e customers precisam existir antes de
        // EquipmentSeeder, que referencia device_id e customer_id.
        $this->call([
            UserSeeder::class,
            DeviceSeeder::class,
            CustomerSeeder::class,
            EquipmentSeeder::class,
        ]);
    }
}
