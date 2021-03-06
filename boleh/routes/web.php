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

Route::get('/','MainViewController@landing');

//untuk tampilan awal
Route::get('/main','MainViewController@main');
Route::get('/oleh-oleh', 'MainViewController@getOleh');
Route::get('/makanan', 'MainViewController@getMakanan');
//user
Route::resource('/users','UserController'); //restful controller


Route::get('/item/{id}','MainViewController@item');
Route::get('/login','MainViewController@login');
Route::get('/dashboard','MainViewController@dashboard');

//crud
Route::put('/{id}/update','CrudController@update');


//
Auth::routes();
Route::get('/admin','MainViewController@admin');
Route::get('/home', 'HomeController@index')->name('home');
