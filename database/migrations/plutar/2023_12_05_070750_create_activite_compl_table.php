<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiviteComplTable extends Migration
{
    public function up()
    {
        Schema::create('activite_compl', function (Blueprint $table) {
            $table->id('AC_NUM');
            $table->dateTime('AC_DATE')->nullable();
            $table->string('AC_LIEU', 25)->nullable();
            $table->string('AC_THEME', 10)->nullable();
            $table->string('AC_MOTIF', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activite_compl');
    }
}
