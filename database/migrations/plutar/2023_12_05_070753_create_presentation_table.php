<?php
// database/migrations/[timestamp]_create_presentation_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentationTable extends Migration
{
    public function up()
    {
        Schema::create('presentation', function (Blueprint $table) {
            $table->string('PRE_CODE', 2)->nullable();
            $table->string('PRE_LIBELLE', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('presentation');
    }
}

