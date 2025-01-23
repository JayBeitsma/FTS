<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Busride;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\BusrideFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Jay Beitsma',
            'email' => 'jay@beitsma.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'points' => 1200,
            'remember_token' => Str::random(10),
        ]);

        Busride::factory(10)->create();
    }
}
