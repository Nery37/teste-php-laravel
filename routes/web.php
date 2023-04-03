<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', 'App\Http\Controllers\ImportController@index')->name('import.index');
Route::get('/queue', 'App\Http\Controllers\QueueController@index')->name('queue.index');
Route::post('/import', 'App\Http\Controllers\ImportController@store')->name('import.store');
Route::post('/queue', 'App\Http\Controllers\QueueController@process')->name('queue.process');