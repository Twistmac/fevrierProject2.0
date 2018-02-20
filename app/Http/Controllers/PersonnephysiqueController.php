<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Personnephysique;

class PersonnephysiqueController extends Controller
{
    public function get($id){
      return Personnephysique::find($id);
    }

    public function getAll(){
      return Personnephysique::all();
    }

    public function create($idLocalisation,$nomProduit,$prenom,$avatar,$login,$motDePasse,$genre,$dateNaissance,$email,$telephone,
      $fax,$refbancaire,$comptePaypal,$observation,$typeNature){
      $personnePhysique = new Personnephysique;
      $personnePhysique->IDLOCALISATION = $idLocalisation;
      $personnePhysique->NOM = $nomProduit;
      $personnePhysique->PRENOM = $prenom;
      $personnePhysique->AVATAR = $avatar;
      $personnePhysique->LANGUAGE = "fr";
      $personnePhysique->LOGIN = $login;
      $personnePhysique->MOTDEPASSE = $motDePasse;
      $personnePhysique->GENRE = $genre;
      $personnePhysique->DATENAISSANCE = $dateNaissance;
      $personnePhysique->EMAIL = $email;
      $personnePhysique->TELEPHONE = $telephone;
      $personnePhysique->FAX = $fax;
      $personnePhysique->REFBANCAIRE = $refbancaire;
      $personnePhysique->COMPTEPAYPAL = $comptePaypal;
      $personnePhysique->OBSERVATION = $observation;
      $personnePhysique->TYPENATURE = $typeNature;
      $personnePhysique->save();
      return $personnePhysique;
    }

    public function update($id,$idLocalisation,$nomProduit,$prenom, $avatar,$login,$motDePasse,$genre,$dateNaissance,$email,$telephone,
      $fax,$refbancaire,$comptePaypal,$observation,$typeNature){
      $personnePhysique = this.get($id);
      $personnePhysique->IDLOCALISATION = $idLocalisation;
      $personnePhysique->NOM = $nomProduit;
      $personnePhysique->PRENOM = $prenom;
      $personnePhysique->AVATAR = $avatar;
      $personnePhysique->LANGUAGE = "fr";
      $personnePhysique->LOGIN = $login;
      $personnePhysique->MOTDEPASSE = $motDePasse;
      $personnePhysique->GENRE = $genre;
      $personnePhysique->DATENAISSANCE = $dateNaissance;
      $personnePhysique->EMAIL = $email;
      $personnePhysique->TELEPHONE = $telephone;
      $personnePhysique->FAX = $fax;
      $personnePhysique->REFBANCAIRE = $refbancaire;
      $personnePhysique->COMPTEPAYPAL = $comptePaypal;
      $personnePhysique->OBSERVATION = $observation;
      $personnePhysique->TYPENATURE = $typeNature;
      $personnePhysique->save();
      return $personnePhysique;
    }

    public function delete($id){
      $personnePhysique = this.get($id);
      $personnePhysique->delete();
    }

    public function updateLoginMotDePasse($id,$mp){
        $personnePhysique = $this->get($id);
        $personnePhysique->LOGIN = $personnePhysique->EMAIL;
        $personnePhysique->MOTDEPASSE = $mp;
        return $personnePhysique;
    }
}
