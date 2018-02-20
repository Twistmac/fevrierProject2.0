<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Entite\Membres;
use App\Entite\Membre;
use App\Produit;
use App\Blog;
use App\Localisation;


class ConnexionController extends Controller
{
    private $blog;
    protected $xml_parser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function auth(Request $r1 ){
        $email= $r1->input('email');
        $pwd= $r1->input('pwd');

        //instance
        $membre = new Membre();
        $mdp = $membre->getMdp($email);
        $login = $membre->getLogin($email);
        session(['login'=>$login]);
        $TypeNature = $membre->getNature($email);

        if($mdp == $pwd){
            return redirect()->route('acceuil');

        }

        else{
            session(['errorConnexion'=>'Mot de passe incorrect']);
            return redirect()->route('connexion');
        }

    }



}