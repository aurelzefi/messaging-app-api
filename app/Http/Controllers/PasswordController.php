<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    /**
     * Update the password for the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     * @throws \Illuminate\Validation\ValidationException
     *
     * @group Password
     * @bodyParam password string required The current password for the authenticated user.
     * @bodyParam new_password string required The new password for the authenticated user.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        if (! Hash::check($request->input('password'), $request->user()->password)) {
            throw ValidationException::withMessages([
                'password' => __('The current password field does not match.'),
            ]);
        }

        $request->user()->fill([
            'password' => Hash::make($request->input('new_password')),
        ])->save();

        return $request->user();
    }
}
