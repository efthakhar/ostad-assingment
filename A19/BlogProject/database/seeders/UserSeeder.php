<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users          = [
            ['name'=>'efthakhar','email'=>'efthakharbin@gmail.com','password'=> '138390833435'],
            ['name'=>'asif','email'=>'asifbin@gmail.com','password'=> '138390833435'],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
