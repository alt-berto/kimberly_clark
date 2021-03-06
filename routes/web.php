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

Route::get( '/', 'Controller@home' ); // // localhost:8000/
Route::get( '/page/{page}', 'Controller@page' ); // // localhost:8000/page/2
Route::get('/send/email', 'Controller@mail');
