<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilleTable extends Migration
{
    public function up()
    {
        Schema::create('famille', function (Blueprint $table) {
            $table->id();
            $table->string('FAM_LIBELLE', 80)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('famille');
    }
}