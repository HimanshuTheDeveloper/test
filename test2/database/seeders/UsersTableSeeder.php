<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

          // Generate 1500 users
        for ($i = 1; $i <= 1500; $i++) {
            DB::table('users')->insert([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'mobile' => '23456'.$i,
                'password' => Hash::make('password'), // You can use any password you want
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
