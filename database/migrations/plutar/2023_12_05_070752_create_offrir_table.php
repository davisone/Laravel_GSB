<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffrirTable extends Migration
{
    public function up()
    {
        Schema::create('offrir', function (Blueprint $table) {
            $table->string('VIS_MATRICULE', 10)->nullable();
            $table->integer('RAP_NUM')->nullable();
            $table->string('MED_DEPOTLEGAL', 10)->nullable();
            $table->smallInteger('OFF_QTE')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offrir');
    }
}