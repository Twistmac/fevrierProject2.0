<?php

namespace App\Http\Controllers\Service;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\PersonnemoralController;
use \Stripe_Account;

class PaiementController extends Controller
{
    public function makePaiementSubscription(Request $request,PersonnemoralController $personnemoralController){
        try{
            if($request->session()->get("inscription")){
                $this->makeChargeStripe($request);
                $personnemoralController->payeCompte($request->session()->get("entite")->IDPERSONNEMORALE);
                return redirect("/creatLoginMp");
            }
            else {
                //Erreur 404
            }
        }
        catch(Exception $e){
            throw $e;
        }
    }

    public function makePaiementReservation(Request $request)
    {
        if($request->session()->get("connectedMember")){

            $afa = $request->session()->get("afa");
            $produit = $request->session()->get("produit");
            $membre = $request->session()->get("membre");

        }
        else {
            //Erreur 404
        }
    }

    /**
     * @param Request $request
     */
    public function makeChargeStripe(Request $request){
        try{
            \Stripe\Stripe::setApiKey("sk_test_X8nDHPiqUJgZ0GQIV9G7auww");
            $tkn= $request->input("stripeToken");
            $price = $this->getPriceOperation($request);
            $currency = $request->input("devise");
            if($currency == "eur"){
                $currency = "eur";
            }
            else if($currency == "usd"){
                $currency = "usd";
            }
            else{
                $currency = "eur";
            }
            $charge = \Stripe\Charge::create(array(
                "amount" => $price * 100,
                "currency" => $currency,
                "description" => $this->getObjectMessage($request),
                "source" => $tkn,
            ));
        }
        catch(Exception $e){
            throw $e;
        }
    }


    public function getPriceOperation(Request $request){
        $price = 0;
        if($request->session()->get("operation")=="inscription"){
            $price = $request->session()->get("infoCompte")->DROITINSCRIPTION;  //A changer
        }
        else if($request->session()->get("operation")=="achatProduit"){
            $price = $request->session()->get("produit")->PRIX;
        }
        return $price;
    }

    public function getObjectMessage(Request $request){
        $message = 0;
        if($request->session()->get("operation")=="inscription"){
            if($request->session()->get("type")=="AFA"){
                $message = "Inscription success AFA : ".$request->session()->get("personne")->NUMINSCRIPTION;
            }
            else if($request->session()->get("type")=="APL"){
                $message = "Inscription success APL : ".$request->session()->get("personne")->NUMINSCRIPTION;
            }
            else if($request->session()->get("type")=="Vendeur"){
                $message = "Inscription success Vendeur : ".$request->session()->get("personne")->NUMINSCRIPTION;
            }
            else if($request->session()->get("type")=="MEMBRE"){
                $message = "Inscription success Membre : ".$request->session()->get("personne")->NUMINSCRIPTION;
            }
        }
        else if($request->session()->get("operation")=="achatProduit")
        {
            if($request->session()->get("phaseAchat") == "reservation"){
                $message = "Reservation du produit : ".$request->session()->get("produit")->IDREF." par l'acheteur ".
                                $request->session()->get("membre")->NUMINSCRIPTION;
            }
            else if($request->session()->get("phaseAchat") == "achat"){
                $message = "Achat du produit : ".$request->session()->get("produit")->IDREF." par l'acheteur ".
                    $request->session()->get("membre")->NUMINSCRIPTION;
            }

        }

        return $message;
    }

}