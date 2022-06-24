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
            'description' => "Ga met je buik op de grond liggen met de handen op de grond. Zet je handen op schouderbreedte neer met de ellebogen licht naar binnen gebogen. Strek je armen waardoor je lichaam omhoog komt.",
            'intensity' => 3,
            'calories' => 76,
            'quantity' => '10 keer',
            'imagePath' => '../Assets/pushups.png',
        ]);
        DB::table('exercises')->insert([
            'name' => "Lunges",
            'description' => "Sta rechtop met je benen op heupwijdte uit elkaar. Leg beide handen op je heupen. Span je buikspieren aan zodat je je rug rechtop houdt. Doe met één voet een grote stap naar voren.",
            'intensity' => 3,
            'calories' => 33,
            'quantity' => '12 keer',
            'imagePath' => '../Assets/lunges.png',
        ]);
        DB::table('exercises')->insert([
            'name' => "Planken",
            'description' => "Ga op je buik liggen en plaats je voeten 10 centimeter van elkaar. Plaats je ellebogen onder je schouders. Span je buik- en bilspieren aan en breng je heup omhoog. Houd je lichaam zo recht mogelijk. Houd dit 30 seconden vast.",
            'intensity' => 3,
            'calories' => 89,
            'quantity' => 'voor 30 seconden',
            'imagePath' => '../Assets/planken.png',
        ]);
        DB::table('exercises')->insert([
            'name' => "Sit ups",
            'description' => "Ga liggen met de rug op de vloer. Plaats de voeten plat op de vloer, knieën recht omhoog gericht. Kruis de onderarmen op de borst. Breng je borst naar je bekken door de buikspieren aan te spannen. Concentreer je op het krommen van de wervelkolom.",
            'intensity' => 3,
            'calories' => 68,
            'quantity' => '16 keer',
            'imagePath' => '../Assets/situps.png',
        ]);
        DB::table('exercises')->insert([
            'name' => "Licht joggen",
            'description' => "Blijf op de zelfde plek terwijl je licht gaat joggen.",
            'intensity' => 3,
            'calories' => 54,
            'quantity' => 'voor 30 seconden',
            'imagePath' => '../Assets/lichtjoggen.png',
        ]);

        ///////////////////////////////////////////// Medium intensity /////////////////////////////////////////////
        DB::table('exercises')->insert([
            'name' => "Squats",
            'description' => "Ga rechtop staan met je voeten op schouderbreedte waarbij de voeten ongeveer 30 graden naar buiten wijzen. Zak door je knieën waarbij je je billen naar recht naar achteren duwt.",
            'intensity' => 2,
            'calories' => 32,
            'quantity' => '8 keer',
            'imagePath' => '../Assets/squats.png',
        ]);
        DB::table('exercises')->insert([
            'name' => "Jumping Jacks",
            'description' => "Spring op en neer terwijl je je arme en benen spreid.",
            'intensity' => 2,
            'calories' => 54,
            'quantity' => '20 keer',
            'imagePath' => '../Assets/jumpingjacks.png',
        ]);
        DB::table('exercises')->insert([
            'name' => "Muurzitten",
            'description' => "Ga met je rug tegen een muur staan, zak door je knieen alsof je gaat zitten in een hoek van 90 graden. Houd je bilspieren aangespannen als je in de gehurkte positie staat, en kom weer recht omhoog alsof je door een touwtje.",
            'intensity' => 2,
            'calories' => 48,
            'quantity' => 'voor 30 seconden',
            'imagePath' => '../Assets/muurzitten.png',
        ]);
        DB::table('exercises')->insert([
            'name' => "Trap lopen",
            'description' => "Loop de dichtsbijzijnde trap 2 keer op en af, als je geen trap hebt loop dan 2 rondjes door het kantoor.",
            'intensity' => 2,
            'calories' => 56,
            'quantity' => 'voor 60 seconden',
            'imagePath' => '../Assets/traplopen.png',
        ]);
        DB::table('exercises')->insert([
            'name' => "Leg swings",
            'description' => "Ga zitten op je stoel en zwaai je benen 1 minuut lang van voor naar achteren.",
            'intensity' => 2,
            'calories' => 32,
            'quantity' => 'voor 60 seconden',
            'imagePath' => '../Assets/legswings.png',
        ]);

        ///////////////////////////////////////////// Low intensity /////////////////////////////////////////////
        DB::table('exercises')->insert([
            'name' => "Tapdansen",
            'description' => "Ga op je stoel zitten en ga zittend tapdansen voor 30 seconden",
            'intensity' => 1,
            'calories' => 12,
            'quantity' => 'voor 30 seconden',
            'imagePath' => '../Assets/legswings.png',
        ]);
        DB::table('exercises')->insert([
            'name' => "Staan/zitten",
            'description' => "Sta op en ga weer zitten zonder je handen/armen te gebruiken.",
            'intensity' => 1,
            'calories' => 17,
            'quantity' => '5 keer',
            'imagePath' => '../Assets/staanzitten.png',
        ]);
        DB::table('exercises')->insert([
            'name' => "Fles water vullen",
            'description' => "Haal water, probeer de langste route te nemen",
            'intensity' => 1,
            'calories' => 10,
            'quantity' => 'voor 60 seconden',
            'imagePath' => '../Assets/fleswatervullen.png',
        ]);

        DB::table('exercises')->insert([
            'name' => "Schouders ophalen",
            'description' => "Haal je schouders op en laat ze weer zakken.",
            'intensity' => 1,
            'calories' => 6,
            'quantity' => '12 keer',
            'imagePath' => '../Assets/schoudersophalen.png',
        ]);
        
        DB::table('exercises')->insert([
            'name' => "Billen aanspannen",
            'description' => "span je billen 10 seconden aan en ontspan ze weer.",
            'intensity' => 1,
            'calories' => 3,
            'quantity' => '5 keer',
            'imagePath' => '../Assets/pushups.png',
        ]);
    }
}
