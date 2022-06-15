<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AutomatedExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('automated_notifications')->insert([
            'userId' => 1,
            "exercise_amount" => 3,
            'intensity' => 2,
        ]);
    }
}
