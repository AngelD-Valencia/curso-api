<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'name'=>'Resuelva',
            'alternative1'=>'a+b',
            'alternative2'=>'a+b',
            'alternative3'=>'a+b',
            'alternative4'=>'a+b',
            'alternative5'=>'a+b',
            'exam_id'=>1,
        ]);
    }
}
