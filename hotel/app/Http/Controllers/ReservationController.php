<?php

namespace App\Http\Controllers;

use App\ReservedRoom;
use App\Booker;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_type)
    {
      DB::beginTransaction();
      $reservation = new Reservation();
      $booker = new Booker();
      $booker->name = $request->name;
      $booker->surname = $request->surname;
      $booker->email = $request->email;
      $booker->save();
      $reservation->booker_id = $booker->id;
      $reservation->start_date = $request->start_date;
      $reservation->end_date = $request->end_date;
      $reservation->arrival_time = $request->arrival_time;
      $reservation->state = "Booked";
      $reservation->save();
      $reserved = new ReservedRoom();
      $reserved->id_type = $id_type;
      $reserved->reservation_id = $reservation->id;
      $reserved->rooms_count = 1;
      $reserved->save();
      DB::commit();
      return redirect('/success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
