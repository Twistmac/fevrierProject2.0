<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Inscriptionannule;

class InscriptionannuleController extends Controller
{
    public function get($id){
      return App\Entite\Inscriptionannule::find($id);
    }

    public function getAll(){
      return App\Entite\Inscriptionannule::all();
    }

    public function create($idPersonneMorale,$idPersonnePhysique,$dateInscription,$typeInscription){
      $inscriptionAnnule = new Inscriptionannule;
      $inscriptionAnnule->IDPERSONNEMORALE = $idPersonneMorale;
      $inscriptionAnnule->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
      $inscriptionAnnule->DATEINSCRIPTION = $dateInscription;
      $inscriptionAnnule->TYPEINSCRIPTION = $typeInscription;
      $inscriptionAnnule->save();
    }

    public function update($id,$idPersonneMorale,$idPersonnePhysique,$dateInscription,$typeInscription){
      $inscriptionAnnule = this.get($id);
      $inscriptionAnnule->IDPERSONNEMORALE = $idPersonneMorale;
      $inscriptionAnnule->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
      $inscriptionAnnule->DATEINSCRIPTION = $dateInscription;
      $inscriptionAnnule->TYPEINSCRIPTION = $typeInscription;
      $inscriptionAnnule->save();
    }

    public function delete($id){
      $inscriptionAnnule = this.get($id);
      $inscriptionAnnule->delete();
    }

}
