<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Clients;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function generateClients()
     {
         try {
             $nombreClients = 10; // Nombre de clients à créer
             Clients::factory()->count($nombreClients)->create();
     
             Log::info('Clients créés avec succès', ['nombre' => $nombreClients]);
     
             // Redirection avec une notification de succès
             return redirect('/client')->with('status', $nombreClients . ' nouveaux clients ont été créés avec succès.');
         } catch (\Exception $e) {
             Log::error('Erreur lors de la création des clients', ['message' => $e->getMessage()]);
     
             // Redirection avec un message d'erreur
             return redirect('/client')->withErrors('Erreur lors de la création des clients.');
         }
     }
     
     public function destroyAll()
    {
    

        Clients::query()->delete(); // Supprime tous les clients
      

        return redirect('/client')->with('status', 'Tous les clients ont été supprimés.');
    }


     
    public function index()
    {
        $clients = Clients::all(); // Récupérer tous les clients

        // Passer les clients à la vue
        return view('/client', compact('clients'));
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
        //
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
        $client = Clients::findOrFail($id);
        $client->delete();

        return redirect('/client')->with('status', 'Client supprimé avec succès.');
    }
}
