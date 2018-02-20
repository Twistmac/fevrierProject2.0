<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Possessionproduit;

class PossessionproduitController extends Controller
{
    public get($id){
      return App\Entite\Possessionproduit::find($id);
    }

    public getAll(){
      return App\Entite\Possessionproduit::all();
    }

    public create($idEtatPossessionProduit,$idProduit,$idVendeur){
        $possessionProduit = new Possessionproduit;
        $possessionProduit->IDETATPOSSESSIONPRODUIT = $idEtatPossessionProduit;
        $possessionProduit->IDPRODUIT = $idProduit;
        $possessionProduit->IDVENDEUR = $idVendeur;
        $possessionProduit->save();
    }

    public update($id,$idEtatPossessionProduit,$idProduit,$idVendeur){
      $possessionProduit = this.get($id);
      $possessionProduit->IDETATPOSSESSIONPRODUIT = $idEtatPossessionProduit;
      $possessionProduit->IDPRODUIT = $idProduit;
      $possessionProduit->IDVENDEUR = $idVendeur;
      $possessionProduit->save();
    }

    public delete($id){
      $possessionProduit = this.get($id);
      $possessionProduit->delete();
    }

}
