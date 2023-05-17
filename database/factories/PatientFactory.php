<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Patient::class;

    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'user_id' => \App\Models\User::factory(),
            'first_name' => $this->faker->firstName($gender),
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'gender' => $gender,
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'insurance_provider' => $this->faker->company,
            'insurance_policy_number' => $this->faker->unique()->numerify('########'),
        ];
    }
}
