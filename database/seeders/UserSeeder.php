<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Nombre ejemplo 1',
            'email'=>'ejemplo1@gmail.com',
            'password'=> bcrypt('12345'),
        ]);
        User::create([
            'name'=>'Nombre ejemplo 2',
            'email'=>'ejemplo2@gmail.com',
            'password'=> bcrypt('123456'),
        ]);

    }
}
