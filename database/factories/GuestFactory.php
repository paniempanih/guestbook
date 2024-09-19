<?php

namespace Database\Factories;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    protected $model = Guest::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateTime = $this->faker->dateTimeBetween('1 month ago', 'now');

        return [
            'fullname' => $this->faker->name(),
            'institution_id' => $this->faker->numberBetween(1, 3),
            'from' => $this->faker->randomElement([
                'PT Berlian Inovasi Mandiri',
                'SMK Negeri 1 Rembang',
                'SMK Negeri 1 Purbalingga',
                'SMK Negeri 2 Purbalingga'
            ]),
            'phonenumber' => '+62' . $this->faker->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail(),
            'note' => $this->faker->sentence(),
            'created_at' => $dateTime,
            'updated_at' => $dateTime
        ];
    }
}
