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

Route::group(['middleware' => ['is_online']], function() {
    Route::get('/', function () {
    	if(Auth::user()){
    		return view('home');
    	}

        return view('welcome');
    });

    Auth::routes();
    Route::get('register', 'AuthController@register');
    Route::get('logout', 'AuthController@userLogout');
    Route::post('user-login', 'AuthController@userLogin');
    Route::post('user-register', 'AuthController@userRegister');
    Route::get('reset', 'AuthController@passwordReset');
    Route::post('reset', 'AuthController@sendPasswordResetLink');
    Route::get('reset/{token}', 'AuthController@passwordResetForm');
    Route::post('reset-password', 'AuthController@reset');

    Route::get('/{page_user}', 'GeneralController@userView')->name('user');
});
