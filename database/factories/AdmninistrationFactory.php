<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admninistration>
 */
class AdmninistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'contact' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'adresse' => $this->faker->address,
        ];
    }
}
