<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentTable extends Migration
{
    public function up()
    {
        Schema::create('medicament', function (Blueprint $table) {
            $table->string('MED_DEPOTLEGAL', 10)->primary(); // Set as primary key
            $table->string('MED_NOMCOMMERCIAL', 25)->nullable();
            $table->foreignId('id_famille')->constrained('famille'); // Foreign key to famille table
            $table->string('MED_COMPOSITION', 255)->nullable();
            $table->string('MED_EFFETS', 255)->nullable();
            $table->string('MED_CONTREINDIC', 255)->nullable();
            $table->float('MED_PRIXECHANTILLON')->nullable();
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('medicament');
    }
}
