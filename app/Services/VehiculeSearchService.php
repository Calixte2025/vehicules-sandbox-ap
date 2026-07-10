<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class VehiculeSearchService
{
    public function findByImmatriculation(string $immatriculation)
    {
        // Choix de l’URL selon l’environnement
        $apiUrl = env('APP_ENV') === 'production'
            ? env('API_URL_PROD')
            : env('API_URL_DEV');

        // Appel API avec l’immatriculation en query param
        $response = Http::get($apiUrl . '/vehicules', [
            'immatriculation' => $immatriculation
        ]);

        // Retourne le résultat JSON ou un message d’erreur
        if ($response->successful()) {
            return $response->json();
        }

        return ['error' => 'Véhicule non trouvé ou API inaccessible'];
    }
}
