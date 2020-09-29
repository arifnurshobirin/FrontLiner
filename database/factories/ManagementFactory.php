<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ManagementModel;

$factory->define(ManagementModel::class, function () {
    $faker = Faker\Factory::create('id_ID');

    return [
        'IdCard' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'FullName' => $faker->name,
        'Position' =>$faker->randomElement($array = array ('Store General Manager', 'Secretary','Divisi Manager','Sales Manager','Store Controller','RPM','Maintenance Head','OSS Manager','Receiving Head','TVS Manager','Warung Manager')),
        'Avatar' => $faker->randomElement($array = array ('arif.jpg', 'desi.jpg','shopa.jpg','kasir1.jpg','kasir2.jpg')),
        'Status' =>$faker->randomElement($array = array ('Active', 'Inactive'))
    ];
});
