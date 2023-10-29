<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilleTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('famille', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('familleName');
            $table->text('familleDescription');
            $table->timestamps(); // Colonnes de création et de mise à jour automatiques
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
