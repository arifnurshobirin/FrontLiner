<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ScheduleModel;


$factory->define(ScheduleModel::class, function () {
    $faker = Faker\Factory::create('id_ID');

    return [
        'Employee' => $faker->unique()->numberBetween(100,999),
        'FullName' => $faker->name,
        'Date' =>$faker->date($format = 'Y-m-d', $min='2020-06-01', $max = 'now'),
        'CodeShift' =>$faker->randomElement($array = array ('OFF','A7','A8','A9','A10','A11','A12','A13','A14','A15','A16',
                                                    'B7','B8','B9','B10','B11','B12','B13','B14','B15','B16','B17','B18'))        
    ];
});
