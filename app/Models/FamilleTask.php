<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilleTask extends Model
{
    use HasFactory;

    protected $table = "famille";
    protected $primary_key = "id";

    protected $fillable = [
        'familleName' ,
        'description' ,
    ];
}
