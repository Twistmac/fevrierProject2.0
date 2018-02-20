<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Typeproduit;

class TypeproduitController extends Controller
{
    public get($id){
      return App\Entite\Typeproduit::find($id);
    }

    public getAll(){
      return App\Entite\Typeproduit::all();
    }

    public create($lie){
      $typeProduit = new Typeproduit;
      $typeProduit->LIE = $lie;
      $typeProduit->save();
    }

    public update($id,$lie){
      $typeProduit = this.get($id);
      $typeProduit->LIE = $lie;
      $typeProduit->save();
    }

    public delete($id){
      $typeProduit = this.get($id);
      $typeProduit->delete();
    }

}
