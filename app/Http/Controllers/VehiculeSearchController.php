<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VehiculeSearchService;

class VehiculeSearchController extends Controller
{
    public function show($immatriculation)
    {
        // Appel du service pour rechercher le véhicule
        $service = new VehiculeSearchService();
        $vehicule = $service->findByImmatriculation($immatriculation);

        // Retourne la réponse JSON
        return response()->json($vehicule);
    }
}
