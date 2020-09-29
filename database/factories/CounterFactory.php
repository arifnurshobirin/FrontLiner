<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Counter;


$factory->define(Counter::class, function () {
    $faker = Faker\Factory::create('id_ID');

    return [
        'NoCounter' => $faker->unique()->numberBetween(1,99),
        'IpAddress' => $faker->unique()->ipv4,
        'MacAddress' => $faker->unique()->macAddress,
        'TypeCounter' => $faker->randomElement($array = array ('Regular', 'SaladBar','Milk','Wine','Deptstore','Electronic','TransHello','Homedel','Cigarette','TransLiving','TransHardware','Bakery','Dokar','Canvasing','Backup')),
        'Status' => $faker->randomElement($array = array ('Queueing','Active', 'Inactive','Broken'))
    ];
});
