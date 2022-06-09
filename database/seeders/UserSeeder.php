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
            "email" => "test@gmail.com",
            'password' => '123',
            'score' => 0,
            'age' => 19
        ]);
    }
}
