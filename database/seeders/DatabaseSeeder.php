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
        User::factory(3)->create();

        User::factory()->create([
            'name' => 'Jay Beitsma',
            'email' => 'jay@beitsma.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'points' => 1200,
            'remember_token' => Str::random(10),
        ]);

        $busrides = [
            ['name' => 'Amsterdam to Berlin', 'ftimg' => 'amsterdam-berlin.jpg', 'festival_name' => 'Berlin Festival', 'description' => 'Travel from Amsterdam to Berlin for the Berlin Festival.', 'price' => 50, 'starting_point' => 'Amsterdam', 'end_point' => 'Berlin', 'departure_time' => '2024-06-01 08:00:00', 'arrival_time' => '2024-06-01 16:00:00', 'tickets_available' => 50],
            ['name' => 'Paris to Brussels', 'ftimg' => 'paris-brussels.jpg', 'festival_name' => 'Brussels Summer Festival', 'description' => 'Travel from Paris to Brussels for the Brussels Summer Festival.', 'price' => 30, 'starting_point' => 'Paris', 'end_point' => 'Brussels', 'departure_time' => '2024-07-01 09:00:00', 'arrival_time' => '2024-07-01 12:00:00', 'tickets_available' => 50],
            ['name' => 'London to Dublin', 'ftimg' => 'london-dublin.jpg', 'festival_name' => 'Dublin Music Festival', 'description' => 'Travel from London to Dublin for the Dublin Music Festival.', 'price' => 60, 'starting_point' => 'London', 'end_point' => 'Dublin', 'departure_time' => '2024-08-01 07:00:00', 'arrival_time' => '2024-08-01 15:00:00', 'tickets_available' => 50],
            ['name' => 'Rome to Vienna', 'ftimg' => 'rome-vienna.jpg', 'festival_name' => 'Vienna Music Festival', 'description' => 'Travel from Rome to Vienna for the Vienna Music Festival.', 'price' => 70, 'starting_point' => 'Rome', 'end_point' => 'Vienna', 'departure_time' => '2024-09-01 06:00:00', 'arrival_time' => '2024-09-01 14:00:00', 'tickets_available' => 50],
            ['name' => 'Madrid to Lisbon', 'ftimg' => 'madrid-lisbon.jpg', 'festival_name' => 'Lisbon Music Festival', 'description' => 'Travel from Madrid to Lisbon for the Lisbon Music Festival.', 'price' => 40, 'starting_point' => 'Madrid', 'end_point' => 'Lisbon', 'departure_time' => '2024-10-01 10:00:00', 'arrival_time' => '2024-10-01 14:00:00', 'tickets_available' => 50],
            ['name' => 'Berlin to Prague', 'ftimg' => 'berlin-prague.jpg', 'festival_name' => 'Prague Music Festival', 'description' => 'Travel from Berlin to Prague for the Prague Music Festival.', 'price' => 35, 'starting_point' => 'Berlin', 'end_point' => 'Prague', 'departure_time' => '2024-11-01 08:00:00', 'arrival_time' => '2024-11-01 12:00:00', 'tickets_available' => 50],
            ['name' => 'Vienna to Budapest', 'ftimg' => 'vienna-budapest.jpg', 'festival_name' => 'Budapest Music Festival', 'description' => 'Travel from Vienna to Budapest for the Budapest Music Festival.', 'price' => 25, 'starting_point' => 'Vienna', 'end_point' => 'Budapest', 'departure_time' => '2024-12-01 09:00:00', 'arrival_time' => '2024-12-01 11:00:00', 'tickets_available' => 50],
            ['name' => 'Stockholm to Oslo', 'ftimg' => 'stockholm-oslo.jpg', 'festival_name' => 'Oslo Music Festival', 'description' => 'Travel from Stockholm to Oslo for the Oslo Music Festival.', 'price' => 45, 'starting_point' => 'Stockholm', 'end_point' => 'Oslo', 'departure_time' => '2024-05-01 07:00:00', 'arrival_time' => '2024-05-01 11:00:00', 'tickets_available' => 50],
            ['name' => 'Helsinki to Tallinn', 'ftimg' => 'helsinki-tallinn.jpg', 'festival_name' => 'Tallinn Music Festival', 'description' => 'Travel from Helsinki to Tallinn for the Tallinn Music Festival.', 'price' => 20, 'starting_point' => 'Helsinki', 'end_point' => 'Tallinn', 'departure_time' => '2024-04-01 08:00:00', 'arrival_time' => '2024-04-01 10:00:00', 'tickets_available' => 50],
            ['name' => 'Copenhagen to Amsterdam', 'ftimg' => 'copenhagen-amsterdam.jpg', 'festival_name' => 'Amsterdam Music Festival', 'description' => 'Travel from Copenhagen to Amsterdam for the Amsterdam Music Festival.', 'price' => 55, 'starting_point' => 'Copenhagen', 'end_point' => 'Amsterdam', 'departure_time' => '2024-03-01 06:00:00', 'arrival_time' => '2024-03-01 14:00:00', 'tickets_available' => 50],
        ];

        foreach ($busrides as $busride) {
            Busride::create($busride);
        }


    }
}
