<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ParticipantVote::class, function (Faker $faker) {
    return [
        'participant_id' => $faker->randomElement(App\Models\Participant::all()->pluck('id')->toArray()),
        'option_id' => $faker->randomElement(App\Models\Option::all()->pluck('id')->toArray()),
    ];
});
