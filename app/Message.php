<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the sender for the message.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sender()
    {
       return $this->belongsTo(User::class, 'sender_id');
    }

    /**
     * Get the receiver for the message.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    /**
     * Get the files for the message.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function files()
    {
        return $this->hasMany(File::class);
    }

    /**
     * Scope a query to only include chats for the authenticated user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeChatsForAuth($query)
    {
        return $query->where(function ($query) {
            $query->where('sender_id', auth()->id())->orWhere('receiver_id', auth()->id());
        })
        ->whereIn('id', Message::selectRaw('max(id) id')->groupBy(
            DB::raw('if(sender_id > receiver_id, concat(sender_id, receiver_id), concat(receiver_id, sender_id))')
        ))->addSelect([
            'unread_count' => Message::selectRaw('count(*) count')
                ->from('messages', 'unread_messages')
                ->where('receiver_id', auth()->id())
                ->where(function ($query) {
                    $query->whereColumn('sender_id', 'messages.sender_id')
                        ->orWhereColumn('sender_id', 'messages.receiver_id');
                })
                ->whereNull('read_at')
        ]);
    }

    /**
     * Scope a query to only include chats for the authenticated user with the given user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  \App\User  $user
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForAuthWithUser($query, User $user)
    {
        return $query->where(function ($query) use ($user) {
            $query->where('sender_id', auth()->id())->where('receiver_id', $user->id);
        })
        ->orWhere(function ($query) use ($user) {
            $query->where('sender_id', $user->id)->where('receiver_id', auth()->id());
        });
    }
}
