<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Events\MessageUnsent;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class MessagesController extends Controller
{
    /**
     * Store a newly created message.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @group Messages
     * @bodyParam receiver_id integer The receiver of the message.
     * @bodyParam content string The content of the message.
     * @bodyParam files array An array of images that should be stored for the message.
     */
    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => ['required', Rule::exists('users', 'id')->whereNot('id', $request->user()->id)],
            'content' => ['required_without:files', 'nullable', 'string'],
            'files' => ['array'],
            'files.*' => ['image', 'max:5120'],
        ]);

        $message = $request->user()->sentMessages()->create([
            'receiver_id' => $request->input('receiver_id'),
            'content' => $request->input('content'),
        ]);

        if ($request->hasFile('files')) {
            $message->files()->createMany(
                collect($request->file('files'))->map(function ($file) {
                    return ['name' => $file->store('files')];
                })->toArray()
            );
        }

        $message = $message->fresh('sender', 'receiver', 'files');

        event(new MessageSent($message));

        return $message;
    }

    /**
     * Remove the specified message.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     *
     * @throws \Exception
     *
     * @group Messages
     * @urlParam message required The message ID.
     */
    public function destroy(Message $message)
    {
        $this->authorize('delete', $message);

        event(new MessageUnsent($message));

        Storage::delete($message->files->pluck('name')->toArray());

        $message->delete();

        return response()->noContent();
    }
}
