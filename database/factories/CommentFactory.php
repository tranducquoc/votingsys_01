<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(App\Models\User::all()->pluck('id')->toArray()),
        'poll_id' => $faker->randomElement(App\Models\Poll::all()->pluck('id')->toArray()),
        'name' => $faker->name,
        'content' => $faker->paragraph,
    ];
});
