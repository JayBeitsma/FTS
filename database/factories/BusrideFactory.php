<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Busride>
 */
class BusrideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'ftimg' => $this->faker->imageUrl(),
            'festival_name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(10, 70),
            'starting_point' => $this->faker->address(),
            'end_point' => $this->faker->address(),
            'departure_time' => $departure = $this->faker->dateTimeBetween('2025-02-01 00:00:00', '2025-12-31 23:59:59'),
            'arrival_time' => (clone $departure)->modify('+' . rand(30, 180) . ' minutes'),
            'tickets_available' => $this->faker->numberBetween(35, 105),
        ];
    }
}
