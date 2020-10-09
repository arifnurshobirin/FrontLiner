<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;


$factory->define(Schedule::class, function () {
    $faker = Faker\Factory::create('id_ID');

    return [
        'cashier_id' => $faker->numberBetween(1,99),
        'workinghour_id' => $faker->unique()->numberBetween(1,99),
        'Date' =>$faker->date($format = 'Y-m-d', $min='2020-06-01', $max = 'now'),        
    ];
});
