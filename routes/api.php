<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', 'RegisterController@register');
Route::post('/sanctum/token', 'TokensController@store');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/users', 'UsersController@index');

    Route::delete('/sanctum/token/{id}', 'TokensController@destroy');

    Route::resource('messages', 'MessagesController')->only('store', 'update', 'destroy');

    Route::get('files/{file}', 'FilesController@show');

    Route::resource('chats', 'ChatsController')
        ->only('index', 'show', 'update', 'destroy')
        ->parameters(['chats' => 'user',]);
});
