<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myTaskController extends Controller
{

    public function index()
    {
        $nombretask = Task::count();
        $allTask = DB::select('select * from tasks');
        
       // dd($allTask);
        return view("create-task", [
            'nombre_task' => $nombretask,
            'tasks' => $allTask,
        ]);


    }

    public function store(Request $request)
    {


        // Enrengistrement requête formulaire 
        // Prévoir controle

        $theTask = new Task;

        // J'ai en haut créé l'objet Task, et je dois donc récupéré tout les champs du formulaire et donc
        // - accorder avec les colonnes dans Task (ou les infos dans le Model)

        $theTask->taskName = $request->taskName ;
        $theTask->familleName = $request->familleName;
        $theTask->taskWhen = $request->periodicite;
        $theTask->taskDescription = $request->taskDescription ;
        $theTask->save();

        // Redirection vers page d'accueil
        return redirect("/create-task")->with('message', 'La tache a bien été ajoutée');
    }



    public function destroy($id)
    {
     
        $tacheSupprimer = Task::findOrFail($id);
        $tacheSupprimer -> delete();
        return redirect('/create-task')->with('message','Tache supprimée !');
    }

}
