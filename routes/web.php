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




Auth::routes();
//Rutas Principales
Route::view('/', 'inicio');
Route::get('/home', 'TareaController@index')->name('home')->middleware('auth');
Route::view('/creartarea','creartarea')->name('creartarea')->middleware('auth');
Route::get('/editartarea{id}', 'TareaController@edit')->name('editartarea')->middleware('auth');
Route::put('/storetarea', 'TareaController@store')->name('storetarea');
Route::patch('/updatetarea{id}','TareaController@update')->name('updatetarea');
Route::delete('/deletetarea{id}', 'TareaController@destroy')->name('deletetarea');
