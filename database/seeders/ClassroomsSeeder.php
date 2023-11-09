<?php

namespace Database\Seeders;
use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Classroom::create([
                'number' => mt_rand(1, 99999),
                'description' => 'Description ' . $i,
                // 'teacher_id'=> mt_rand(1, 100),
            ]);

        }

    }
}
