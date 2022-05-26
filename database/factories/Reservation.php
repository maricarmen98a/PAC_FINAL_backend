<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) use ($factory)  {

    return [
        'reservation_code' => Str::random(10),
        'seat' => $faker->numberBetween(1,23) . strtoupper($faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F'])) 

    ];
});


