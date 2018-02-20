<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Apl;

class AplController extends Controller
{
    public function get($id){
      return Apl::find($id);
    }

    public function getAll(){
      return Apl::all();
    }

    public function changeStatutCompte($id){
      $apl = $this->get($id);
      $apl->STATUTCOMPTE = true;
      $apl->save();
      return $apl;
    }

    public function signerContrat($id){
      $apl = $this->get($id);
      $apl->ETATCONTRAT = true;
      $apl->save();
      return $apl;
    }

    public function getByPersonneMoral($idPersonneMorale){
      return Apl::where("IDPERSONNEMORALE",$idPersonneMorale);
    }

    public function create($numInscription,$idPersonneMorale,$latitude,$longitude,$statutCompte,$dateCreation,$contratURL,$etatContrat){
      $apl = new Apl;
      $apl->NUMINSCRIPTION = $numInscription;
      $apl->IDPERSONNEMORALE = $idPersonneMorale;
      $apl->LATITUDE = $latitude;
      $apl->LONGITUDE = $longitude;
      $apl->STATUTCOMPTE = $statutCompte;
      $apl->DATECRETION = $dateCreation;
      $apl->CONTRATURL = $contratURL;
      $apl->ETATCONTRAT = $etatContrat;
      $apl->save();
      return $apl;
    }

    public function update($id,$numInscription,$idPersonneMorale,$latitude,$longitude,$statutCompte,$dateCreation,$contratURL,$etatContrat){
      $apl = this.get($id);
      $apl->NUMINSCRIPTION = $numInscription;
      $apl->IDPERSONNEMORALE = $idPersonneMorale;
      $apl->LATITUDE = $latitude;
      $apl->LONGITUDE = $longitude;
      $apl->STATUTCOMPTE = $statutCompte;
      $apl->DATECRETION = $dateCreation;
      $apl->CONTRATURL = $contratURL;
      $apl->ETATCONTRAT = $etatContrat;
      $apl->save();
      return $apl;
    }

    public function delete($id){
      $apl = this.get($id);
      $apl->delete();
    }

    public function changeNumInscription($id,$numInscription){
        $apl = this.get($id);
        $apl->NUMINSCRIPTION = $numInscription;
        $apl->save();
        return $apl;
    }

}
