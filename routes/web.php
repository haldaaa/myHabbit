<?php

use App\Http\Controllers\FamilleControler;
use App\Http\Controllers\myDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myTaskController;
use App\Http\Controllers\mySheetController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommerciauxController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('myindex');
})->name('myindex');



/* Route : créé une tache - create-task.blade.php */

Route::get('/google', [mySheetController::class, 'index']);

Route::get('/data', [myDataController::class, 'index'])->name('mydata');

Route::post('/data', [myDataController::class, 'index'])->name('mydataindex');


            /* Commande */

Route::get('/commande', [CommandeController::class, 'index'])->name('commandeindex');

Route::delete('/commande/{id}', [CommandeController::class, 'destroy'])->name('commande.destroy');

Route::delete('/commandes/destroy-all', [CommandeController::class, 'destroyAll'])->name('commande.destroy.all');



Route::get('/generate-random-commande', [CommandeController::class, 'generateRandomCommande'])->name('generate.random.commande');

Route::get('/commandes/{id}/details', [CommandeController::class, 'show'])->name('commande.details');




            /* Produit */ 

Route::get('/produit' , [ProduitController::class, 'index'])->name('produitindex');

Route::delete('/produit/{id}' , [ProduitController::class, 'destroy'])->name('produit.destroy');

Route::get('/produitgenerate', [ProduitController::class, 'generateProduit'])->name('generateProduitPage');



            /* Clients */ 

Route::get('/client', [ClientController::class, 'index'])->name('clientindex');

Route::delete('/client/{id}' , [ClientController::class, 'destroy'])->name('client.destroy');

Route::delete('/clients/destroy-all', [ClientController::class, 'destroyAll'])->name('clients.destroy.all');

Route::get('/generate', [ClientController::class, 'generateClients'])->name('generateClientPage');



            /* Commerciaux */

Route::get('/commerciaux', [CommerciauxController::class, 'index'])->name('commerciauxindex');

Route::delete('/commerciaux/{id}' , [CommerciauxController::class, 'destroy'])->name('commerciaux.destroy'); 

Route::delete('/commerciauxx/destroy-all', [CommerciauxController::class, 'destroyAll'])->name('commerciaux.destroy.all');

Route::get('/commerciauxgenerate' , [CommerciauxController::class, 'generateCommerciaux'])->name('generateCommerciauxPage');



/* Create task */ 

Route::get('/create-task', [myTaskController::class, 'index']) ->name('create-task');
Route::post('/create-task', [myTaskController::class, 'store']);
Route::delete('/create-task/{id}', [myTaskController::class, 'destroy'])->name('task.destroy');


Route::get('/create-family', [FamilleControler::class, 'index'])->name('create-family');
Route::post('/create-family', [FamilleControler::class, 'store']);