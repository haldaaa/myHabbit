<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailcommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailcommande', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->unsignedBigInteger('commande_id');
            $table->foreign('commande_id')->references('id')->on('commande');
    
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produits');
            
            $table->integer('quantite');
            $table->integer('prixProduit');
            $table->integer('sous_total');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailcommande');
    }
}
