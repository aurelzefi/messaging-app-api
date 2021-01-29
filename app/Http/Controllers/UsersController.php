<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display the searched users.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @group Users
     * @queryParam query The query string to search the users.
     * @queryParam take The number of users that should be retrieved.
     */
    public function index(Request $request)
    {
        return User::search($request->input('query'), $request->input('take'))->get();
    }

    /**
     * Display the specified user.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     *
     * @group Users
     * @urlParam user required The user ID.
     */
    public function show(User $user)
    {
        return $user;
    }
}
