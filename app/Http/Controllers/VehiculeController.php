<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Faker\Factory as FakerFactory;

class VehiculeController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $faker = FakerFactory::create();
        $faker->seed(1234); // données stables et reproductibles

        $genres = ["VOITURE PART.", "CAMION", "MOTO", "BUS", "REMORQUE"];
        $energies = ["ESSENCE", "DIESEL", "ELECTRIQUE", "HYBRIDE"];
        $marques = ["TOYOTA", "PEUGEOT", "RENAULT", "HYUNDAI", "KIA", "NISSAN", "FORD", "MERCEDES"];
        $carosseries = ["CONDUITE INTER.", "BREAK", "PICK-UP", "FOURGON"];
        $couleurs = ["CREME", "BLANC", "NOIR", "GRIS", "ROUGE", "BLEU"];
        $etats = ["USAGE", "NEUF"];
        $utilisations = ["ANCIENNES IMMATRICULATIONS", "NOUVELLES IMMATRICULATIONS"];

        $vehicules = [];

        for ($i = 0; $i < 5000; $i++) {
            $vehicules[] = [
                "sIdimmatriculation" => strtoupper($faker->bothify('??####??')),
                "nchassis" => strtoupper($faker->bothify('?????###??????????')),
                "seriemoteur" => "ILLISIBLE",
                "sgenrevehicule" => $faker->randomElement($genres),
                "energie" => $faker->randomElement($energies),
                "sMarque" => $faker->randomElement($marques),
                "sCarosserie" => $faker->randomElement($carosseries),
                "typevehicule" => strtoupper($faker->bothify('??##/???')),
                "sCouleur" => $faker->randomElement($couleurs),
                "stelephoneproprietaire" => "",
                "setat" => $faker->randomElement($etats),
                "npuissance" => $faker->numberBetween(4, 20),
                "nPoidsavide" => $faker->numberBetween(700, 2000),
                "chargeutile" => $faker->numberBetween(300, 1000),
                "nbreplace" => $faker->numberBetween(2, 9),
                "npoidstotalencharge" => $faker->numberBetween(1000, 3000),
                "dAte_mise_en_circulation" => "0000-00-00",
                "immatriculationprecedente" => strtoupper($faker->bothify('??####??')),
                "dateimmatriculationprecedente" => "0000-00-00",
                "datedemiseencirculation" => $faker->date('Y-m-d', '2023-01-01'),
                "datepremiermiseencirculation" => "0000-00-00",
                "dateimmatriculation" => $faker->date('Y-m-d', '2023-01-01'),
                "Essieu" => "Voiture Particulière",
                "nbre_essieur" => 2,
                "poids_total_essieu" => $faker->numberBetween(3000, 8000),
                "sCIp_proprietaire" => "",
                "Rccm_proprietaire" => "",
                "sNom_proprietaire" => "",
                "sPreNom_proprietaire" => "",
                "dSdate_naissance_proprietaire" => "0000-00-00",
                "sDlieu_naissance_proprietaire" => "",
                "sCarre_proprietaire" => "",
                "sQuartie_village_proprietaire" => "",
                "sAdresse_proprietaire" => "",
                "sTelephone_proprietaire" => "",
                "sUtilisation" => $faker->randomElement($utilisations),
            ];
        }

        // Filtrage par immatriculation si paramètre présent
        $immatriculation = $request->query('immatriculation');
        if ($immatriculation) {
            $vehicules = collect($vehicules)
                ->where('sIdimmatriculation', strtoupper($immatriculation))
                ->values()
                ->all();
        }

        return response()->json($vehicules);
    }
}
