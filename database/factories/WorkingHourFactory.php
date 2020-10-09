<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Workinghour;


$factory->define(Workinghour::class, function () {
    $faker = Faker\Factory::create('id_ID');
    return [

        'CodeShift' =>$faker->unique()->randomElement($array = array ('OFF','A7','A8','A9','A10','A11','A12','A13','A14','A15','A16',
                                                        'B7','B8','B9','B10','B11','B12','B13','B14','B15','B16','B17','B18')),
        'StartShift' =>$faker->time($format = 'H:i:s', $max = 'now'),
        'EndShift' =>$faker->time($format = 'H:i:s', $max = 'now'),
        'WorkingHour' =>$faker->randomElement($array = array ('7','5'))
        
    ];
});
