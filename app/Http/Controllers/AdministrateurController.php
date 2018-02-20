<?php

namespace App\Http\Controllers;
use App\Entite\Administrateur;

class AdministrateurController extends Controller
{
    public function get($id){
        return Administrateur::find($id);
    }

    public function create($idPersonnePhysique){
        $administrateur = new Administrateur;
        $administrateur->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
        $administrateur->save();
        return $administrateur;
    }

    public function update($id,$idPersonnePhysique){
        $administrateur = $this->get($id);
        $administrateur->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
        $administrateur->save();
        return $administrateur;
    }

    public function getAll(){
        return Administrateur::all();
    }

    public function delete($id){
        $administrateur = $this->get($id);
        $administrateur->delete();
    }

}
