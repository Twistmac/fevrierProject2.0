<?php
/**
 * Created by PhpStorm.
 * User: Twist
 * Date: 21/01/2018
 * Time: 18:54
 */

namespace App\Http\Controllers;
use App\produit;
use App\Entite\RechercheSauvegardee;
use App\Entite\Membre;
use App\Entite\favoris;
use App\Entite\EncoursDachat;
use App\Blog;
use Illuminate\Support\Str;


class ProduitUserController extends Controller
{
    public function Favoris(){
        //instance
        $m = new Membre();
        $favoris = new favoris();
        $p = new produit();


        $login = session('login');
        $typeMembre = $m->TypeMembre($login);
        $Nom = $m->getNom($login);
        $Prenom = $m->getPrenom($login);
        $Email = $m->getEmail($login);
        $telephone = $m->getTelephone($login);
        $avatar = $m->getAvatar($login);

        $liste = $favoris->getFavoris($login);

        foreach($liste as $listes)
        {
            $listes->description = Blog::trunque($listes->description,80);
            $listes->prix = $p->getPrixAttribute($listes->prix);
            $listes->slug = strtolower($listes->idproduit).'-'.Str::slug($listes->nom);
        }
       
        if(session('login')==''){
            return redirect()->route('ErrorSession');
        }
        else{
            return view('favoris')->with([
                'type'=>$typeMembre,
                'nom'=>$Nom,
                'prenom'=>$Prenom,
                'email'=>$Email,
                'telephone'=>$telephone,
                'avatar'=>$avatar,
                'liste'=>$liste
            ]);
        }
    }


    //recherche sauvegarder
    public function rechercheSauvegarder(){

        $m = new Membre();
        $sauvegarde = new RechercheSauvegardee();
        $p = new produit();

        $login = session('login');
        $typeMembre = $m->TypeMembre($login);
        $Nom = $m->getNom($login);
        $Prenom = $m->getPrenom($login);
        $Email = $m->getEmail($login);
        $telephone = $m->getTelephone($login);
        $avatar = $m->getAvatar($login);


        $liste = $sauvegarde->getSauvegarde($login);
        foreach($liste as $listes)
        {
            $listes->DATE_SAUVEGARDE = RechercheSauvegardee::format_date($listes->DATE_SAUVEGARDE);
            $listes->description = Blog::trunque($listes->description,80);
            $listes->prix = $p->getPrixAttribute($listes->prix);
            $listes->slug = strtolower($listes->idproduit).'-'.Str::slug($listes->nom);
        }
        //
        if(session('login')==''){
            return redirect()->route('ErrorSession');
        }
        else{
            return view('recherche-sauvegardees')->with([
                'type'=>$typeMembre,
                'nom'=>$Nom,
                'prenom'=>$Prenom,
                'email'=>$Email,
                'telephone'=>$telephone,
                'avatar'=>$avatar,
                'liste'=>$liste

            ]);
        }
    }


    public function encours(){
        //instance
        $m = new Membre();
        $encours_dachat = new EncoursDachat();
        $p = new produit();
        //
        $login = session('login');
        $typeMembre = $m->TypeMembre($login);
        $Nom = $m->getNom($login);
        $Prenom = $m->getPrenom($login);
        $Email = $m->getEmail($login);
        $telephone = $m->getTelephone($login);
        $avatar = $m->getAvatar($login);

        //
        $liste = $encours_dachat->getEncours($login);
        //
        if(session('login')==''){
            return redirect()->route('ErrorSession');
        }
        else{
            return view('encours_dachat')->with([
                'type'=>$typeMembre,
                'nom'=>$Nom,
                'prenom'=>$Prenom,
                'email'=>$Email,
                'telephone'=>$telephone,
                'avatar'=>$avatar,
                'liste'=>$liste

            ]);
        }
    }

    public function achatPrec(){
        //instance
        $m = new Membre();
        $encours_dachat = new EncoursDachat();
        $p = new produit();
        //
        $login = session('login');
        $typeMembre = $m->TypeMembre($login);
        $Nom = $m->getNom($login);
        $Prenom = $m->getPrenom($login);
        $Email = $m->getEmail($login);
        $telephone = $m->getTelephone($login);
        $avatar = $m->getAvatar($login);

        //
        $liste = $encours_dachat->getEncours($login);
        //
        if(session('login')==''){
            return redirect()->route('ErrorSession');
        }
        else{
            return view('achetees-precedemment')->with([
                'type'=>$typeMembre,
                'nom'=>$Nom,
                'prenom'=>$Prenom,
                'email'=>$Email,
                'telephone'=>$telephone,
                'avatar'=>$avatar,

            ]);
        }
    }

}