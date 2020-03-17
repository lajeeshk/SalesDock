<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'product_name' =>  $faker->sentence(2),
        'upload_speed' => $faker->numberBetween(1,1000),
        'download_speed' => $faker->numberBetween(1,1000),
        'technology' => $faker->randomElement(array('fiber','dialup')),
        'static_ip' => $faker->boolean()
    ];
});
