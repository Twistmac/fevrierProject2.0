<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Blog;
use App\Localisation;


class HomeController extends Controller
{
    private $blog;
    protected $xml_parser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->blog = new Blog();
        $this->xml_parser = xml_loader_files('textes');
    }
    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
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
            //echo $listes->image[0]->urlimage1 . '<br>';
            $listes->slug = Blog::slugBlog($listes->titre,$listes->id);
            $listes->contenu = Blog::trunque($listes->contenu,100);
        }
        $produits = Produit::createSlug($produits);

        for( $r=count($produits)-1; $r>=3; $r-- )
        {
            $recents[] = $produits[$r];
        }
        $counter = $produit->countProductbyType();
        return view('front.accueil',compact('produits','listesblog','contenus','recents','counter'));
    }

}
