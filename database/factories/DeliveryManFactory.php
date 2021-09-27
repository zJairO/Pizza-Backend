<?php

namespace Database\Factories;

use App\Models\DeliveryMan;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryManFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeliveryMan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            # Generate random phone number & remove special chars
            'phone' => str_replace('-', '', preg_replace('/[^A-Za-z0-9\-]/', '', $this->faker->phoneNumber()))
        ];
    }
}
