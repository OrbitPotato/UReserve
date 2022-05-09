<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Equipment;

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


// // Route::post('/login', function(Request $request) {

// //     if(Auth::attempt([
// //         'email' => $request->email,
// //         'password'=> $request->password
// //     ])) {
// //         $request->session()->regenerate();
// //         return redirect()->intended('reserve-equipment');
// //     }
// //     return response('Email & Password does not match.');
// // });


// Route::get('/reserve-equipment', function (Request $request) {

//     return response('get equipment data');
// });

// Route::put('/reserve-equipment', function (Request $request) {

//     return response('put equipment data');
// });

// Route::post('/reserve-equipment', function (Request $request) {

//     $equipment = new Equipment;


//     foreach ($request->equipment as $key => $value) {
//         $equipment->quantity = $value['quantity'];
//         $equipment->category = $value['category'];
//         $equipment->item = $value['item'];
//         $equipment->category = $value['category'];
//         $equipment->date_from = $request->dateFrom;
//         $equipment->date_to = $request->dateTo;
//         $equipment->prof_id = 1;
//         $equipment->user_id = $request->user_id;
//         $equipment->save();
//     }


//     return redirect()->back()->with('success', 'Successfully Reserve');

// });

// Route::delete('/reserve-equipment', function (Request $request) {

//     return response('delete equipment data');
// });

// Route::get('/reserve-rooms', function (Request $request) {

//     return response('get room data');
// });

// Route::put('/reserve-rooms', function (Request $request) {

//     return response('put room data');
// });

// Route::post('/reserve-rooms', function (Request $request) {
//     dd($request->equipment);

//     return response($request);
// });

// Route::delete('/reserve-rooms', function (Request $request) {

//     return response('delete room data');
// });
