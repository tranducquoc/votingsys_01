<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Setting::class, function (Faker $faker) {
    return [
        'poll_id' => $faker->randomElement(App\Models\Poll::all()->pluck('id')->toArray()),
        'type' => $faker->numberBetween(1, 5),
        'value' => $faker->numberBetween(0, 50),       
    ];
});
