<?php

// database/migrations/[timestamp]_create_switchboard_items_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwitchboardItemsTable extends Migration
{
    public function up()
    {
        Schema::create('switchboard_items', function (Blueprint $table) {
            $table->integer('SwitchboardID')->nullable();
            $table->smallInteger('ItemNumber')->nullable();
            $table->string('ItemText', 255)->nullable();
            $table->smallInteger('Command')->nullable();
            $table->string('Argument', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('switchboard_items');
    }
}
