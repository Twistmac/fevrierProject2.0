<?php

namespace App\Http\Controllers;

use App\Entite\favoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Produit;
use App\Blog;
use App\Image;
use App\Entite\RechercheSauvegardee;
use App\Http\Controllers\Session;
use App\Publicite;
use App\Http\Controllers\PublicitesController;

class ProduitsController extends Controller
{
	private $slug;
    private $produit;
    private $publicites;
    private $pubs;

    public function __construct()
    {
        $this->pubs = new Publicite();
        $this->publicites = new PublicitesController($this->pubs);
        $this->produit = new Produit();
    }
	/**
     * fonction details d'un produit
     * @return Object collection produit
     */
    public function details()
    {
    	$product_id = \Request::get('product_id');
    	$detailproduit = $this->produit->queryOnedetail($product_id);

        //return 9 produits sur 9 cases par défaut
        $all = $this->produit->createSlug($this->produit->queryLatestenregistred(9));
        //blog relation avec image
        $blog = new Blog();
        $listblog = $blog->listblogwithimage();
        foreach($listblog as $listes)
        {
            $listes->slug = Blog::slugBlog($listes->titre,$listes->id);
            $listes->titre = Blog::trunque($listes->titre,70);
            $listes->contenu = Blog::trunque($listes->contenu);
        }
        $uri = \Request::path();
        session(['urlVisite'=>$uri]);
        return view('front.detail',compact('detailproduit','all','listblog'));
    }

    /** Acces index page immobilier/residentiel
    * ProduitsController@indexresidentiel
    */

    public function indexresidentiel()
    {
        $categorie = "Résidentiel";
        $publicitesTemplate = $this->publicites->getpubliciteperPage('residentiel');
        $publicites = json_decode(json_encode($publicitesTemplate['residentiel']),false);
        $requete = $this->getsortbyCategoryinArray($categorie);
        return view('front.template',compact('requete','categorie','publicites'));
    }

    /** Fonction de gestion de contenu 
    * @param nbre de produits à afficher
    * @return Object collection Produits
    */
    public function gestioncontenu($param=null,$categorie=null)
    {
       $requete = $this->getsortbyCategoryinArray($categorie,$param);
       return view('front.ajaxgestion',compact('requete'));
    }

    /** Fonction getters via un Array_Produit
    * @param Array : instance de la requete Produit
    */
    public function getsortbyCategoryinArray($category,$param=null)
    {
        $requete = $this->produit->sortbyCategory($category,$param);    
        if(!empty($requete))
        {
             foreach($requete as $requetes)
               {
                    $requetes->prix = $this->produit->getPrixAttribute($requetes->prix);
                    $requetes->ch = $this->produit->getChAttribute($requetes->ch);
                    $requetes->sdb = $this->produit->getSdbAttribute($requetes->sdb);
                    $requetes->surface = $this->produit->getSurfaceAttribute($requetes->surface);
                    $requetes->garage = $this->produit->getGarageAttribute($requetes->garage);
                    $requetes->description = Blog::trunque($requetes->description,150);
               }
               $requete = Produit::createSlug($requete);
               return $requete;
        }
    }

    /** Fonction get alls produits Foncier
    * @param Category 'Foncier'
    * @return Object collection Produits
    */
    public function indexfoncier()
    {
        $categorie = "Foncier";
        $publicitesTemplate = $this->publicites->getpubliciteperPage('foncier');
        $publicites = json_decode(json_encode($publicitesTemplate['foncier']),false);
        $requete = $this->getsortbyCategoryinArray($categorie);
        return view('front.template',compact('requete','categorie','publicites'));
    }

    /** Fonction get alls products Industriel
    * @param Categorie 'Industriel'
    * @return Object Collection Produits
    */

    public function indexindustriel()
    {
        $categorie = "Industriel";
        $body = 'style="background-color: #ddd"';
        $requete = $this->getsortbyCategoryinArray($categorie);
        $publicitesTemplate = $this->publicites->getpubliciteperPage('industriel');
        $publicites = json_decode(json_encode($publicitesTemplate['industriel']),false);
        return view('front.template',compact('requete','categorie','body','publicites'));
    }

    /** Fonction get alls products Commercial
    * @param Categorie 'Commercial'
    * @return Object Collection Produits
    */
    public function indexcommercial()
    {
        $categorie = "Commercial";
        $requete = $this->getsortbyCategoryinArray($categorie);
        $publicitesTemplate = $this->publicites->getpubliciteperPage('commercial');
        $publicites = json_decode(json_encode($publicitesTemplate['commercial']),false);
        return view('front.template',compact('requete','categorie','publicites'));
    }

    public function saveRecherche(Request $request){
        //instance
        $rechercheSave = new RechercheSauvegardee();
        //
        $login = $request->input('login');
        $idproduit = $request->input('idproduit');
        if(session('login')==''){
            return redirect()->route('ErrorSession');
        }
        else{
            $rechercheSave->insert($login, $idproduit);
            return redirect()->route('recherche-sauvegardees');
        }
    }

    public function putFavoris(Request $r){
        //instance
        $favoris = new favoris();
        $login = $r->input('login');
        $idproduit = $r->input('idproduit');
        if(session('login')==''){
            return redirect()->route('ErrorSession');
        }
        else{
            $favoris->insert($login, $idproduit);
            return redirect()->route('favoris');
        }
    }
}
