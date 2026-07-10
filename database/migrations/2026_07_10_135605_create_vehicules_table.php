<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('sIdimmatriculation')->unique();
            $table->string('nchassis');
            $table->string('seriemoteur');
            $table->string('sgenrevehicule');
            $table->string('energie');
            $table->string('sMarque');
            $table->string('sCarosserie');
            $table->string('typevehicule');
            $table->string('sCouleur');
            $table->string('stelephoneproprietaire')->nullable();
            $table->string('setat');
            $table->integer('npuissance');
            $table->integer('nPoidsavide');
            $table->integer('chargeutile');
            $table->integer('nbreplace');
            $table->integer('npoidstotalencharge');
            $table->string('dAte_mise_en_circulation');
            $table->string('immatriculationprecedente');
            $table->string('dateimmatriculationprecedente');
            $table->string('datedemiseencirculation');
            $table->string('datepremiermiseencirculation');
            $table->string('dateimmatriculation');
            $table->string('Essieu');
            $table->integer('nbre_essieur');
            $table->integer('poids_total_essieu');
            $table->string('sCIp_proprietaire')->nullable();
            $table->string('Rccm_proprietaire')->nullable();
            $table->string('sNom_proprietaire')->nullable();
            $table->string('sPreNom_proprietaire')->nullable();
            $table->string('dSdate_naissance_proprietaire')->nullable();
            $table->string('sDlieu_naissance_proprietaire')->nullable();
            $table->string('sCarre_proprietaire')->nullable();
            $table->string('sQuartie_village_proprietaire')->nullable();
            $table->string('sAdresse_proprietaire')->nullable();
            $table->string('sTelephone_proprietaire')->nullable();
            $table->string('sUtilisation');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};