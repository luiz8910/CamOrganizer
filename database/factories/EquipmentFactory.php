<?php

namespace Database\Factories;

use App\Models\Equipment;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipmentFactory extends Factory
{
    protected $model = Equipment::class;

    public function definition()
    {
        return [
            'device_id' => $this->faker->numberBetween(1, 3),
            'customer_id' => $this->faker->numberBetween(1, 3),
            'brand' => $this->faker->company,
            'model' => $this->faker->word,
            'serial' => $this->faker->unique()->uuid,
            'status' => 'active',
            'port' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'ddns' => $this->faker->domainName,
            'access_ip' => $this->faker->ipv4,
            'hd_brand' => $this->faker->word,
            'storage_capacity' => $this->faker->word,
            'installation_location' => $this->faker->address,
            'description' => $this->faker->sentence,
        ];
    }
}
