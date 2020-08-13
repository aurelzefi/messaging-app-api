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
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['chat_id'];

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
     * Get the chat ID attribute.
     *
     * @return string
     */
    public function getChatIdAttribute()
    {
        return collect([$this->attributes['sender_id'], $this->attributes['receiver_id']])->sort()->implode('.');
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
            DB::raw(
                'case when sender_id > receiver_id
                    then concat(sender_id, receiver_id)
                    else concat(receiver_id, sender_id)
                end'
            )
        ))->withUnreadCount();
    }

    /**
     * Scope a query to include the unread count for the chats.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithUnreadCount($query)
    {
        return $query->addSelect([
            'unread_count' => Message::selectRaw('count(*) count')
                ->from('messages', 'unread_messages')
                ->where('receiver_id', auth()->id())
                ->whereRaw(
                    sprintf(
                        'case when messages.sender_id = %s
                            then sender_id = messages.receiver_id
                            else sender_id = messages.sender_id
                        end',
                        auth()->id()
                    )
                )
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
