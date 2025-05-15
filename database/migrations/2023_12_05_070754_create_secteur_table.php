<?php

// database/migrations/[timestamp]_create_secteur_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecteurTable extends Migration
{
    public function up()
    {
        Schema::create('secteur', function (Blueprint $table) {
            $table->string('SEC_CODE', 1)->nullable();
            $table->string('SEC_LIBELLE', 15)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('secteur');
    }
}
