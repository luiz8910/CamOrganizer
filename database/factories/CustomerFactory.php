<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    protected $model = Customer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'external_id' => $this->faker->numberBetween(100, 999),
            'company_name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'cnpj' => $this->faker->numberBetween(100000, 1000000)
        ];
    }
}
