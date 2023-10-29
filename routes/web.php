<?php

use App\Http\Controllers\FamilleControler;
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
    return view('welcome');
});


Route::get('/test', function () {
    return view('myindex');
});


/* Route : créé une tache - create-task.blade.php */



Route::get('/taskindex', [myTaskController::class, 'index']);

Route::get('/create-task', [myTaskController::class, 'index']) ->name('monindex');
Route::post('/create-task', [myTaskController::class, 'store']);

Route::get('/create-family', [FamilleControler::class, 'index']);
Route::post('/create-family', [FamilleControler::class, 'store']);