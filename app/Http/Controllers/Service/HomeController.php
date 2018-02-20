<?php

namespace App\Http\Service;

use Illuminate\Http\Request;
use App\Entite\Produit;
use App\Entite\Blog;


class HomeController extends Controller
{
    private $blog;
    protected $xml_parser;

    public function __construct()
    {
        $this->blog = new Blog();
        $this->xml_parser = xml_loader_files('textes');
    }

    public function index()
    {
        $contenus = $this->xml_parser->accueil;
        $produit = new Produit();
        $produits = $produit->queryLatestenregistred();
        if(empty($produits))
            $produits = [];

        $listesblog = $this->blog->listblogwithimage(null,6);
        foreach($listesblog as $listes)
        {
            $listes->slug = Blog::slugBlog($listes->titre,$listes->id);
            $listes->contenu = Blog::trunque($listes->contenu,100);
        }

        $produits = Produit::createSlug($produits);
        return view('front.accueil',compact('produits','listesblog','contenus'));
    }

}
