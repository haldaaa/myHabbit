<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Client;

class DashboardController extends Controller
{
    
    public function index()
    {
        
      // Commerciaux avec le plus de commandes : 
      $record = DB::table('commerciaux')
      ->select("nomCommercial", "nombreCommande")
      ->orderBy('nombreCommande', 'desc')
      ->pluck('nomCommercial', 'nombreCommande');

      $label = $record->keys();
      $data = $record->values();



 

      return view('/dashboard', compact('label' , 'data'));
    }
}
