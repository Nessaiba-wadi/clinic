<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialty>
 */
class SpecialtyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Specialty::class;

    public function definition()
    {
        return [
            'specialty_name' => $this->faker->jobTitle,
            'description' => $this->faker->sentence,
        ];
    }
}
