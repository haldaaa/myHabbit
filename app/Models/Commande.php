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
}
