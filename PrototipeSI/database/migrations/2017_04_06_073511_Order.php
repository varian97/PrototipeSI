<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    public function up()
    {
      Schema::create('Order', function (Blueprint $table) {
          $table->increments('ID_Order');

          $table->unsignedInteger('No_Meja_Ruang');
          $table->foreign('No_Meja_Ruang')->references('No_Meja_Ruang')->on('MejaRuang');
          $table->boolean('paymentstatus');

          $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('Order');
    }
}
