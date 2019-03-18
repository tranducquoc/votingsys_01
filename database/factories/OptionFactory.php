<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Option::class, function (Faker $faker) {
    return [
        'poll_id' => $faker->randomElement(App\Models\Poll::all()->pluck('id')->toArray()),
        'name' => $faker->name,
        'description' => $faker->paragraph,
    ];
});
