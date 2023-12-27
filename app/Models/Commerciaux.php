<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commerciaux extends Model
{
    use HasFactory;
    protected $table = "commerciaux";
    protected $primary_key = "id";

    protected $fillable = [
        'nomCommercial' ,
        'ageCommercial' ,
        'sexeCommercial' ,
        'paysCommercial' ,
        'villeCommercial' ,
        'nombreCommande' ,

    ];

    public function commandes()
    {
        return $this->hasMany(Commande::class, 'commercialId');
    }
}


