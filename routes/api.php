<?php

use Illuminate\Http\Request;

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

Route::resource('users', 'UserController', ['only' => [
    'index', 'store', 'update',
]]);

Route::resource('users.coffees', 'CoffeeController', ['only' => [
    'index', 'store',
]]);
