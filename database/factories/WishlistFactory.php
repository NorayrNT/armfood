<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Wishlist;
use App\User;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Wishlist::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'product_id' => factory(Product::class),
    ];
});
