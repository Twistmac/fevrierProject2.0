<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Produit;
use App\Search;

class SearchsController extends Controller
{
    /** Fonction de recherche de produits
    * @param Request $request
    * @return resultat 
    */
    public  function searchGlobal(Request $request)
    {
        $this->validate($request , [
            'etats' => 'nullable|max:255',
            'villes' => 'nullable|max:255',
            'suburbs' => 'nullable|max:255',
        ]);

        $recherche = new Search();
        $produit = new Produit();
        $result = $produit->queryprincipal();

        if( !empty($request->input('etats') || !empty($request->input('villes'))))
        {
            $result = "";
            $result = $recherche->searchLocalisation($request->input('etats'),$request->input('villes'));
        }

        if(!empty($result) && !empty($request->input('prix')) || !empty($request->input('superficie')) )
        {
            if(!is_null($request->input('prix')))
            {
                $array_prix = preg_split("/,/", $request->input('prix'));
                $prix['min'] = $array_prix[0];
                $prix['max'] = $array_prix[1];
            }
            if(!is_null($request->input('superficie')))
            {
                $array_surface = preg_split("/,/", $request->input('superficie'));
                $surface['min'] =  $array_surface[0];
                $surface['max'] = $array_surface[1];
            }

            if( !empty($prix) && !empty($surface) )
            $result = $result->whereBetween('produits.prix', [ $prix['min'], $prix['max'] ])->whereBetween('produits.surface', [ $surface['min'], $surface['max'] ]);
            if(!empty($prix))
               $result = $result->whereBetween('produits.prix', [ $prix['min'], $prix['max'] ]);
            elseif(!empty($surface))
               $result = $result->whereBetween('produits.surface', [ $surface['min'], $surface['max'] ]);
        }

        if(!empty($request->input('sdb')) || !empty($request->input('ch')))
        {
            $sdb = preg_split("/,/", $request->input('sdb'));
            $ch = preg_split("/,/", $request->input('ch'));
            if(!empty($request->input('sdb')) && !empty($request->input('ch')))
            {
                $result = $result->whereBetween('optionproduits.sdb',[$sdb[0],$sdb[1]])->whereBetween('optionproduits.ch',[$ch[0],$ch[1]]);   
            }
            if( !empty($request->input('sdb')) || empty($request->input('ch')) )
            {
                $result = $result->whereBetween('optionproduits.sdb',[$sdb[0],$sdb[1]]);
            }
            elseif( empty($request->input('sdb')) || !empty($request->input('ch')) )
            {
                $result = $result->whereBetween('optionproduits.ch',[$ch[0],$ch[1]]); 
            }
        }

        if(!empty($request->input('typelogement')))
        {
            $result = $result->where('optionproduits.typepropriete',$request->input('typelogement'));
        }
        $resultat = $result->paginate(20);
        $resultat = Produit::createSlug($resultat);
    	return view('front.resultat',compact('resultat'));
    }	

}
