<?php

use App\Http\Controllers\FamilleControler;
use App\Http\Controllers\myDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myTaskController;

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



Route::get('/data', [myDataController::class, 'index'])->name('mydata');

Route::post('/data', [myDataController::class, 'index'])->name('mydataindex');


/* Create task */ 

Route::get('/create-task', [myTaskController::class, 'index']) ->name('create-task');
Route::post('/create-task', [myTaskController::class, 'store']);
Route::delete('/create-task/{id}', [myTaskController::class, 'destroy'])->name('task.destroy');


Route::get('/create-family', [FamilleControler::class, 'index'])->name('create-family');
Route::post('/create-family', [FamilleControler::class, 'store']);