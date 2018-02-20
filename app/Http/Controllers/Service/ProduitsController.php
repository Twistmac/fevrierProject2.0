<?php

namespace App\Http\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Entite\Produit;
use App\Entite\Blog;
use App\Entite\Image;

class ProduitsController extends Controller
{
	private $slug;
	private $produit;

	public function __construct()
	{
		$this->produit = new Produit();
	}

    public function details()
    {
    	$product_id = \Request::get('product_id');
    	$detailproduit = $this->produit->queryOnedetail($product_id);
        $all = $this->produit->queryLatestenregistred(9);
        $blog = new Blog();
        $listblog = $blog->listblogwithimage();
        foreach($listblog as $listes)
        {
            $listes->slug = Blog::slugBlog($listes->titre,$listes->id);
            $listes->titre = Blog::trunque($listes->titre,70);
            $listes->contenu = Blog::trunque($listes->contenu);
        }
    	return view('front.detail',compact('detailproduit','all','listblog'));
    }

    public function indexresidentiel()
    {
        $categorie = "Résidentiel";
        $requete = $this->getsortbyCategoryinArray($categorie);
        return view('front.template',compact('requete','categorie'));
    }

    public function gestioncontenu($param=null,$categorie=null)
    {
       $requete = $this->getsortbyCategoryinArray($categorie,$param);
       return view('front.ajaxgestion',compact('requete'));
    }

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

    public function indexfoncier()
    {
        $categorie = "Foncier";
        $requete = $this->getsortbyCategoryinArray($categorie);
        return view('front.template',compact('requete','categorie'));
    }

    public function indexindustriel()
    {
        $categorie = "Industriel";
        $body = 'style="background-color: #ddd"';
        $requete = $this->getsortbyCategoryinArray($categorie);
        return view('front.template',compact('requete','categorie','body'));
    }

    public function indexcommercial()
    {
        $categorie = "Commercial";
        $requete = $this->getsortbyCategoryinArray($categorie);
        return view('front.template',compact('requete','categorie'));
    }
}
