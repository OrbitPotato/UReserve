<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', function(Request $request) {

    if(Auth::attempt(['username' => $request->username, 'password'=> $request->password])) {
        $request->session()->regenerate();

        return redirect()->intended('reserve-equipment');
    }
});

Route::get('/reserve-equipment', function (Request $request) {

    return response('get equipment data');
});

Route::put('/reserve-equipment', function (Request $request) {

    return response('put equipment data');
});

Route::post('/reserve-equipment', function (Request $request) {

    return response('post equipment data');
});

Route::delete('/reserve-equipment', function (Request $request) {

    return response('delete equipment data');
});

Route::get('/reserve-rooms', function (Request $request) {

    return response('get room data');
});

Route::put('/reserve-rooms', function (Request $request) {

    return response('put room data');
});

Route::post('/reserve-rooms', function (Request $request) {
    dd($request->equipment);

    return response($request);
});

Route::delete('/reserve-rooms', function (Request $request) {

    return response('delete room data');
});
