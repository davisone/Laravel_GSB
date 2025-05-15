<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulerTable extends Migration
{
    public function up()
    {
        Schema::create('formuler', function (Blueprint $table) {
            $table->string('MED_DEPOTLEGAL', 10)->nullable();
            $table->string('PRE_CODE', 2)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formuler');
    }
}