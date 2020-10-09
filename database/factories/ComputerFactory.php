<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Computer;
use Faker\Generator as Faker;

$factory->define(Computer::class, function (Faker $faker) {
    return [
        'counter_id' => $faker->unique()->numberBetween(1,99),
        'NoComputer' => $faker->unique()->numberBetween(1,99),
        'CPU' => $faker->randomElement($array = array ('Zonerich', 'IBM','HP','Wincore M2','Wincore M3')),
        'Printer' =>$faker->randomElement($array = array ('ND 77', 'Star','Zonerich','Wincore Nixdrof','Epson','HP')),
        'Drawer' =>$faker->randomElement($array = array ('Wincore','IBM','HP')),
        'Scanner' =>$faker->randomElement($array = array ('Magellan 8100', 'Magellan 2000','Datalogic','Zonerich','HP')),
        'Monitor' =>$faker->randomElement($array = array ('TFT', 'HP','Wincore')),
        'Status' => $faker->randomElement($array = array ('Active', 'Inaktive','Broken'))
    ];
});
