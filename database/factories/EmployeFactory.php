<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JeroenNoten\LaravelAdminLte\View\Components\Form\Input;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registration_number' => fake()->numberBetween(),
            'fullname' => fake()->name(),
            'departement' => fake()->word(),
            'CIN' => fake()->word(),
            'hired_date' => fake()->date(),
            'phone' => fake()->numberBetween(),
            'address' => fake()->address(),
            'city' => fake()->city(),
        ];
    }
}
