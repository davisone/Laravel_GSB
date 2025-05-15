<?php

// database/migrations/[timestamp]_create_travailler_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravaillerTable extends Migration
{
    public function up()
    {
        Schema::create('travailler', function (Blueprint $table) {
            $table->string('VIS_MATRICULE', 10)->nullable();
            $table->dateTime('JJMMAA')->nullable();
            $table->string('REG_CODE', 2)->nullable();
            $table->string('TRA_ROLE', 11)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('travailler');
    }
}

