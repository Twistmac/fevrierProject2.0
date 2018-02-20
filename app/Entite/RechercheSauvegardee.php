<?php 
namespace App\Entite;

use Illuminate\Database\Eloquent\Model;
use DB;

class RechercheSauvegardee extends Model {

    /**
     * Generated
     */

    protected $table = 'recherche_sauvegardees';
    protected $fillable = ['IDRECHERCHE', 'IDPRODUIT', 'LOGIN', 'DATE_SAUVEGARDE', 'MOTCLE', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "IDRECHERCHE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

    public function produit(){
        return $this->hasMany('App\Entite\produits','idproduit','idproduit');
    }

    public function getSauvegarde($login){
        $sauvegarde = RechercheSauvegardee::with('produit')
            ->join('produits','produits.idproduit','=','recherche_sauvegardees.idproduit')
            ->join('images','images.id','=','produits.images_id')
            ->where('recherche_sauvegardees.login',$login)->get();

        return $sauvegarde;
    }

    public function insert($login, $idproduit){
         DB::insert("insert into recherche_sauvegardees (IDPRODUIT,LOGIN) VALUES('".$idproduit. "'" .","."'" .$login. "'" .")");
    }

    public static function format_date($date)
    {
        return date('d/m/Y',strtotime($date));
    }

}
