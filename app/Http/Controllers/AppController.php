<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    
    public function generateEnv()
    {

        Clients::factory()->count(10)->create();
        Commerciaux::factory()->count(5)->create();

    }


}
