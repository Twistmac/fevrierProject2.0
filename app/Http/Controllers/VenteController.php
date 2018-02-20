<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Vente;

class VenteController extends Controller
{
    public get($id){
      return App\Entite\Vente::find($id);
    }

    public getAll(){
      return App\Entite\Vente::all();
    }

    public create($idVendeur,$idMembre,$idProduit,$dateDebutTransaction,$dateFinTransaction,$valeurCCV,$etatPaiementCCV,
      $datePaiementCCV,$valeurCPC,$etatPaiementCPC,$datePaiementCPC,$etatTransaction,$dernieretapeTransaction){
        $vente = new Vente;
        $vente->IDVENDEUR = $idVendeur;
        $vente->IDMEMBRE = $idMembre;
        $vente->IDPRODUIT = $idProduit;
        $vente->DATEDEBUTTRANSACTION = $dateDebutTransaction;
        $vente->DATEFINTRANSACTION = $dateFinTransaction;
        $vente->VALEURCCV = $valeurCCV;
        $vente->ETATPAIEMENTCCV = $etatPaiementCCV;
        $vente->DATEPAIEMENTCCV = $datePaiementCCV;
        $vente->VALEURCPC = $valeurCPC;
        $vente->ETATPAIEMENTCPC = $etatPaiementCPC;
        $vente->DATEPAIEMENTCPC = $datePaiementCPC;
        $vente->ETATTRANSACTION = $etatTransaction;
        $vente->DERNIERETAPETRANSACTION = $dernieretapeTransaction;
        $vente->save();
    }

    public update($id,$idVendeur,$idMembre,$idProduit,$dateDebutTransaction,$dateFinTransaction,$valeurCCV,$etatPaiementCCV,
      $datePaiementCCV,$valeurCPC,$etatPaiementCPC,$datePaiementCPC,$etatTransaction,$dernieretapeTransaction){
        $vente = this.get($id);
        $vente->IDVENDEUR = $idVendeur;
        $vente->IDMEMBRE = $idMembre;
        $vente->IDPRODUIT = $idProduit;
        $vente->DATEDEBUTTRANSACTION = $dateDebutTransaction;
        $vente->DATEFINTRANSACTION = $dateFinTransaction;
        $vente->VALEURCCV = $valeurCCV;
        $vente->ETATPAIEMENTCCV = $etatPaiementCCV;
        $vente->DATEPAIEMENTCCV = $datePaiementCCV;
        $vente->VALEURCPC = $valeurCPC;
        $vente->ETATPAIEMENTCPC = $etatPaiementCPC;
        $vente->DATEPAIEMENTCPC = $datePaiementCPC;
        $vente->ETATTRANSACTION = $etatTransaction;
        $vente->DERNIERETAPETRANSACTION = $dernieretapeTransaction;
        $vente->save();
    }

    public delete($id){
      $vente = this.get($id);
      $vente->delete();
    }
}
