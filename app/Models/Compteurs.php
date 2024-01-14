<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compteurs extends Model
{
    use HasFactory;

    protected $table = "compteur";

    protected $fillable = [
        'compteurSaison',
    ];




}
