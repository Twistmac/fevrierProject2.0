<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Etatpossessionproduit;

class EtatpossessionproduitController extends Controller
{
    public get($id){
      return App\Entite\Etatpossessionproduit::find($id);
    }

    public getAll(){
      return App\Entite\Etatpossessionproduit::all();
    }

    public create($libelle){
      $etatPossessionProduit = new Etatpossessionproduit;
      $etatPossessionProduit->LIBELLE = $libelle;
      $etatPossessionProduit->save();
    }

    public update($id,$libelle){
      $etatPossessionProduit = this.get($id);
      $etatPossessionProduit->LIBELLE = $libelle;
      $etatPossessionProduit->save();
    }

    public delete($id){
      $etatPossessionProduit = this.get($id);
      $etatPossessionProduit->delete();
    }

}
