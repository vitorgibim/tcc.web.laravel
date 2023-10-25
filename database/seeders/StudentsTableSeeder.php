<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Str;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            Student::create([
                'name' => 'Student ' . $i,
                'ra' => mt_rand(10000, 99999),
                'cpf' => mt_rand(100000000, 999999999),
                'email' => strtolower(Str::random(10).'@email.com'),
                'address' => 'Address ' . $i,
                'address_number' => mt_rand(1, 1000),
                'neighborhood' => 'Neighborhood ' . $i,
                'city_id' => 1,
                'course_id'=> 1
            ]);
        }
    }
}