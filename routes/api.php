<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\VehiculeSearchController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/vehicules', [VehiculeController::class, 'index']);

// Nouveau endpoint pour recherche par immatriculation
Route::get('/vehicules/{immatriculation}', [VehiculeSearchController::class, 'show']);
