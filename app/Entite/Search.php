<?php

namespace App\Entite;

use Illuminate\Database\Eloquent\Model;
use App\Entite\Produit;

class Search extends Model
{
	private $queryprincipal;

    public function __construct()
    {
    	$produit = new Produit();
		$this->queryprincipal = $produit->queryprincipal();
    }

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
