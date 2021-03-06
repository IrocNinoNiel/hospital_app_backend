<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        User::truncate();

        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('pass123');

        User::create([
        
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => $password,
            'type'=>'administration',
            'status'=>'active'
        ]);

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            User::create([
        
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
                'type'=>'user',
                'status'=>'active'
            ]);
        }
    }
}
