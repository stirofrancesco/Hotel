<?php

use App\RoomType;
use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $roomtype = new RoomType();
      $roomtype->description = 'Suite';
      $roomtype->standard_price = '200';
      $roomtype->save();
    }
}
