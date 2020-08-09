<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\File;
use App\Message;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;

$factory->define(File::class, function (Faker $faker) {
    if(! Storage::exists('files')) {
        Storage::makeDirectory('files');
    }

    return [
        'message_id' => factory(Message::class),
        'name' => 'files/'.$faker->image(storage_path('app/files'), 640, 480, null, false),
    ];
});
