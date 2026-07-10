<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeFactory extends Factory
{
    public function definition(): array
    {
        $genres = ["VOITURE PART.", "CAMION", "MOTO", "BUS", "REMORQUE"];
        $energies = ["ESSENCE", "DIESEL", "ELECTRIQUE", "HYBRIDE"];
        $marques = ["TOYOTA", "PEUGEOT", "RENAULT", "HYUNDAI", "KIA", "NISSAN", "FORD", "MERCEDES"];
        $carosseries = ["CONDUITE INTER.", "BREAK", "PICK-UP", "FOURGON"];
        $couleurs = ["CREME", "BLANC", "NOIR", "GRIS", "ROUGE", "BLEU"];
        $etats = ["USAGE", "NEUF"];
        $utilisations = ["ANCIENNES IMMATRICULATIONS", "NOUVELLES IMMATRICULATIONS"];

        return [
            "sIdimmatriculation" => strtoupper($this->faker->unique()->bothify('??####??')),
            "nchassis" => strtoupper($this->faker->bothify('?????###??????????')),
            "seriemoteur" => "ILLISIBLE",
            "sgenrevehicule" => $this->faker->randomElement($genres),
            "energie" => $this->faker->randomElement($energies),
            "sMarque" => $this->faker->randomElement($marques),
            "sCarosserie" => $this->faker->randomElement($carosseries),
            "typevehicule" => strtoupper($this->faker->bothify('??##/???')),
            "sCouleur" => $this->faker->randomElement($couleurs),
            "stelephoneproprietaire" => "",
            "setat" => $this->faker->randomElement($etats),
            "npuissance" => $this->faker->numberBetween(4, 20),
            "nPoidsavide" => $this->faker->numberBetween(700, 2000),
            "chargeutile" => $this->faker->numberBetween(300, 1000),
            "nbreplace" => $this->faker->numberBetween(2, 9),
            "npoidstotalencharge" => $this->faker->numberBetween(1000, 3000),
            "dAte_mise_en_circulation" => "0000-00-00",
            "immatriculationprecedente" => strtoupper($this->faker->bothify('??####??')),
            "dateimmatriculationprecedente" => "0000-00-00",
            "datedemiseencirculation" => $this->faker->date('Y-m-d', '2023-01-01'),
            "datepremiermiseencirculation" => "0000-00-00",
            "dateimmatriculation" => $this->faker->date('Y-m-d', '2023-01-01'),
            "Essieu" => "Voiture Particulière",
            "nbre_essieur" => 2,
            "poids_total_essieu" => $this->faker->numberBetween(3000, 8000),
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
            "sUtilisation" => $this->faker->randomElement($utilisations),
        ];
    }
}