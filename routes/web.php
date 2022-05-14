<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Equipment;
use App\Models\User;


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
})->name('login');

Route::post('/api/login', function(Request $request) {

    if(Auth::attempt([
        'email' => $request->email,
        'password'=> $request->password
    ])) {
        $request->session()->regenerate();
        return redirect()->intended('reserve-equipment');
    }
    return redirect()->back()->with('errors', 'Email & Password does not match.');

});

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/reserve-equipment', function () {
        return view('reserve_equipment');
    });

    Route::get('/review', function(Request $request) {

        // Fetch Equipment Data from DB via Eloquent ORM

      //  $data = [
        //    'key1' => 'value1',
          //  'key2' => 'value2',
           // 'key3' => 'value3',
          //  'key4' => 'value4',
       // ];

      //  $data = DB::select('select * from equipment');
    //   $data = User::find(1)->get()->toArray();
      $data = Equipment::where('user_id', Auth::user()->user_id)->get();

    //   dd($data);
      return view('review', ['data' => $data]);


    });

    Route::post('/reserve-equipment', function (Request $request) {

        foreach ($request->equipment as $key => $value) {
            $equipment = new Equipment;

            $equipment->quantity = $value['quantity'];
            $equipment->category = $value['category'];
            $equipment->item = $value['item'];
            $equipment->category = $value['category'];
            $equipment->date_from = $request->fromDate;
            $equipment->date_to = $request->toDate;
            $equipment->time_from = $request->fromTime;
            $equipment->time_to = $request->toTime;
            $equipment->prof_id = 1;
            $equipment->user_id = $request->user_id;
            $equipment->save();
        }
    
        return redirect()->back()->with('success', 'Successfully Reserve Equipment');
    
    });

    
    Route::get('/reserve-rooms', function() {
        return view('reserve_rooms');
    });

    Route::post('/reserve-rooms', function (Request $request) {

        $room = new Room;

        $room->room_type = $request->room;
        $room->date_from = $request->fromDate;
        $room->date_to = $request->toDate;
        $room->time_from = $request->fromTime;
        $room->time_to = $request->toTime;
        $room->user_id = $request->user_id;
        $room->status = 'Pending';
        $room->is_ready = 0;
        $room->save();
        
    
        return redirect()->back()->with('success', 'Successfully Reserve Room');
    
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

    Route::get('/students-request', function() {
        return view('students_request');
    });
});
