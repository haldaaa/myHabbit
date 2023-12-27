<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    protected $table = "produits";
    protected $primaryKey = "id"; // Correction ici

    protected $fillable = [
        'nomProduit',
        'provenanceProduit',
        'totalVendu',
    ];

    public function detailCommandes()
    {
        return $this->hasMany(DetailCommande::class, 'produit_id');
    }
}
