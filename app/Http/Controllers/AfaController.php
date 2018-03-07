<?php

namespace App\Http\Controllers;
use App\Entite\Afa;

class AfaController extends Controller
{
    public function get($id){
      return Afa::find($id);
    }

    public function create($numInscription,$idPersonneMoral,$idPersonnePhysique,$statutCompte){
      $afa = new Afa;
      $afa->NUMINSCRIPTION = $numInscription;
      $afa->IDPERSONNEMORALE = $idPersonneMoral;
      $afa->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
      $afa->STATUTCOMPTE = $statutCompte;
      $afa->save();
      return $afa;
    }

    public function update($id,$numInscription,$idPersonneMoral,$idPersonnePhysique,$statutCompte){
      $afa = this.get($id);
        $afa->NUMINSCRIPTION = $numInscription;
        $afa->IDPERSONNEMORALE = $idPersonneMoral;
        $afa->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
        $afa->STATUTCOMPTE = $statutCompte;
        $afa->save();
        return $afa;
    }

    public function getAll(){
      return Afa::all();
    }

    public function delete($id){
      $afa = $this->get($id);
      $afa->delete();
    }

    public function checkAccount($id){
        $afa = $this->get($id);
        $afa->STATUTCOMPTE = true;
        $afa->save();
        return $afa;
    }

    public function addNumInscription($id,$numInscription){
        $afa = $this->get($id);
        $afa->NUMINSCRIPTION = $numInscription;
        $afa->save();
        return $afa;
    }

}
