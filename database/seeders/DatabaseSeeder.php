<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
        UsersSeeder::class,
        CitiesSeeder::class,
        CoursesSeeder::class,
        TeachersSeeder::class,
        BeaconsSeeder::class,
        StudentsSeeder::class,
        ClassroomsSeeder::class,
        SchoolSubjectsSeeder::class,
        ]);
    }
}
