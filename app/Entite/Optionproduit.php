<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Optionproduit extends Model {

    /**
     * Generated
     */

    protected $table = 'optionproduits';
    protected $fillable = ['IDOPTIONPRODUIT', 'IDPRODUIT', 'LIBELLE', 'SDB', 'GARAGE', 'TYPEPROPRIETE', 
		'PARKING', 'PISCINE', 'AUTRES', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "IDOPTIONPRODUIT";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
