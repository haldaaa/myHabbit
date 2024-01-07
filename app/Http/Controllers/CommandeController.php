<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Commerciaux;
use App\Models\Produits;
use App\Models\Clients;
use App\Models\Commande;
use App\Models\DetailCommande;

use Illuminate\Support\Facades\Log;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




     public function destroyAll()
     {
        try {
            // Supprime toutes les commandes
            Commande::query()->delete();
    
            // Log réussite
            Log::channel('myapp_log')->info('Toutes les commandes ont été supprimées.');
    
            return redirect('/commande')->with('status', 'Toutes les commandes ont été supprimées.');
        } catch (\Exception $e) {
            // Log en cas d'erreur
            Log::channel('myapp_log')->error('Erreur lors de la suppression des commandes: ' . $e->getMessage());
    
            return redirect('/commande')->withErrors('Erreur lors de la suppression des commandes.');
        }
     }
     


     public function generateRandomCommande()
    {        
      


        $randomCommandeCount = rand(1, 4);

        Log::channel('myapp_log')->info('Nombre de commandes générées : ' . $randomCommandeCount);

        for ($i = 1; $i <= $randomCommandeCount; $i++)
        {
            // Sélection aléatoire d'un commercial et d'un client
            $randomCommercial = Commerciaux::inRandomOrder()->first();
            $randomClient = Clients::inRandomOrder()->first();

            // Création d'une nouvelle commande
            $commande = new Commande();
            $commande->commercialId = $randomCommercial->id;
            $commande->clientId = $randomClient->id;
            $commande->save();

            // Sélection aléatoire des produits
            $randomProductCount = rand(1, 4);
            $randomProducts = Produits::inRandomOrder()->limit($randomProductCount)->get();

            foreach ($randomProducts as $produit) 
            
            {
                $quantite = rand(1, 99);

                // Création du détail de la commande
                $detailCommande = new Detailcommande();
                $detailCommande->commande_id = $commande->id;
                $detailCommande->produit_id = $produit->id;
                $detailCommande->quantite = $quantite;
                $detailCommande->prixProduit = $produit->prix;
                $detailCommande->sous_total = $produit->prix * $quantite;
                $detailCommande->save();

                // Mise à jour du nombre total vendu pour le produit
                $produit->totalVendu += $quantite;
                $produit->save();

                Log::channel('myapp_log')->info('Commande numero : ' . $detailCommande->id  . '.' .  ' Produit ajouté : ' . $produit->nomProduit . ', Quantité : ' . $quantite);

            }


            // Mise à jour des informations du commercial
            $randomCommercial->nombreCommande++;
            $randomCommercial->save();

            // Mise à jour des informations du client
            $randomClient->commandeClient++;
            $randomClient->save();
    }

        // Récupérer toutes les commandes pour les afficher
        $liste = Commande::all();
        return redirect()->back()->with('status', $randomCommandeCount . ' commandes générée avec succès.');

        //return view('commande.commande-liste', ['liste' => $liste]);
    
    }   

    
    public function index()
    {
        $commandes = Commande::with(['commerciaux', 'clients'])->get();
        //dd($commandes);
        return view('/commande', compact('commandes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commande = Commande::with(['commerciaux', 'clients', 'detailcommande.produits']) // Assurez-vous que ces relations sont correctes
        ->findOrFail($id);
        //dd($commande);
        return view('commandedetail', compact('commande'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commerciaux = Commande::findOrFail($id);
        $commerciaux->delete();

        return redirect('/commande')->with('status', 'Commande  supprimé avec succès (et Fabrice).');
    }

   
}
