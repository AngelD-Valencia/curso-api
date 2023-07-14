<?php

namespace Database\Seeders;

use App\Models\StudentCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentCourse::create([
            'course_id'=>1,
            'student_id'=>1,
        ]);
        
    }
}
