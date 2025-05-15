<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteragirTable extends Migration
{
    public function up()
    {
        Schema::create('interagir', function (Blueprint $table) {
            $table->string('MED_PERTURBATEUR', 10)->nullable();
            $table->string('MED_MED_PERTURBE', 10)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('interagir');
    }
}