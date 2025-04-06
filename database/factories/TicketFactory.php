<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Busride;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    protected $model = Ticket::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 5),
            'busride_id' => Busride::inRandomOrder()->first()->id,
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
