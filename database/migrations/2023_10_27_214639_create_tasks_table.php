<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('taskName');
            $table->string('familleName');
            $table->string('taskWhen');
            $table->text('taskDescription');
            $table->timestamps(); // Colonnes de création et de mise à jour automatiques
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}