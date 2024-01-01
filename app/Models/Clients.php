<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $table = "clients";
    protected $primary_key = "id";

    protected $fillable = [
        'nomClient' ,
        'ageClient' ,
        'sexeClient' ,
        'paysClient' ,
        'villeClient' ,
        'commandeClient' ,
    ];
    public function commande()
    {
        return $this->hasMany(Commande::class, 'clientId');
    }
}
