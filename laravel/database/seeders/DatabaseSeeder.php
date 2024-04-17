<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CourtType;
use App\Models\Court;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => "Ridwan",
            'username' => "zuzu",
            'role' => "admin",
            'password' => bcrypt('123'),
        ]);

        CourtType::insert([
            [
                'name' => 'outdoor'
            ],
            [
                'name' => 'indoor'
            ]
        ]);

        Court::insert([
            [
                'name' => "Reguler",
                'price' => 250000,
                'court_type_id' => 1,
            ],
            [
                'name' => "Matras",
                'price' => 200000,
                'court_type_id' => 1,
            ],
            [
                'name' => "Rumput",
                'price' => 150000,
                'court_type_id' => 1,
            ],
            [
                'name' => "Reguler",
                'price' => 300000,
                'court_type_id' => 2,
            ],
            [
                'name' => "Matras",
                'price' => 250000,
                'court_type_id' => 2,
            ],
            [
                'name' => "Rumput",
                'price' => 200000,
                'court_type_id' => 2,
            ],
        ]);
    }
}
