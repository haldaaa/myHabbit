<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Commande;
use Illuminate\Support\Facades\Log;

use App\Models\Compteurs;

class TourController extends Controller
{
    //



    public function startTour()
    {
        try{
            
            $saison = Compteurs::firstOrNew(['id' => 1]); // Assurez-vous que l'identifiant est correct
            Log::channel('myapp_log')->info('*******************************************');
            Log::channel('myapp_log')->info('Initialisation du tour numero :' . $saison->compteurSaison);
            $saison->compteurSaison++;

            // Generation de commande 
            Log::channel('myapp_log')->info('Lancement generateRandomCommande.');

            $commandeController = new CommandeController();
            $commandeController->generateRandomCommande();



            
            $saison->save();
        } catch(\Exception $e)
        {
            Log::channel('myapp_log')->error('Erreur lors de la génération des commandes: ' . $e->getMessage());
            
        }
    }
}
