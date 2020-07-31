<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    /**
     * Display the chats.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Message::with('sender', 'receiver')->chatsForAuth()->latest()->get();
    }

    /**
     * Display the chat with the specified user.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return Message::with('files')->forAuthWithUser($user)->get();
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
        Message::forAuthWithUser($user)->delete();

        return response()->noContent();
    }
}
