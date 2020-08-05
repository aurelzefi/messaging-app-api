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

Route::post('/user', 'UserController@store');
Route::post('/tokens', 'TokensController@store');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', 'UserController@show');
    Route::put('/user', 'UserController@update');
    Route::delete('/user', 'UserController@destroy');

    Route::put('/user/password', 'PasswordController');
    Route::put('/user/picture', 'PictureController');

    Route::get('/users', 'UsersController@index');
    Route::get('files/{file}', 'FilesController@show');

    Route::delete('/tokens/{token}', 'TokensController@destroy');

    Route::resource('messages', 'MessagesController')->only('store', 'destroy');
    Route::resource('chats', 'ChatsController')->only('index', 'show', 'update', 'destroy');
});
