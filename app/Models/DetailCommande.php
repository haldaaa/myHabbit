<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCommande extends Model
{
    use HasFactory;

    protected $table  = 'detailCommande';

    protected $fillable = [
        'commande_id',
        'produit_id',
        'quantite',
        'prixProduit' ,
        'sous_total' ,

    ];

    public function commande()
    {
        return $this->belongTo(Commande::class, 'commande_id');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }

    


}
