<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cat;
use Faker\Generator as Faker;

$factory->define(Cat::class, function (Faker $faker) {
    return [
        "name" => $faker -> word ,
        "race" => $faker -> word ,
        "cat_rfid" => $faker -> swiftBicNumber
    ];
});
