<?php

// database/migrations/[timestamp]_create_type_individu_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeIndividuTable extends Migration
{
    public function up()
    {
        Schema::create('type_individu', function (Blueprint $table) {
            $table->string('TIN_CODE', 5)->nullable();
            $table->string('TIN_LIBELLE', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_individu');
    }
}
