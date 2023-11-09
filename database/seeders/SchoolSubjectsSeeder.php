<?php

namespace Database\Seeders;
use App\Models\SchoolSubject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SchoolSubject::create(['name' => 'Matemática', 'workload' => 350]);
        SchoolSubject::create(['name' => 'Português', 'workload' => 350]);
        SchoolSubject::create(['name' => 'Física', 'workload' => 350]);
        SchoolSubject::create(['name' => 'Química', 'workload' => 350]);
        SchoolSubject::create(['name' => 'Biologia', 'workload' => 350]);
        SchoolSubject::create(['name' => 'História', 'workload' => 350]);
        SchoolSubject::create(['name' => 'Geografia', 'workload' => 350]);
        SchoolSubject::create(['name' => 'Filosofia', 'workload' => 350]);
        SchoolSubject::create(['name' => 'Sociologia', 'workload' => 350]);
        SchoolSubject::create(['name' => 'Educação Física', 'workload' => 350]);
    }
}
