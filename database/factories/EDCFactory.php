<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Edc;
use Faker\Generator as Faker;

$factory->define(Edc::class, function (Faker $faker) {
    return [
        'counter_id' => $faker->unique()->numberBetween(1,99),
        'TIDEDC' => $faker->unique()->numberBetween(1,100),
        'MIDEDC' => $faker->numberBetween(100000000000000,999999999999999),
        'IPAdress' => $faker->numberBetween(1000000000,9999999999),
        'Connection' =>$faker->randomElement($array = array ('GPRS', 'LAN')),
        'SIMCard' => $faker->randomElement($array = array ('Indosat', 'Telkomsel','XL')),
        'TypeEDC' => $faker->randomElement($array = array ('WireCard', 'BCA','Spots')),
        'Status' => $faker->randomElement($array = array ('Active', 'Inaktive','Broken'))

    ];
}); 
