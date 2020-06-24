<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WorkingHourModel;


$factory->define(WorkingHourModel::class, function () {
    $faker = Faker\Factory::create('id_ID');
    return [
        'CodeShift' =>$faker->randomElement($array = array ('OFF','A7','A8','A9','A10','A11','A12','A13','A14','A15','A16',
                                                        'B7','B8','B9','B10','B11','B12','B13','B14','B15','B16','B17','B18')),
        'Shift' =>$faker->randomElement($array = array ('OFF','7:00-15:00','8:00-16:00','9:00-17:00','10:00-18:00','11:00-19:00','12:00-20:00','13:00-21:00','14:00-22:00','15:00-23:00','16:00-24:00',
                                                        '07:00-13:00','8:00-14:00','9:00-15:00','10:00-16:00','11:00-17:00','12:00-18:00','13:00-19:00','14:00-20:00','15:00-21:00','16:00-22:00','17:00-23:00','18:00-24:00')),
        'WorkingHour' =>$faker->randomElement($array = array ('7','5'))
        
    ];
});
