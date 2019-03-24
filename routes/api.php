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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/register','AuthController@register');
// Route::post('/login','AuthController@login');

//Workings START
// Route::middleware('auth:api')->post('/register', '\App\Http\Controllers\Api\AuthController@register');

// Route::middleware('auth:api')->post('/login', '\App\Http\Controllers\Api\AuthController@login');
//Working END


Route::post('/register','\App\Http\Controllers\Api\AuthController@register');
Route::post('/login','\App\Http\Controllers\Api\AuthController@login');


// App\\Http\\Controllers\\API\\UserController
// Route::middleware('auth:api')->get('/users', 'UserController@index');
Route::middleware('auth:api')->get('/users', '\App\Http\Controllers\UserController@index');

Route::middleware('auth:api')->resource('/userseats', '\App\Http\Controllers\UserseatController');
//Route::middleware('auth:api')->post('/userseats/store', '\App\Http\Controllers\UserseatController@store');

Route::middleware('auth:api')->get('/apps', '\App\Http\Controllers\AppController@index');

Route::middleware('auth:api')->get('/builds', '\App\Http\Controllers\BuildController@index');

Route::middleware('auth:api')->get('/groups', '\App\Http\Controllers\GroupController@index');

Route::middleware('auth:api')->get('/usersubs', '\App\Http\Controllers\UsersubController@index');
