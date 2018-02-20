<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Entite\Localisation as Localisation;

class LocalisationController extends Controller
{
    public function get($id){
      return Localisation::find($id);
    }

    public function getAll(){
      return Localisation::all();
    }

    public function create($adresse,$pays,$etat,$cite,$codePostal){
      $localisation = new Localisation;
      $localisation->ADRESSE = $adresse;
      $localisation->PAYS = $pays;
      $localisation->ETAT = $etat;
      $localisation->CITE = $cite;
      $localisation->CODEPOSTAL = $codePostal;
      $localisation->save();
      return $localisation;
    }

    public function update($id,$adresse,$pays,$etat,$cite,$codePostal){
      $localisation = this.get($id);
      $localisation->ADRESSE = $adresse;
      $localisation->PAYS = $pays;
      $localisation->ETAT = $etat;
      $localisation->CITE = $cite;
      $localisation->CODEPOSTAL = $codePostal;
      $localisation->save();
      return $localisation;
    }

    public function delete($id){
      $localisation = this.get($id);
      $localisation->delete();
    }

}
