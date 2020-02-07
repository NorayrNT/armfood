<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderDetail;
use App\Order;
use App\Product;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {
    return [
        'order_id' => factory(Order::class),
        'product_id' => factory(Product::class),
        'price' => 7777,
        'quantity' => 5,
    ];
});
