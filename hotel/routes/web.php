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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::post('/booker','BookerController@store');
Route::post('/reservation/{id_type}','ReservationController@store')->name('reservation');

Route::get('/', function() {
    return view('index');
})->name('index');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/rooms', function(Request $request) {
//    dd($request->all());ù
//    $data = [
//        $request->all()['checkin'],
//        $request->all()['checkout'],
//    ];
//
//    $roomTypes = DB::select('
//        SELECT id
//        FROM room_types
//        WHERE id NOT IN (
//            SELECT CP2.id_type
//            FROM reserved_rooms CP2 inner join reservations P
//                ON CP2.reservation_id = P.id
//            WHERE P.start_date <= ? AND P.end_date >= ?
//            GROUP BY CP2.id_type
//            HAVING SUM(CP2.rooms_count) = (
//                SELECT Count(*)
//                FROM rooms C
//                GROUP BY type_id
//                HAVING C.type_id = CP2.id_type
//            )
//        )
//       ',
//        $data
//    );

//    $rooms = [];
//    foreach ($roomTypes as $roomType) {
//        $rooms []= DB::select('
//            SELECT CP.id_type, Available.Free - SUM(CP.rooms_count)
//            FROM reserved_rooms CP
//                INNER JOIN reservations P ON P.id = CP.reservation_id
//                RIGHT JOIN (SELECT C.type_id, Count(*) Free FROM rooms C GROUP BY C.type_id) Available
//                  ON CP.id_type = Available.type_id
//            WHERE P.start_date <= ? AND P.end_date >= ?
//            GROUP BY CP.id_type, Available.Free
//        ',
//        $data);
//
//    }

//    $roomTypes = \App\RoomType::find($roomTypeIds);

    $rooms = DB::select('
        SELECT type_id, standard_price, CASE WHEN (
            SELECT count(reservations.id)
            FROM (reserved_rooms
                INNER JOIN reservations
                    ON reservations.id = reserved_rooms.reservation_id)
            WHERE id_type = type_id AND start_date <= ? AND end_date >= ?
            GROUP BY id_type
        ) IS NULL THEN count(*) ELSE count(*) - (
            SELECT count(reservations.id)
            FROM (reserved_rooms
                INNER JOIN reservations
                    ON reservations.id = reserved_rooms.reservation_id)
            WHERE id_type = type_id AND start_date <= ? AND end_date >= ?
            GROUP BY id_type
        ) END as free
        FROM rooms
        INNER JOIN room_types ON room_types.id = rooms.type_id
        GROUP BY type_id, standard_price
    ',
    [
        $request->all()['checkin'],
        $request->all()['checkout'],
        $request->all()['checkin'],
        $request->all()['checkout'],
    ]);

    return view('rooms', ['rooms' => $rooms]);
})->name('rooms');

Route::get('/book/{type_id}', function(Request $request, $type_id) {
    return view('booking', [
      'type_id' => $type_id,
      'checkin' => $request->all()['checkin'],
      'checkout' => $request->all()['checkout'],
    ]);
})->name('book');
