<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComposantTable extends Migration
{
    public function up()
    {
        Schema::create('composant', function (Blueprint $table) {
            $table->string('CMP_CODE', 4)->nullable();
            $table->string('CMP_LIBELLE', 25)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('composant');
    }
}