<?php

namespace App\Events;

use Illuminate\Broadcasting\PrivateChannel;

class MessageRead extends MessageEvent
{
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel
     */
    public function broadcastOn()
    {
        return new PrivateChannel("App.User.{$this->message->sender_id}");
    }
}
