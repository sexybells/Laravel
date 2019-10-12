<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit(),
        'category_name' => $faker->sentence()
    ];
});
