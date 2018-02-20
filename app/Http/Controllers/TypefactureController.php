<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Typefacture;

class TypefactureController extends Controller
{
    public get($id){
      return App\Entite\Typefacture::find($id);
    }

    public getAll(){
      return App\Entite\Typefacture::all();
    }

    public create($libelle){
      $typeFacture = new Typefacture;
      $typeFacture->LIBELLE = $libelle;
      $typeFacture->save();
    }

    public update($id,$libelle){
      $typeFacture = this.get($id);
      $typeFacture->LIBELLE = $libelle;
      $typeFacture->save();
    }

    public delete($id){
      $typeFacture = this.get($id);
      $typeFacture->delete;
    }

}
