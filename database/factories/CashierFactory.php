<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CashierModel;


$factory->define(CashierModel::class, function () {
    $faker = Faker\Factory::create('id_ID');

    return [
        'Employee' => $faker->unique()->numberBetween(100,999),
        'FullName' => $faker->name,
        'DateOfBirth' =>$faker->date($format = 'Y-m-d', $max = '-17 years'),
        'Address' =>$faker->address,
        'PhoneNumber' =>$faker->phoneNumber,
        'Position' =>$faker->randomElement($array = array ('Cashier', 'Senior Cashier','Cashier Head','TDR','Customer Service')),
        'JoinDate' =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'Status' =>$faker->randomElement($array = array ('Active', 'Inactive')),
        'Avatar' => $faker->randomElement($array = array ('arif.jpg', 'desi.jpg','shopa.jpg','kasir1.jpg','kasir2.jpg')),
    ];
});
