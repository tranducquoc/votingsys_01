<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Participant::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(App\Models\User::all()->pluck('id')->toArray()),
        'ip_address' => '',
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});
