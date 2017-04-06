<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakananMinuman extends Migration
{
    public function up()
    {
      Schema::create('MakananMinuman', function (Blueprint $table) {
          $table->increments('ID_Makanan_Minuman');
          $table->unsignedInteger('Harga');
          $table->string('Jenis');
          $table->string('Deskripsi');
          $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('MakananMinuman');
    }
}
