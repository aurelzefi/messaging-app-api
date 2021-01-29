<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\PersonalAccessToken;

class TokensController extends Controller
{
    /**
     * Store a newly created token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     *
     * @group Tokens
     * @bodyParam email string required The email for the user.
     * @bodyParam password string required The password for the user.
     * @bodyParam device_name string required The device name for the user's device.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required|string|max:255',
        ]);

        $user = User::where('email', $request->input('email'))->first();

        if (! $user || ! Hash::check($request->input('password'), $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'token' => $user->createToken($request->input('device_name'))->plainTextToken,
        ]);
    }

    /**
     * Remove the specified token.
     *
     * @param  \Laravel\Sanctum\PersonalAccessToken  $token
     * @return \Illuminate\Http\Response
     *
     * @throws \Exception
     *
     * @group Tokens
     * @urlParam token required The token ID.
     */
    public function destroy(PersonalAccessToken $token)
    {
        $this->authorize('delete', $token);

        $token->delete();

        return response()->noContent();
    }
}
