<?php

namespace App\Services;

use App\Models\Vehicule;

class VehiculeSearchService
{
    public function findByImmatriculation(string $immatriculation)
    {
        $vehicule = Vehicule::where('sIdimmatriculation', strtoupper($immatriculation))->first();

        if ($vehicule) {
            return $vehicule;
        }

        return ['error' => 'Véhicule non trouvé'];
    }
}