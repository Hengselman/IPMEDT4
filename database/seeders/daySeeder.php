<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class daySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dagen = ['Maandag', 'Dinsdag', "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"];

        foreach ($dagen as $dag)
        DB::table('days')->insert([
            'day' => $dag
        ]);
    }
}
