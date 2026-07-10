<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $table = 'vehicules';

    protected $fillable = [
        'sIdimmatriculation',
        'nchassis',
        'seriemoteur',
        'sgenrevehicule',
        'energie',
        'sMarque',
        'sCarosserie',
        'typevehicule',
        'sCouleur',
        'stelephoneproprietaire',
        'setat',
        'npuissance',
        'nPoidsavide',
        'chargeutile',
        'nbreplace',
        'npoidstotalencharge',
        'dAte_mise_en_circulation',
        'immatriculationprecedente',
        'dateimmatriculationprecedente',
        'datedemiseencirculation',
        'datepremiermiseencirculation',
        'dateimmatriculation',
        'Essieu',
        'nbre_essieur',
        'poids_total_essieu',
        'sCIp_proprietaire',
        'Rccm_proprietaire',
        'sNom_proprietaire',
        'sPreNom_proprietaire',
        'dSdate_naissance_proprietaire',
        'sDlieu_naissance_proprietaire',
        'sCarre_proprietaire',
        'sQuartie_village_proprietaire',
        'sAdresse_proprietaire',
        'sTelephone_proprietaire',
        'sUtilisation',
    ];
}