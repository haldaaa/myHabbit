<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommerciauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Commerciaux', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nomCommercial');
            $table->text('ageCommercial');
            $table->text('sexeCommercial');
            $table->text('paysCommercial');
            $table->text('villeCommercial');
            $table->integer('nombreCommande');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Commerciaux', function (Blueprint $table) {
            //
        });
    }
}
