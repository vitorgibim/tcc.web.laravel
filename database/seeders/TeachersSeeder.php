<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Illuminate\Support\Str;

class TeachersSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            Teacher::create([
                'name' => 'Teacher ' . $i,
                'cpf' => mt_rand(100000000, 999999999),
                'email' => strtolower(Str::random(10).'@email.com'),
                'address' => 'Address ' . $i,
                'address_number' => mt_rand(1, 1000),
                'neighborhood' => 'Neighborhood ' . $i,
                'city_id' => 1
            ]);
        }
    }
}