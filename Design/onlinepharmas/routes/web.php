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

Route::get('/contact', 'GoController@contactpage');
Route::get('/medicine', 'GoController@medicinepage');
Route::get('/features', 'GoController@medicinepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
