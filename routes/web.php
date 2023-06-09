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

Route::get('/', function () {
    $db = config('db');
    
    return view('Home', compact("db"));
});

Route::get('/characters', function () {
    return view('characters');
});

Route::get('/comics', function () {
    return view('comics');
});

Route::get('/movies', function () {
    return view('movies');
});