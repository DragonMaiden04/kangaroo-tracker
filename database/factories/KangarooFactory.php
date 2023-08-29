<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kangaroo>
 */
class KangarooFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fullName = fake()->unique()->name(); // Generate a random full name
        $limitedLength = substr($fullName, 0, 100);
        $gender = fake()->randomElement(['M', 'F']);
        $friendliness = fake()->randomElement(['I', 'F', null]);
        $color = fake()->randomElement(['red', 'brown', 'blue', null]);

        return [
            'name'         => $limitedLength,
            'nickname'     => fake()->firstName($gender),
            'weight'       => fake()->randomFloat(2, 0, 1000),
            'height'       => fake()->randomFloat(2, 0, 1000),
            'gender'       => $gender,
            'color'        => $color,
            'friendliness' => $friendliness,
            'birthday'     => fake()->date()
        ];
    }
}
