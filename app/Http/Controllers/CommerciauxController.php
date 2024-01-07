<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commerciaux;

class CommerciauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generateCommerciaux()
    {
        Commerciaux::factory()->count(10)->create();
         
        // Redirige vers /maPage avec une notification de succès
        return redirect('/commerciaux')->with('status', '10 nouveaux commerciaux ont été créés avec succès.');
    }


    public function index()
    {
        $commerciaux = Commerciaux::all(); // Récupérer tous les clients

        // Passer les clients à la vue
        return view('/commerciaux', compact('commerciaux'));
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
        $commerciaux = Commerciaux::findOrFail($id);
        $commerciaux->delete();

        return redirect('/commerciaux')->with('status', 'Commercial supprimé avec succès (et Fabrice).');
    }

    public function destroyAll()
    {
    

        Commerciaux::query()->delete(); // Supprime tous les commerciaux
      

        return redirect('/commerciaux')->with('status', 'Tous les commerciaux ont été supprimés.');
    }
}
