<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Infocompte;

class InfocompteController extends Controller
{
    public function get($id){
      return Infocompte::find($id);
    }

    public function getAll(){
      return Infocompte::all();
    }

    public function getInfocompteByLibelle($libelle){
      return Infocompte::where("LIBELLE",$libelle)->first();
    }

    public function create($libelle,$etatInscription,$droitInscription,$cpcPourcentage,$ccvMinPourcentage,
          $ccvMaxPourcentage,$ccvSeuil){
      $infoCompte = new InfoCompte;
      $infoCompte->LIBELLE = $libelle;
      $infoCompte->ETATINSCRIPTION = $etatInscription;
      $infoCompte->DROITINSCRIPTION = $droitInscription;
      $infoCompte->CPCPOURCENTAGE = $cpcPourcentage;
      $infoCompte->CCVMINPOURCENTAGE = $ccvMinPourcentage;
      $infoCompte->CCVMAJPOURCENTAGE = $ccvMaxPourcentage;
      $infoCompte->CCVSEUIL = $ccvSeuil;
      $infoCompte->save();
    }

    public function update($id,$libelle,$etatInscription,$droitInscription,$cpcPourcentage,$ccvMinPourcentage,
      $ccvMaxPourcentage,$ccvSeuil){
        $infoCompte = this.get($id);
        $infoCompte->LIBELLE = $libelle;
        $infoCompte->ETATINSCRIPTION = $etatInscription;
        $infoCompte->DROITINSCRIPTION = $droitInscription;
        $infoCompte->CPCPOURCENTAGE = $cpcPourcentage;
        $infoCompte->CCVMINPOURCENTAGE = $ccvMinPourcentage;
        $infoCompte->CCVMAJPOURCENTAGE = $ccvMaxPourcentage;
        $infoCompte->CCVSEUIL = $ccvSeuil;
        $infoCompte->save();
    }

    public function delete($id){
        $infoCompte = this.get($id);
        $infoCompte->delete();
    }

    public function getStateSubscription($libelle){
        $infoCompte = $this->getInfocompteByLibelle($libelle);
        if(isset($infoCompte)){
            return $infoCompte->ETATINSCRIPTION;
        }
        return false;
    }

}
