<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TypeUsersTableSeeder::class,
            StatesTableSeeder::class,
            CitiesTableSeeder::class,
            NeighborhoodsTableSeeder::class,
            PublicPlacesTableSeeder::class,
            GroupExercisesTableSeeder::class,
            ExercisesTableSeeder::class
        ]);
    }
}
