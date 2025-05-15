<?php

// database/migrations/[timestamp]_create_type_praticien_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypePraticienTable extends Migration
{
    public function up()
    {
        Schema::create('type_praticien', function (Blueprint $table) {
            $table->string('TYP_CODE', 3)->nullable();
            $table->string('TYP_LIBELLE', 25)->nullable();
            $table->string('TYP_LIEU', 35)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_praticien');
    }
}
