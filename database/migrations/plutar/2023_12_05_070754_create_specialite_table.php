<?php

// database/migrations/[timestamp]_create_specialite_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialiteTable extends Migration
{
    public function up()
    {
        Schema::create('specialite', function (Blueprint $table) {
            $table->string('SPE_CODE', 5)->nullable();
            $table->string('SPE_LIBELLE', 150)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('specialite');
    }
}
