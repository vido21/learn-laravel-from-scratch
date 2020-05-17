<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetController@index')->name('home.index');
    Route::post('/tweets', 'TweetController@store');

    Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');

    Route::post('profile/{user:username}/follow', 'FollowController@store')->name('follow');
    Route::get('profile/{user:username}/edit', 'ProfileController@edit')->middleware('can:edit,user')->name('profile.edit');
    Route::patch('profile/{user:username}', 'ProfileController@update')->middleware('can:update,user')->name('profile.update');
});

Route::get('/explore', 'ExploreController')->name('explorer');
Route::get('/profile/{user:username}', 'ProfileController@show')->name('profile.show');
// Route::get('/home', 'HomeController@index')->name('home');
