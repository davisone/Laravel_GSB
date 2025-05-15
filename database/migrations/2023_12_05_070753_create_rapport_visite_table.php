<?php

// database/migrations/[timestamp]_create_rapport_visite_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportVisiteTable extends Migration
{
    public function up()
    {
        Schema::create('rapport_visite', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->smallInteger('PRA_NUM')->nullable();
            $table->dateTimeTz('RAP_DATE')->nullable();
            $table->string('RAP_BILAN', 255)->nullable();
            $table->string('RAP_MOTIF', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rapport_visite');
    }
}
