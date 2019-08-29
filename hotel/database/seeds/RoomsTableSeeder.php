<?php

use App\Room;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $room = new Room();
      $room->type_id = \App\RoomType::where('');
      $room->numero = '10';
      $room->piano = '1';
      $room->save();
    }
}
