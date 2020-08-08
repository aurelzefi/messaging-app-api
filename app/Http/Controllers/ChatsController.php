<?php

namespace App\Http\Controllers;

use App\Events\ChatDeleted;
use App\Events\MessageUnsent;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChatsController extends Controller
{
    /**
     * Display the chats.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Message::with('sender', 'receiver', 'files')->chatsForAuth()->latest()->get();
    }

    /**
     * Display the chat with the specified user.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return Message::with('sender', 'receiver', 'files')->forAuthWithUser($user)->get();
    }

    /**
     * Update the chat with the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->user()->unreadMessagesWithUser($user)->update(['read_at' => now()]);

        return Message::forAuthWithUser($user)->get();
    }

    /**
     * Remove the chat with the specified user from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $messages = Message::with('files')->forAuthWithUser($user)->get();

        $messages->each(function ($message) {
            Storage::delete($message->files->pluck('name')->toArray());
        });

        Message::forAuthWithUser($user)->delete();

        event(new ChatDeleted($user));

        return response()->noContent();
    }
}
