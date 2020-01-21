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



Auth::routes();

Route::get('/', 'IMTController@index')->name('IMTview');
Route::post('/','IMTController@hitungIMT')->name('hitung.imt');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/suggestion', 'SuggestionController@index');

Route::get('/history', 'HistoryController@index')->name('history');
