<?php

use Illuminate\Http\Request;
use App\Foods;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Authentication Routes
 */
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');

/**
 * Set foods route for API
 */
Route::get('foods', 'FoodsController@getAll');

Route::get('foods/{id}', 'FoodsController@getOne');

Route::post('foods', 'FoodsController@create');

Route::put('foods/{id}', 'FoodsController@update');

Route::delete('foods/{id}', 'FoodsController@delete');
