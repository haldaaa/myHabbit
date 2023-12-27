<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $table = "commandes";
    protected $primary_key = "id" ;

    protected $fillable = [
        'commercialId',
        'clientId',
    ];


    public function commerciaux()
    {
        return $this->belongTo(Commerciaux::Class);
    }

    public function clients()
    {
        return $this->belongTo(Clients::class);
    }

    public function detailCommande()
    {
        return $this->hasMany(DetailCommande::class);
    }

}
