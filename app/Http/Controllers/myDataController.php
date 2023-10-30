<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variable = rand(0, 20);
        $couleurs = array('bleu', 'orange', 'vert', 'rose');
        $couleurAleatoire = $couleurs[array_rand($couleurs)];
        
        dd($couleurAleatoire);


        return view("mydata", [ 
            'variable' => $variable,
        ]);
    }

    public function generate()
    {
        $couleurs = array('bleu', 'orange', 'vert', 'rose');
        $couleurAleatoire = $couleurs[array_rand($couleurs)];

        return view('mydata', [
            'mycouleur' => $couleurAleatoire,
        ]);

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
        //
    }
}
