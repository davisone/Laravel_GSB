<?php

// database/migrations/[timestamp]_create_realiser_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealiserTable extends Migration
{
    public function up()
    {
        Schema::create('realiser', function (Blueprint $table) {
            $table->integer('AC_NUM')->nullable();
            $table->string('VIS_MATRICULE', 10)->nullable();
            $table->float('REA_MTTFRAIS')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('realiser');
    }
}
