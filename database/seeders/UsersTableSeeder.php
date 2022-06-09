<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Edo Verschuur",
            'email' => "edoverschuur@gmail.com",
            'password' => bcrypt('D13goxdlol'),
            'age' => 22,
            
        ]);
    }
}
