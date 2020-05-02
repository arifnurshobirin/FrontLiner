<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ScheduleModel;


$factory->define(ScheduleModel::class, function (Faker $faker) {
    $faker = Faker\Factory::create('id_ID');

    return [
        'Employee' => $faker->unique()->numberBetween(100,999),
        'FullName' => $faker->name,
        'Date' =>$faker->date($format = 'Y-m-d', $max = '-17 years'),
        'StartWork' =>$faker->time($format = 'H:i', $max = 'now'),
        'EndWork' =>$faker->time($format = 'H:i', $max = 'now'),
    ];
});
