<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Produit;

class ProduitController extends Controller
{
    public function get($id){
      return App\Entite\Produit::find($id);
    }

    public function getAll(){
      return App\Entite\Produit::all();
    }

    public function create($idLocalisation,$idTypeProduit,$nomProduit,$description,$surface,$urlImage,$prix,$tauxMisenAvant,
      $etatProduit){
      $produit = new Produit;
      $produit->IDLOCALISATION = $idLocalisation;
      $produit->IDTYPEPRODUIT = $idTypeProduit;
      $produit->NOMPRODUIT = $nomProduit;
      $produit->DESCRIPTION = $description;
      $produit->SURFACE = $surface;
      $produit->URLIMAGE = $urlImage;
      $produit->PRIX = $prix;
      $produit->TAUXMISENAVANT = $tauxMisenAvant;
      $produit->ETATPRODUIT = $etatProduit;
      $produit->save();
    }

    public function update($id,$idLocalisation,$idTypeProduit,$nomProduit,$description,$surface,$urlImage,$prix,$tauxMisenAvant,
      $etatProduit){
        $produit = this.get($id);
        $produit->IDLOCALISATION = $idLocalisation;
        $produit->IDTYPEPRODUIT = $idTypeProduit;
        $produit->NOMPRODUIT = $nomProduit;
        $produit->DESCRIPTION = $description;
        $produit->SURFACE = $surface;
        $produit->URLIMAGE = $urlImage;
        $produit->PRIX = $prix;
        $produit->TAUXMISENAVANT = $tauxMisenAvant;
        $produit->ETATPRODUIT = $etatProduit;
        $produit->save();
    }

    public function delete($id){
      $produit = this.get($id);
      $produit->delete();
    }

}
