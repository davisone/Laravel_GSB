<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosageTable extends Migration
{
    public function up()
    {
        Schema::create('dosage', function (Blueprint $table) {
            $table->string('DOS_CODE', 10)->nullable();
            $table->string('DOS_QUANTITE', 10)->nullable();
            $table->string('DOS_UNITE', 10)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosage');
    }
}