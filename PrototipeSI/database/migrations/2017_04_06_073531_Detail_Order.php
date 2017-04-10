<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailOrder extends Migration
{
    public function up()
    {
      Schema::create('DetailOrder', function (Blueprint $table) {
          $table->increments('ID_Detail');

          $table->unsignedInteger('ID_Order');
          $table->foreign('ID_Order')->references('ID_Order')->on('Order');

          $table->unsignedInteger('ID_Makanan_Minuman');
          $table->foreign('ID_Makanan_Minuman')->references('id')->on('MakananMinuman');

          $table->unsignedInteger('Total_Harga');
          $table->unsignedInteger('Jumlah');

          $table->string('Status');

          $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('DetailOrder');
    }
}
