<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class myTaskController extends Controller
{

    public function index()
    {
        return view("create-task");
    }

    public function store(Request $request)
    {
//        dd($request);

        // Enrengistrement requête formulaire 
        // Prévoir controle

        $theTask = new Task;

        // J'ai en haut créé l'objet Task, et je dois donc récupéré tout les champs du formulaire et donc
        // - accorder avec les colonnes dans Task (ou les infos dans le Model)

        $theTask->taskName = $request->taskName ;
        $theTask->familleName = $request->familleName;
        $theTask->taskWhen = $request->periodicite;
        $theTask->taskDescription = $request->taskDescription ;
       

        //dd($theTask);
        // Pour stocker la date de fin :
        // - On peut utiliser Carbon pour convertir une string en date.    
        $theTask->save();
        // Redirection vers page d'accueil
        return redirect("/create-task")->with('message', 'La tache a bien été ajoutée');
    }


}
