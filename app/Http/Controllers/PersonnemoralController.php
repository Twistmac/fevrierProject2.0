<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Personnemoral;

class PersonnemoralController extends Controller
{
    public function get($id){
      return Personnemoral::find($id);
    }

    public function getAll(){
      return Personnemoral::all();
    }

    public function update($id, $idLocalisation, $nom, $etatCompte, $urlSiteWeb, $logo, $presentation, $telephone, $email,
        $etatPaiementCompte, $observation, $operabilite, $language, $crm_provider_name, $crm_provider_email,
        $comptePaypal, $refBancaire, $login, $motDePasse,$typenature){

          $personneMoral = this.get($id);
          $personneMoral->IDLOCALISATION = $idLocalisation;
          $personneMoral->NOM  = $nom;
          $personneMoral->ETATCOMPTE = $etatCompte;
          $personneMoral->URLSITEWEB = $urlSiteWeb;
          $personneMoral->LOGO = $logo;
          $personneMoral->PRESENTATION = $presentation;
          $personneMoral->TELEPHONE = $telephone;
          $personneMoral->EMAIL = $email;
          $personneMoral->ETATPAIEMENTCOMPTE = $etatPaiementCompte;
          $personneMoral->OBSERVATION = $observation;
          $personneMoral->OPERABILITE = $operabilite;
          $personneMoral->LANGUAGE = $language;
          $personneMoral->CRM_PROVIDER_NAME = $crm_provider_name;
          $personneMoral->CRM_PROVIDER_EMAIL = $crm_provider_email;
          $personneMoral->COMPTEPAYPAL = $comptePaypal;
          $personneMoral->REFBANCAIRE = $refBancaire;
          $personneMoral->LOGIN = $login;
          $personneMoral->MOTDEPASSE = $motDePasse;
          $personneMoral->TYPENATURE = $typenature;
          $personneMoral->save();
    }

    public function create( $idLocalisation, $nom, $etatCompte, $urlSiteWeb, $logo, $presentation, $telephone, $email,
        $etatPaiementCompte, $observation, $operabilite, $language, $crm_provider_name, $crm_provider_email,
        $comptePaypal, $refBancaire, $login, $motDePasse , $typenature){

          $personneMoral = new Personnemoral;
          $personneMoral->IDLOCALISATION = $idLocalisation;
          $personneMoral->NOM  = $nom;
          $personneMoral->ETATCOMPTE = $etatCompte;
          $personneMoral->URLSITEWEB = $urlSiteWeb;
          $personneMoral->LOGO = $logo;
          $personneMoral->PRESENTATION = $presentation;
          $personneMoral->TELEPHONE = $telephone;
          $personneMoral->EMAIL = $email;
          $personneMoral->ETATPAIEMENTCOMPTE = $etatPaiementCompte;
          $personneMoral->OBSERVATION = $observation;
          $personneMoral->OPERABILITE = $operabilite;
          $personneMoral->LANGUAGE = $language;
          $personneMoral->CRM_PROVIDER_NAME = $crm_provider_name;
          $personneMoral->CRM_PROVIDER_EMAIL = $crm_provider_email;
          $personneMoral->COMPTEPAYPAL = $comptePaypal;
          $personneMoral->REFBANCAIRE = $refBancaire;
          $personneMoral->LOGIN = $login;
          $personneMoral->MOTDEPASSE = $motDePasse;
          $personneMoral->TYPENATURE = $typenature;
          $personneMoral->save();
          return $personneMoral;

    }

    public function payeCompte($id){
        $personneMoral = $this->get($id);
        $personneMoral->ETATPAIEMENTCOMPTE = true;
        $personneMoral->save();
        return $personneMoral;
    }

    public function delete($id){
        $personneMoral = this.get($id);
        $personneMoral->delete();
    }

    public function updateLoginMp($id,$mp){
        $personneMoral = $this->get($id);
        $personneMoral->LOGIN = $personneMoral->EMAIL;
        $personneMoral->MOTDEPASSE = $mp;
        $personneMoral->save();
        return $personneMoral;
    }

}
