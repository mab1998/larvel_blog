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
use App\Http\Middleware\CheckAge;


Route::get('user', 'ShowProfile');


Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('file','FileController@create');
Route::post('file','FileController@store');

Route::get('upload','FileController@upload');

// Route::view('/','upload.main');

Route::get('/','ImageController@index');
Route::post('/','ImageController@store');





