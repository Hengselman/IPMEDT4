<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///////////////////////////////////////////// High intensity /////////////////////////////////////////////
        DB::table('exercises')->insert([
            'name' => "Push ups",
            'description' => "",
            'intensity' => 3,
            'calories' => 10,
        ]);
        DB::table('exercises')->insert([
            'name' => "Lunges",
            'description' => "",
            'intensity' => 3,
            'calories' => 10,
        ]);
        DB::table('exercises')->insert([
            'name' => "Planken",
            'description' => "",
            'intensity' => 3,
            'calories' => 10,
        ]);
        DB::table('exercises')->insert([
            'name' => "Sit ups",
            'description' => "",
            'intensity' => 3,
            'calories' => 10,
        ]);
        DB::table('exercises')->insert([
            'name' => "Lucht joggen",
            'description' => "",
            'intensity' => 3,
            'calories' => 10,
        ]);

        ///////////////////////////////////////////// Medium intensity /////////////////////////////////////////////
        DB::table('exercises')->insert([
            'name' => "Squats",
            'description' => "",
            'intensity' => 2,
            'calories' => 10,
        ]);
        DB::table('exercises')->insert([
            'name' => "Star jumps",
            'description' => "",
            'intensity' => 2,
            'calories' => 10,
        ]);

        ///////////////////////////////////////////// Low intensity /////////////////////////////////////////////
        DB::table('exercises')->insert([
            'name' => "Star jumps",
            'description' => "",
            'intensity' => 1,
            'calories' => 10,
        ]);
        DB::table('exercises')->insert([
            'name' => "Tapdansen",
            'description' => "",
            'intensity' => 1,
            'calories' => 10,
        ]);
        DB::table('exercises')->insert([
            'name' => "Staan/zitten",
            'description' => "Sta en zitten zonder je handen/armen te gebruiken",
            'intensity' => 1,
            'calories' => 10,
        ]);
        DB::table('exercises')->insert([
            'name' => "Fles water vullen",
            'description' => "Haal water",
            'intensity' => 1,
            'calories' => 10,
        ]);
    }
}
