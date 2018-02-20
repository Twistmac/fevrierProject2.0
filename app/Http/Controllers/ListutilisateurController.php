<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Listutilisateur;

class ListutilisateurController extends Controller
{
    public get($id){
      return App\Entite\ListUtilisateur::find($id);
    }

    public getAll(){
      return App\Entite\ListUtilisateur::all();
    }

    public create($idPersonnePhysique,$libelle,$droit){
      $listUtilisateur = new Listutilisateur;
      $listUtilisateur->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
      $listUtilisateur->LIBELLE = $libelle;
      $listUtilisateur->DROIT = $droit;
      $listUtilisateur->save();
    }

    public update($id,$idPersonnePhysique,$libelle,$droit){
      $listUtilisateur = this.get($id);
      $listUtilisateur->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
      $listUtilisateur->LIBELLE = $libelle;
      $listUtilisateur->DROIT = $droit;
      $listUtilisateur->save();
    }

    public delete($id){
      $listUtilisateur = this.get($id);
      $listUtilisateur->delete();
    }

}
