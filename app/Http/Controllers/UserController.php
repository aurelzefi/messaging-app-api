<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Store a newly created user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @group User
     * @bodyParam name string required
     * @bodyParam email string required The email for the user.
     * @bodyParam password string required The password for the user.
     * @bodyParam device_name string required The device name for the user's device.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'device_name' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return response([
            'token' => $user->createToken($request->input('device_name'))->plainTextToken,
        ]);
    }

    /**
     * Display the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @group User
     */
    public function show(Request $request)
    {
        return $request->user();
    }

    /**
     * Update the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @group User
     * @bodyParam name string required
     * @bodyParam email string required The email for the user.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'string', 'email', 'max:255',
                Rule::unique('users', 'email')->ignore($request->user())
            ],
        ]);

        $request->user()->fill([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ])->save();

        return $request->user();
    }

    /**
     * Remove the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @group User
     */
    public function destroy(Request $request)
    {
        $request->user()->sentMessages->load('files')->each(function ($message) {
            Storage::delete($message->files->pluck('name')->toArray());
        });

        $request->user()->receivedMessages->load('files')->each(function ($message) {
            Storage::delete($message->files->pluck('name')->toArray());
        });

        Storage::disk('public')->delete($request->user()->picture);

        $request->user()->delete();
        $request->user()->tokens()->delete();

        return response()->noContent();
    }
}
