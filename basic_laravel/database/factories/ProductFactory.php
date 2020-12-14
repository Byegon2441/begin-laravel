<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //auto add data 
        'name' => $faker->sentence(),
        'price' => $faker->randomDigitNotNull(),
        'detail' => $faker->text(),
    ];
});
