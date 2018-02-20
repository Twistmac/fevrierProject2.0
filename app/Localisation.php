<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    /**
	* Relationship Produit
	* @return 
	*/
	public function produits()
	{
		return $this->hasMany('App\Produit');
	}
}
