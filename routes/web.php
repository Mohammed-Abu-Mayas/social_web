<?php

use App\Mail\NewUserWelcomeMail;
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

//Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::get('/registeration',function (){
    return view('auth.register1');
});
Route::get('/test',function (){
    return view('posts.test');
});

Route::get('/email',function (){
    return new NewUserWelcomeMail();
});
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
Route::get('/', 'PostController@index');
Route::get('/p/create', 'PostController@create');
Route::post('/p', 'PostController@store');
Route::get('/p/{post}', 'PostController@show');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');
Route::post('follow/{user}','FollowsController@store');
Route::post('/search','PostController@search');
