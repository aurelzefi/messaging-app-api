<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Events\MessageUnsent;
use App\Message;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required_without:files|nullable|string',
            'files' => 'array',
            'files.*' => 'file|max:5120',
        ]);

        $message = $request->user()->sentMessages()->create([
            'receiver_id' => $request->input('receiver_id'),
            'content' => $request->input('content'),
        ]);

        if ($request->hasFile('files')) {
            return $message->files()->createMany(
                collect($request->file('files'))->map(function ($file) {
                    return ['name' => $file->store('files')];
                })->toArray()
            );
        }

        $message->load('files');

        event(new MessageSent($message));

        return $message;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Contracts\Filesystem\Filesystem  $files
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     *
     * @throws \Exception
     */
    public function destroy(Filesystem $files, Message $message)
    {
        $this->authorize('delete', $message);

        $files->delete(
            $message->files->map(function ($file) {
                return "files/{$file->name}";
            })->toArray()
        );

        event(new MessageUnsent($message));

        $message->delete();

        return response()->noContent();
    }
}
