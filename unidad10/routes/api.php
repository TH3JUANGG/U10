<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\ContactoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contacto',[ContactoController::class,'read']);
Route::post('/contacto',[ContactoController::class,'post']);
Route::patch('/contacto',[ContactoController::class,'patch']);
Route::delete('/contacto',[ContactoController::class,'delete']);
