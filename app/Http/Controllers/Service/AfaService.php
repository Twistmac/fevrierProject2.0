<?php

namespace App\Http\Controllers\Service;


use App\Http\Controllers\Controller;
use App\Http\Controllers\LocalisationController;
use App\Http\Controllers\AfaController;
use App\Entite\Localisation;
use App\Entite\Produit;

class AfaService  extends Controller {

    public function getAllAfaInRange($rayonPerception,Produit $produit,LocalisationController $localisationController,
                                     AfaController $afaController,GeolocalisationController $geolocalisationController){

        $idLocalisation = $produit->IDLOCALISATION;
        $localisation = $localisationController->get($idLocalisation);
        $listAfa = $afaController->getAll();
        $listAfaValable = array();
        $listLocalisationAfa = $this->getListLocalisationAfa($listAfa);
        $listVerdict = $geolocalisationController->checkIfPointIsInRadius($rayonPerception,$localisation->LATITUDE,
            $localisation->LONGITUDE,$listLocalisationAfa);
        for($i = 0, $j = 0; $i< $listAfa.length ; $i++) {
            if( $listVerdict[$i] == true){
                $listAfaValable[$j] = $listAfa[$i];
                $j++;
            }
        }
        return $listAfaValable;

    }

    public function getListLocalisationAfa($listAfa, LocalisationController $localisationController){
        $listLocalisation = array();
        for($i = 0 ; $i<$listAfa.length ; $i++){
            $listLocalisation[$i] = $localisationController->get($listAfa[$i]->IDLOCALISATION);
        }
        return $listLocalisation;
    }


}