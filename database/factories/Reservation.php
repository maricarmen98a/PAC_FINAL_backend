<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) use ($factory)  {

    return [
        /*'user_id' => $user->id,
        'booking_id' => $booking->id,
        'flight_id' => factory(App\Model\Flight::class),
        'passenger_name' => $user->name,
        'passenger_email' => $user->email,
        'reservation_code' => $booking->promo_code,
        'status' => 'active',
        'airline' => $booking->airline,
        'origin' => 'Aer Iolar',
        'destination' => $booking->destination,
        'price' => $booking->price,*/
        'reservation_code' => Str::random(10),
         'seat' => $faker->numberBetween(1,23) . strtoupper($faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F'])) 

    ];
});


