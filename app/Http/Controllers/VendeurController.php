<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Vendeur;

class VendeurController extends Controller
{
    public function get($id){
      return Vendeur::find($id);
    }

    public function getAll(){
      return Vendeur::all();
    }

    public function create($idAfa,$idPersonnePhysique,$numInscription,$idPersonneMoral,$statutCompte,$libelleTypeVendeur){
      $vendeur = new Vendeur;
      $vendeur->IDAFA = $idAfa;
      $vendeur->NUMINSCRIPTION = $numInscription;
      $vendeur->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
      $vendeur->IDPERSONNEMORALE = $idPersonneMoral;
      $vendeur->STATUTCOMPTE = $statutCompte;
      $vendeur->LIBELLETYPEVENDEUR = $libelleTypeVendeur;
      $vendeur->save();
      return $vendeur;
    }

    public function update($id,$idAfa,$idPersonnePhysique,$numInscription,$idPersonneMoral,$statutCompte,
                           $libelleTypeVendeur){
        $vendeur = this.get($id);
        $vendeur->IDAFA = $idAfa;
        $vendeur->NUMINSCRIPTION = $numInscription;
        $vendeur->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
        $vendeur->IDPERSONNEMORALE = $idPersonneMoral;
        $vendeur->STATUTCOMPTE = $statutCompte;
        $vendeur->LIBELLETYPEVENDEUR = $libelleTypeVendeur;
        $vendeur->save();
        return $vendeur;
    }

    public function delete($id){
      $vendeur = this.get($id);
      $vendeur->delete();
    }

    public function changeStatutCompte($id){
        $vendeur = $this->get($id);
        $vendeur->STATUTCOMPTE = true;
        $vendeur->save();
        return $vendeur;
    }

    public function initialiseNumInscription($id,$numInscription){
        $vendeur = $this->get($id);
        $vendeur->NUMINSCRIPTION = $numInscription;
        $vendeur->save();
        return $vendeur;
    }

}
