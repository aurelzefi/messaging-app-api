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
     * Store a newly created token in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Validation\ValidationException
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
     * Remove the specified token from storage.
     *
     * @param \Laravel\Sanctum\PersonalAccessToken $token
     * @return \Illuminate\Http\Response
     *
     * @throws \Exception
     */
    public function destroy(PersonalAccessToken $token)
    {
        $this->authorize('delete', $token);

        $token->delete();

        return response()->noContent();
    }
}
