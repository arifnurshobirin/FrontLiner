<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Banknote;
use Faker\Generator as Faker;

$factory->define(Banknote::class, function (Faker $faker) {
    return [
        'seratusribu' => $faker->randomElement($array = array ('100000','200000','3000000')),
        'limapuluhribu' => $faker->randomElement($array = array ('50000','100000','150000')),
        'duapuluhribu' => $faker->randomElement($array = array ('20000','40000','60000')),
        'sepuluhribu' => $faker->randomElement($array = array ('10000','20000','30000')),
        'limaribu' => $faker->randomElement($array = array ('5000','10000','15000')),
        'duaribu' => $faker->randomElement($array = array ('2000','4000','6000')),
        'seribu' => $faker->randomElement($array = array ('1000','2000','3000'))
    ];
});
