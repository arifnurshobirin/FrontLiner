<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Activity; 


$factory->define(Activity::class, function () {
    $faker = Faker\Factory::create('id_ID');
    return [
        'cashier_id' => $faker->numberBetween(1,50),
        'schedule_id' => $faker->numberBetween(1,50),
        'workinghour_id' => $faker->numberBetween(1,50),
        'counter_id' => $faker->numberBetween(1,50),
        'In' =>$faker->time($format = 'H:i:s', $max = 'now'),
        'Break' =>$faker->time($format = 'H:i:s', $max = 'now'),
        'Back' =>$faker->time($format = 'H:i:s', $max = 'now'),
        'Out' => $faker->time($format = 'H:i:s', $max = 'now')
    ];
});
