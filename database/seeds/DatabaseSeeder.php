<?php

use App\File;
use App\Message;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  \Faker\Generator  $faker
     * @return void
     */
    public function run(Faker $faker)
    {
        factory(User::class)->create([
            'name' => 'Aurel Zefi',
            'email' => 'aurelzefi1994@gmail.com',
        ]);

        factory(User::class)->create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ]);

        factory(User::class, 10)->create();

        User::all()->each(function (User $sender) use ($faker) {
            $messages = [];

            for ($i = 0; $i < rand(5, 50); $i++) {
                $receiver = User::whereKeyNot($sender->id)->inRandomOrder()->first();
                $latest = $sender->created_at->diffInSeconds() ? $sender : $receiver;
                $createdAt = $faker->dateTimeBetween($latest->created_at);

                $messages[] = factory(Message::class)->make([
                    'sender_id' => $sender,
                    'receiver_id' => $receiver,
                    'created_at' => $createdAt,
                    'updated_at' => $createdAt,
                    'read_at' => $faker->randomElement([null, $faker->dateTimeInInterval($createdAt)])
                ]);
            }

            $messages = $sender->sentMessages()->saveMany($messages);

            foreach ($messages as $message) {
                $files = [];

                for ($j = 0; $j < rand(0, 3); $j++) {
                    $files[] = factory(File::class)->make([
                        'message_id' => $message,
                        'created_at' => $message->created_at,
                        'updated_at' => $message->updated_at,
                    ]);
                }

                $message->files()->saveMany($files);
            }
        });
    }
}
