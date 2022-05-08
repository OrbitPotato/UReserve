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
    return view('login');
});

Route::get('/reserve-equipment', function () {
    return view('reserve_equipment');
});

Route::get('/reserve-rooms', function() {
    return view('reserve_rooms');
});

Route::get('/about-me', function() {
    return view('about');
});

Route::get('/guidelines', function() {
    return view('guidelines');
});

Route::get('/my-deficiencies', function() {
    return view('mydeficiencies');
});

Route::get('/my-history', function() {
    return view('myhistory');
});

Route::get('/add-equipment', function() {
    return view('addequi');
});
