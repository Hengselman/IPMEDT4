<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([
            'userId' => 1,
            'notificationId' => 1,
            'time' => "16:25",
        ]);
    }
}
