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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/create', 'StudentController@create')->name('create');
Route::post('/create', 'StudentController@store')->name('store');
Route::get('/edit/{id}', 'StudentController@edit')->name('edit');
Route::post('/update/{id}', 'StudentController@update')->name('update');
Route::post('/delete_student/{id}', 'StudentController@delete')->name('delete_student');


Route::get('home', 'HomeController@index')->name('home');

Auth::routes();

