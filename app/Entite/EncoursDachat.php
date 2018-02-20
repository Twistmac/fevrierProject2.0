<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class EncoursDachat extends Model {

    /**
     * Generated
     */

    protected $table = 'encours_dachat';
    protected $fillable = ['ID', 'IDPRODUIT', 'LOGIN', 'AGENCE', 'DATEACHAT', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "ID";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

    public function produit(){
        return $this->hasMany('App\Entite\produit','idproduit','idproduit');
    }

    public function getEncours($login){
        $favoris = EncoursDachat::with('produit')
            ->join('produits','produits.idproduit','=','encours_dachat.idproduit')
            ->where('encours_dachat.login',$login)->get();

        return $favoris;

    }

}
