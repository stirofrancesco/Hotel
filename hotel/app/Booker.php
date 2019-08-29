<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Reservation;

class Booker extends Model
{
    protected $fillable = ['name', 'surname', 'email'];

    public function makesbooking()
    {
      return $this->hasMany('App\Reservation');
    }
}
