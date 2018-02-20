<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Optionproduit;

class OptionproduitController extends Controller
{
    public get($id){
      return App\Entite\Optionproduit::find($id):
    }

    public getAll(){
      return App\Entite\Optionproduit::all();
    }

    public create($libelle){
      $optionProduit = new Optionproduit;
      $optionProduit->LIBELLE = $libelle;
      $optionProduit->save();
    }

    public update($id,$libelle){
      $optionProduit = this.get($id);
      $optionProduit->LIBELLE = $libelle;
      $optionProduit->save();
    }

    public delete($id){
      $optionProduit = this.get($id);
      $optionProduit->delete();
    }

}
