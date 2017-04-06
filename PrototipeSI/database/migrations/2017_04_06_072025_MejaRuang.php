<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MejaRuang extends Migration
{
    public function up()
    {
      Schema::create('MejaRuang', function (Blueprint $table) {
          $table->unsignedInteger('No_Meja_Ruang');
          $table->primary('No_Meja_Ruang');
      });
    }

    public function down()
    {
        Schema::dropIfExists('MejaRuang');
    }
}
