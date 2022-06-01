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

// Rotte dinamiche (a una singola pagina seguono diverse pagine con più azioni)
Route::resource('comics', 'ComicsController' );

// Rotte statiche (non si ha bisogno di creare un Model)
Route::get( '/', 'PageController@home' )->name('home');
Route::get( '/aboutUs', 'PageController@aboutUs' )->name('aboutUs');
Route::get( '/contacts', 'PageController@contacts' )->name('contacts');