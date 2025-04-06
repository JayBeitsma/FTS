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
        $departureDate = $this->faker->dateTimeBetween('2025-02-01', '2025-12-31');
        $arrivalDate = (clone $departureDate)->modify('+' . rand(1, 3) . ' days');

        return [
            'name' => $this->faker->name(),
            'ftimg' => $this->faker->imageUrl(),
            'festival_name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(10, 70),
            'starting_point' => $this->faker->address(),
            'end_point' => $this->faker->address(),
            'departure_date' => $departureDate,
            'departure_time' => $this->faker->time(),
            'arrival_date' => $arrivalDate,
            'arrival_time' => $this->faker->time(),
            'tickets_available' => $this->faker->numberBetween(35, 105),
            ];
    }
}
