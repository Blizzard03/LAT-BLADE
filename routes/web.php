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
    return view('welcome');
});
    Route::get('/contoh1', function () {
    return view('contoh1');
    });
    Route::get('/contoh2', function () {
    return view('contoh2');
    });
    Route::get('/contoh3', function () {
    return view('contoh3');
    });
