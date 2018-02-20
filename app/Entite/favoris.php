<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;
use DB;

class favoris extends Model {

    /**
     * Generated
     */

    protected $table = 'favoris';
    protected $fillable = ['IDFAVORIS', 'IDPRODUIT', 'LOGIN', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "IDFAVORIS";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

    public function nbrproduit($login){
        $result = favoris::where('Login',$login)->count();
        return $result;
    }

    //get id produit selon login
    public function getIdProduit($login){
        $result = favoris::where('Login',$login)->get();
        return $result;
    }

    public function produit(){
        return $this->hasMany('App\Entite\produits','idproduit','idproduit');
    }

    public function getFavoris($login){
        $favoris = favoris::with('produit')
            ->join('produits','produits.idproduit','=','favoris.idproduit')
            ->join('images','images.id','=','produits.images_id')
            ->where('favoris.login',$login)->get();

        return $favoris;

    }

    public function insert($login, $idproduit){
        DB::insert("insert into favoris (IDPRODUIT,LOGIN) VALUES('".$idproduit. "'" .","."'" .$login. "'" .")");
    }

}
