<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class IntensitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intensities')->insert([
            'intensity' => "Easy",
        ]);
        DB::table('intensities')->insert([
            'intensity' => "Normal",
        ]);
        DB::table('intensities')->insert([
            'intensity' => "Hard",
        ]);
    }
}
