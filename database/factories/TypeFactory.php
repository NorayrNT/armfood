<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Type;
use Faker\Generator as Faker;

$factory->define(Type::class, function (Faker $faker) {
    return [
        'parent_id' => '0',
        'name' => $faker->name,
        'image' => '',
        'symbol' => ''
    ];
});
