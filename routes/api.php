<?php

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

Route::post('/user', 'UserController@store')->name('user.store');
Route::post('/tokens', 'TokensController@store')->name('tokens.store');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', 'UserController@show');
    Route::put('/user', 'UserController@update');
    Route::delete('/user', 'UserController@destroy');

    Route::put('/user/password', 'PasswordController');
    Route::post('/user/picture', 'PictureController');

    Route::get('files/{file}', 'FilesController@show');

    Route::delete('/tokens/{token}', 'TokensController@destroy');

    Route::resource('users', 'UsersController')->only('index', 'show');
    Route::resource('messages', 'MessagesController')->only('store', 'destroy');
    Route::resource('chats', 'ChatsController')->only('index', 'show', 'update', 'destroy');
});
