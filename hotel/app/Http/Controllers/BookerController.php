<?php

namespace App\Http\Controllers;

use App\Booker;
use App\Reservation;
use Illuminate\Http\Request;

class BookerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Booker::get();
        // return view('booker.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('booker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $booker = new Booker();
        $reservation = new Reservation();
        $booker->name = $request->name;
        $booker->surname = $request->surname;
        $booker->email = $request->email;

    //    $reservation->booker_id = booker->id;
        $reservation->start_date = request->start_date;
        $reservation->end_date = request->end_date;
        $reservation->arrival_time = request->arrival_time;
        $reservation->state = request->state;

        $booker->save();
        $reservation->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booker  $booker
     * @return \Illuminate\Http\Response
     */
    public function show(Booker $booker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booker  $booker
     * @return \Illuminate\Http\Response
     */
    public function edit(Booker $booker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booker  $booker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booker $booker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booker  $booker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booker $booker)
    {
        //
    }
}
