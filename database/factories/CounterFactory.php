<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CounterModel;


$factory->define(CounterModel::class, function () {
    $faker = Faker\Factory::create('id_ID');

    return [
        'NoCounter' => $faker->unique()->numberBetween(1,99),
        'IpAddress' => $faker->unique()->ipv4,
        'MacAddress' => $faker->unique()->macAddress,
        'TypeCounter' => $faker->randomElement($array = array ('Regular', 'SaladBar','Milk','Wine','Deptstore','Electronic','TransHello','Homedel','Cigarette','TransLiving','TransHardware','Bakery','Dokar','Canvasing','Backup')),
        'StatusCounter' => $faker->randomElement($array = array ('Active', 'Inaktive','Normal','Broken','Queueing'))
    ];
});
