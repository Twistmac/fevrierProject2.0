<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Localisation extends Model {

    /**
     * Generated
     */

    protected $table = 'localisations';
    protected $fillable = ['IDLOCALISATION', 'ADRESSE', 'PAYS', 'ETAT', 'CITE', 'CODEPOSTAL', 'UPDATED_AT', 'LATITUDE', 'LONGITUDE'];
	protected $primaryKey = "IDLOCALISATION";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

    public function produits()
    {
        return $this->hasMany('App\Entite\Produit');
    }
}
