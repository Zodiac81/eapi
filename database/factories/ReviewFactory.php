<?php

use App\Model\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) {

    return [
        'product_id' => function(){
            return Product::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        },
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(0,5)
    ];
});
