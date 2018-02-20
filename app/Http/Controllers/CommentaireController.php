<?php

namespace App\Http\Controllers;
use App\Entite\Commentaire;

class CommentaireController extends Controller
{
    public function get($id){
        return Commentaire::find($id);
    }

    public function create($libelle){
        $commentaire = new Commentaire;
        $commentaire->LIBELLE = $libelle;
        $commentaire->save();
        return $commentaire;
    }

    public function update($id,$libelle){
        $commentaire = $this->get($id);
        $commentaire->LIBELLE = $libelle;
        $commentaire->save();
        return $commentaire;
    }

    public function getAll(){
        return Commentaire::all();
    }

    public function delete($id){
        $commentaire = $this->get($id);
        $commentaire->delete();
    }

}
