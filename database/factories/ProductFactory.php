<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Type;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'type_id' => factory(Type::class),
        'name' => $faker->name,
        'desc'=> 'here goes product description',
        'price' => 500,
        'old_price' => 2500,
        'images' => '',
        'discount' => 5,
        'verify' => 1,
        'new' => 1
    ];
});
