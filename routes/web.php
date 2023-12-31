<?php

use App\Http\Controllers\FamilleControler;
use App\Http\Controllers\myDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myTaskController;
use App\Http\Controllers\mySheetController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommerciauxController;
use App\Http\Controllers\ProduitController;

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




            /* Produit */ 

Route::get('/produit,' , [ProduitController::class, 'index'])->name('produitindex');

Route::get('/produitgenerate', [ProduitController::class, 'generateProduit'])->name('generateProduitPage');



            /* Clients */ 

Route::get('/client', [ClientController::class, 'index'])->name('clientindex');

Route::delete('/client/{id}' , [ClientController::class, 'destroy'])->name('client.destroy');

Route::get('/generate', [ClientController::class, 'generateClients'])->name('generateClientPage');



            /* Commerciaux */

Route::get('/commerciaux', [CommerciauxController::class, 'index'])->name('commerciauxindex');

Route::delete('/commerciaux/{id}' , [CommerciauxController::class, 'destroy'])->name('commerciaux.destroy'); 

Route::get('/commerciauxgenerate' , [CommerciauxController::class, 'generateCommerciaux'])->name('generateCommerciauxPage');



/* Create task */ 

Route::get('/create-task', [myTaskController::class, 'index']) ->name('create-task');
Route::post('/create-task', [myTaskController::class, 'store']);
Route::delete('/create-task/{id}', [myTaskController::class, 'destroy'])->name('task.destroy');


Route::get('/create-family', [FamilleControler::class, 'index'])->name('create-family');
Route::post('/create-family', [FamilleControler::class, 'store']);