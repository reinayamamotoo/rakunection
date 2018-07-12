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
    $result = \App\User::search("");
    return view('welcome', [
            'result' => $result,
            ]);
});

// user registration
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// Login authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


Route::group(['middleware' => ['auth']], function () {
Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
Route::resource('user_career', 'UserCareerController');

    
//フォロー機能
Route::group(['prefix' => 'users/{id}'], function () {
    Route::post('favorite', 'UserFavoriteController@store')->name('user.favorite');
    Route::delete('unfavorite', 'UserFavoriteController@destroy')->name('user.unfavorite');
    Route::get('favorites','UsersController@favorites')->name('users.favorite');
        });
});

// 検索機能
Route::get('search', 'UserCareerController@search')->name('search.get');
