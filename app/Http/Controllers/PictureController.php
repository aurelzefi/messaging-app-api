<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'picture' => 'required|image|max:5120',
        ]);

        Storage::disk('public')->delete($request->user()->picture);

        $request->user()->fill([
            'picture' => $request->file('picture')->store('pictures', 'public'),
        ])->save();

        return $request->user();
    }
}
