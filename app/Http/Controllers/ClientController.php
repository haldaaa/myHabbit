<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Clients;

use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function generateClients()
     {
         Clients::factory()->count(10)->create();
         
         // Redirige vers /maPage avec une notification de succès
         return redirect('/client')->with('status', '10 nouveaux clients ont été créés avec succès.');
     }
     
     public function destroyAll()
    {
        DB::statement("SET foreign_key_checks=0");
        Clients::query()->deledte(); // Supprime tous les clients
        DB::statement("SET foreign_key_checks=1");

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
