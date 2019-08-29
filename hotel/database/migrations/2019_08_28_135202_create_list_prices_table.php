<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_prices', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('type_id')->references('id')->on('room_types');
          $table->bigInteger('date_id')->references('id')->on('date');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_prices');
    }
}
