<?php
// database/migrations/[timestamp]_create_region_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionTable extends Migration
{
    public function up()
    {
        Schema::create('region', function (Blueprint $table) {
            $table->string('REG_CODE', 2)->nullable();
            $table->string('SEC_CODE', 1)->nullable();
            $table->string('REG_NOM', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('region');
    }
}
