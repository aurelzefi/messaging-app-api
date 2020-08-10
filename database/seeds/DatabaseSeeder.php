<?php

use App\File;
use App\Message;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
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

        User::all()->each(function (User $user) {
            $messages = [];

            for ($i = 0; $i < rand(5, 50); $i++) {
                $messages[] = factory(Message::class)->make([
                    'sender_id' => $user,
                    'receiver_id' => User::whereKeyNot($user->id)->inRandomOrder()->first(),
                ]);
            }

            $messages = $user->sentMessages()->saveMany($messages);

            foreach ($messages as $message) {
                $files = [];

                for ($j = 0; $j < rand(0, 3); $j++) {
                    $files[] = factory(File::class)->make([
                        'message_id' => $message,
                    ]);
                }

                $message->files()->saveMany($files);
            }
        });
    }
}
