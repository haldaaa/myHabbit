<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $table = "commande";
    protected $primaryKey = "id" ;

    protected $fillable = [
        'commercialId',
        'clientId',
    ];


    public function commerciaux()
    {
        return $this->belongsTo(Commerciaux::class, 'commercialId');
    }
    

    public function clients()
    {
        return $this->belongsTo(Clients::class, 'clientId');
    }
    
    public function detailcommande()
    {
        return $this->hasMany(DetailCommande::class);
    }

    public function produits() 
    {
        return $this->belongsToMany(Produit::class);
    }

}
