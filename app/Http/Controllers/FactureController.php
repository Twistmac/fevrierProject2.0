<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Facture;

class FactureController extends Controller
{
    public get($id){
      return App\Entite\Facture::find($id);
    }

    public getAll(){
      return App\Entite\Facture::all();
    }

    public create($reference,$dateCreationFacture,$idPayeur,$idPaye,$typePayeur,$typePaye,
          $urlFichierFacture,$datePaiementFacture){
      $facture = new Facture;
      $facture->REFERENCE = $reference;
      $facture->DATECREATIONFACTURE = $dateCreationFacture;
      $facture->IDPAYEUR = $idPayeur;
      $facture->IDPAYE = $idPaye;
      $facture->TYPEPAYEUR = $typePayeur;
      $facture->TYPEPAYE = $typePaye;
      $facture->URLFICHIERFACTURE = $urlFichierFacture;
      $facture->DATEPAIEMENTFACTURE = $datePaiementFacture;
      $facture->save();
    }

    public update($id,$reference,$dateCreationFacture,$idPayeur,$idPaye,$typePayeur,$typePaye,
          $urlFichierFacture,$datePaiementFacture){
      $facture = this.get($id);
      $facture->REFERENCE = $reference;
      $facture->DATECREATIONFACTURE = $dateCreationFacture;
      $facture->IDPAYEUR = $idPayeur;
      $facture->IDPAYE = $idPaye;
      $facture->TYPEPAYEUR = $typePayeur;
      $facture->TYPEPAYE = $typePaye;
      $facture->URLFICHIERFACTURE = $urlFichierFacture;
      $facture->DATEPAIEMENTFACTURE = $datePaiementFacture;
      $facture->save();
    }

    public delete($id){
      $facture = this->get($id);
      $facture->delete();
    }

}
