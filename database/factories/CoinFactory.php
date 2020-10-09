<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coin;
use Faker\Generator as Faker;

$factory->define(Coin::class, function (Faker $faker) {
    return [
        'seribu' => $faker->randomElement($array = array ('1000','2000','3000')),
        'limaratus' => $faker->randomElement($array = array ('500','1000','1500')),
        'duaratus' => $faker->randomElement($array = array ('200','400','600')),
        'seratus' => $faker->randomElement($array = array ('100','200','300')),
        'limapuluh' => $faker->randomElement($array = array ('50','100','150')),
    ];
});
