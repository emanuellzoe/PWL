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

//1
// Route::get('/', 'PageController@home');
// Route::get('/movie', 'PageController@movie');
// Route::get('/genre', 'PageController@genre');
// Route::get('/movie/addform', 'PageController@movieaddform');
// Route::post('/movie/save', 'PageController@moviesave');
// Route::get('/movie/editform/{id}', 'PageController@movieeditform');
// Route::put('/movie/update/{id}', 'PageController@movieupdate');
// Route::get('/movie/delete/{id}', 'PageController@moviedelete');
// Route::get('/users','PageController@users');
// Route::get('/users/addform', 'PageController@usersaddform');
// Route::post('/users/save', 'PageController@userssave');
// Route::get('/users/deleteform/{id}', 'PageController@usersdelete');

// Route::get('/','AuthController@login');
// Route::post('/ceklogin','AuthController@ceklogin');
// Route::get('/logout','AuthController@logout');
// Route::get('/home', 'PageController@home')->middleware('auth');
// Route::get('/', 'AuthController@login')->name('login');

Route::group(['middleware' => ['guest']], function (){
    Route::get('/', 'AuthController@login')->name('login');
    Route::post('/ceklogin','AuthController@ceklogin');
});

Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', 'PageController@home');
    Route::get('/movie', 'PageController@movie');
    Route::get('/genre', 'PageController@genre');
    Route::get('/users','PageController@users');
    Route::get('/movie/addform', 'PageController@movieaddform');
    Route::post('/movie/save', 'PageController@moviesave');
    Route::get('/movie/editform/{id}', 'PageController@movieeditform');
    Route::put('/movie/update/{id}', 'PageController@movieupdate');
    Route::get('/movie/delete/{id}', 'PageController@moviedelete');
    Route::get('/users/addform', 'PageController@usersaddform');
    Route::post('/users/save', 'PageController@userssave');
    Route::get('/users/deleteform/{id}', 'PageController@usersdelete');

    Route::get('/logout','AuthController@logout');
    Route::get('/setting', "PageController@setting");
    Route::put('/updatepass', "PageController@setting");
});

