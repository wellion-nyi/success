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

Route::get('/report', 'FirstController@report')->name('report');

Route::get('/attendance', 'FirstController@attendance')->name('attendance');

Route::get('/teacher', 'FirstController@teacher')->name('teacher');

Route:: get('/student', 'FirstController@student')->name('student');

Route::get('/message', 'FirstController@message')->name('message');
