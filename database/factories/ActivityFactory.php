<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Activity::class, function (Faker $faker) { 
    return [
        'user_id' => $faker->randomElement(App\Models\User::all()->pluck('id')->toArray()),
        'poll_id' => $faker->randomElement(App\Models\Poll::all()->pluck('id')->toArray()),
        'action_type' => $faker->numberBetween(1, 9),
    ];
});
