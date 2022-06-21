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
            'calories' => 40,
        ]);
        DB::table('exercises')->insert([
            'name' => "Lunges",
            'description' => "",
            'intensity' => 3,
            'calories' => 40,
        ]);
        DB::table('exercises')->insert([
            'name' => "Planken",
            'description' => "",
            'intensity' => 3,
            'calories' => 40,
        ]);
        DB::table('exercises')->insert([
            'name' => "Sit ups",
            'description' => "",
            'intensity' => 3,
            'calories' => 40,
        ]);
        DB::table('exercises')->insert([
            'name' => "Licht joggen",
            'description' => "",
            'intensity' => 3,
            'calories' => 40,
        ]);

        ///////////////////////////////////////////// Medium intensity /////////////////////////////////////////////
        DB::table('exercises')->insert([
            'name' => "Squats",
            'description' => "",
            'intensity' => 2,
            'calories' => 12,
        ]);
        DB::table('exercises')->insert([
            'name' => "Star jumps",
            'description' => "",
            'intensity' => 2,
            'calories' => 18,
        ]);
        DB::table('exercises')->insert([
            'name' => "Muurzitten",
            'description' => "Ga met je rug tegen een muur staan, zak door je knieen alsof je gaat zitten in een hoek van 90 graden.",
            'intensity' => 2,
            'calories' => 13,
        ]);
        DB::table('exercises')->insert([
            'name' => "Trap lopen",
            'description' => "Loop de dichtsbijzijnde trap 2 keer op en af, als je geen trap hebt loop dan 2 rondjes door het kantoor.",
            'intensity' => 2,
            'calories' => 30,
        ]);
        DB::table('exercises')->insert([
            'name' => "Leg swings",
            'description' => "Ga zitten op je stoel en zwaai je benen 1 minuut lang van voor naar achteren.",
            'intensity' => 2,
            'calories' => 12,
        ]);

        ///////////////////////////////////////////// Low intensity /////////////////////////////////////////////
        DB::table('exercises')->insert([
            'name' => "Tapdansen",
            'description' => "Ga op je stoel zitten en ga zittend tapdansen voor 30 seconden",
            'intensity' => 1,
            'calories' => 5,
        ]);
        DB::table('exercises')->insert([
            'name' => "Staan/zitten",
            'description' => "Sta op en ga weer zitten zonder je handen/armen te gebruiken, doe dit 5 keer",
            'intensity' => 1,
            'calories' => 10,
        ]);
        DB::table('exercises')->insert([
            'name' => "Fles water vullen",
            'description' => "Haal water",
            'intensity' => 1,
            'calories' => 4,
        ]);

        DB::table('exercises')->insert([
            'name' => "Schouders ophalen",
            'description' => "Haal je schouders op en laat ze weer zakken, doe dit 5 keer.",
            'intensity' => 1,
            'calories' => 6,
        ]);
        
        DB::table('exercises')->insert([
            'name' => "Billen aanspannen",
            'description' => "span je billen 10 seconden aan en ontspan ze weer, doe dit 5 keer.",
            'intensity' => 1,
            'calories' => 8,
        ]);
    }
}
