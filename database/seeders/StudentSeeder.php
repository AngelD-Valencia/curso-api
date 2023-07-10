<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            "name" => "Angel David",
            "lastname" => "Gonzales",
            "dni" => "12345678",
            "email" => "agonzalesval@unprg.edu.pe",
            "phone" => "987654321"
        ]);
    }
}
