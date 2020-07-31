<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the sent messages for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    /**
     * Get the received messages for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    /**
     * Get the unread messages with the given user.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unreadMessagesWithUser(User $user)
    {
        return $this->receivedMessages()
                    ->where('sender_id', $user->id)
                    ->whereNull('read_at');
    }

    /**
     * Scope a query to only include users for the given search.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $string
     * @param  int  $take
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $string, $take)
    {
        $query->where('name', 'like', "%{$string}%")->orWhere('email', 'like', "%{$string}%");

        if (filter_var($take, FILTER_VALIDATE_INT)) {
            $query->take($take);
        }

        return $query;
    }
}
