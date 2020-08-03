<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Laravel\Sanctum\PersonalAccessToken;

class TokenPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \Laravel\Sanctum\PersonalAccessToken  $token
     * @return mixed
     */
    public function delete(User $user, PersonalAccessToken $token)
    {
        return $user->id === $token->tokenable_id;
    }
}
