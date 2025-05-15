<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInviterTable extends Migration
{
    public function up()
    {
        Schema::create('inviter', function (Blueprint $table) {
            $table->id();
            $table->integer('AC_NUM')->nullable();
            $table->smallInteger('PRA_NUM')->nullable();
            $table->boolean('SPECIALISTEON')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inviter');
    }
}