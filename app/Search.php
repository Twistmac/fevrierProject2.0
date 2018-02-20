<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produit;

class Search extends Model
{
	private $queryprincipal;
    //Moodel Recherche
    public function __construct()
    {
    	$produit = new Produit();
		$this->queryprincipal = $produit->queryprincipal();
    }

	/** Fonction get Etats dans la recherche
	* @param Object type Recherche
	* @return Object Collection Produit
	*/
	public function searchLocalisation($etat=null,$cite=null)
	{

		if(!is_null($etat) AND is_null($cite))
		{
			return $this->queryprincipal->where('localisations.etat',$etat);
		}
		if(is_null($etat) AND !is_null($cite))
		{
			return $this->queryprincipal->where('localisations.cite',$cite);
		}
		elseif(!is_null($etat) AND !is_null($cite))
		{
			return $this->queryprincipal->where('localisations.etat',$etat)->where('localisations.cite',$cite);
		}
	}
}
