<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    /* Reste de l'ancien projet, a voir si c'est tjrs d'actu */
    protected $table = "tasks";
    protected $primary_key = "id";

    protected $fillable = [
        'taskName',
        'nom',
        'taskWhen',
        'quantite' ,
        'description'
    
    ];
}
