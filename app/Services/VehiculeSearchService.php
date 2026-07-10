<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class VehiculeSearchService
{
    public function findByImmatriculation(string $immatriculation)
    {
        // Choix de l’URL selon l’environnement
        $baseUrl = app()->environment('production')
            ? env('API_URL_PROD')
            : env('API_URL_DEV');

        // Requête HTTP avec baseUrl
        $response = Http::baseUrl($baseUrl)
            ->get("/vehicules", [
                'immatriculation' => $immatriculation
            ]);

        return $response->successful()
            ? $response->json()
            : ['error' => 'Véhicule non trouvé ou API inaccessible'];
    }
}
