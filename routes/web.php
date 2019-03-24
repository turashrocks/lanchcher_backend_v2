<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/users/api', function(){
        return view('users.token');
    })->name('users.api');

    // Route::get('/home', 'HomeController@index');

    Route::resource('apps', 'AppController');

    Route::resource('builds', 'BuildController');

    Route::resource('groups', 'GroupController');

    Route::resource('userdetails', 'UserdetailController');

    Route::resource('userseats', 'UserseatController');

    Route::resource('usersubs', 'UsersubController');

    Route::resource('users', 'UserController');

    Route::group(['middleware'=>'checkusers'], function(){
        Route::get('/users', 'UserController@index')->name('users.index');
    });

    // Route::group(['middleware'=>'checkusers'], function(){
    //      Route::get('/register', '\App\Http\Controllers\Api\AuthController@register');
    //  });

    //  Route::group(['middleware'=>'checkusers'], function(){
    //       Route::get('/login', '\App\Http\Controllers\Api\AuthController@login');
    //   });

     Route::group(['middleware'=>'checkusers'], function(){
         Route::get('/roles', 'RoleController@index')->name('roles.index');
     });

    Route::resource('roles', 'RoleController');

    ////custom 

    Route::post('addbuilds','BuildController@addBuilds');

});