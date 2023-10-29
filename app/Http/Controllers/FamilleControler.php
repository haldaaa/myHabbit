<?php

namespace App\Http\Controllers;

use App\Models\FamilleTask;
use Illuminate\Http\Request;

class FamilleControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $totalFamille = FamilleTask::count();
        //dd($totalFamille);
        return view("create-family");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $theFamille = new FamilleTask();

        $theFamille->familleName = $request->familleName;
        $theFamille->familleDescription = $request->familleDesc;

        $theFamille->save();

        return redirect("/create-family")->with('message', 'La tache a bien été ajoutée');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FamilleTask  $familleTask
     * @return \Illuminate\Http\Response
     */
    public function show(FamilleTask $familleTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FamilleTask  $familleTask
     * @return \Illuminate\Http\Response
     */
    public function edit(FamilleTask $familleTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FamilleTask  $familleTask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FamilleTask $familleTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FamilleTask  $familleTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(FamilleTask $familleTask)
    {
        //
    }
}
