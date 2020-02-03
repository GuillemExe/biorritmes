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

// INDEX PAGE
Route::get('/', 'CalculBio@index');

// GENERATE NEW USER 
Route::get('/add', 'CalculBio@create');

/* Venia de base esta route */

/* Route::get('/', function () {
    return view('welcome');
}); */
