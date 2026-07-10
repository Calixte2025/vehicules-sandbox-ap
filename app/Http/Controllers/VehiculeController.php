<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $immatriculation = $request->query('immatriculation');

        if ($immatriculation) {
            $vehicules = Vehicule::where('sIdimmatriculation', strtoupper($immatriculation))->get();
        } else {
            $vehicules = Vehicule::all();
        }

        return response()->json($vehicules);
    }
}