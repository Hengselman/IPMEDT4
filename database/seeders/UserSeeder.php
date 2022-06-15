<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => "hallo",
            "email" => "test1@gmail.com",
            'password' => '123',
            // 'score' => 20,
            'age' => 19
        ]);

        DB::table('users')->insert([
            'name' => "hallo",
            "email" => "test2@gmail.com",
            'password' => '123',
            // 'score' => 20,
            'age' => 19
        ]);

        DB::table('users')->insert([
            'name' => "hallo",
            "email" => "test3@gmail.com",
            'password' => '123',
            'score' => 20,
            'age' => 19
        ]);
        
    }
}
