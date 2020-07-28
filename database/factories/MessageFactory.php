<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use App\User;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'sender_id' => factory(User::class),
        'receiver_id' => factory(User::class),
        'content' => $faker->text,
    ];
});
