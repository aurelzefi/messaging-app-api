<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\File;
use App\Message;
use Faker\Generator as Faker;

$factory->define(File::class, function (Faker $faker) {
    return [
        'message_id' => factory(Message::class),
        'name' => $faker->image(storage_path('app/files'), 640, 480, null, false),
    ];
});
