<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Doctor::class;

    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'user_id' => \App\Models\User::factory(),
            'first_name' => $this->faker->firstName($gender),
            'last_name' => $this->faker->lastName,
            'gender' => $gender,
            'date_of_birth' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'phone_number' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'qualification' => $this->faker->sentence,
            'years_of_experience' => $this->faker->numberBetween(1, 40),
            'bio' => $this->faker->paragraph,
            'picture_profile' => $this->faker->imageUrl,
        ];
    }
}
