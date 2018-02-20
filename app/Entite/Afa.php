<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Afa extends Model {

    /**
     * Generated
     */

    protected $table = 'afa';
    protected $fillable = ['IDAFA', 'IDPERSONNEPHYSIQUE', 'IDPERSONNEMORALE', 'STATUTCOMPTE', 'UPDATED_AT', 'CREATED_AT', 'NUMINSCRIPTION', 'STATE'];
	protected $primaryKey = "IDAFA";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

    public function personnephysique(){
        return $this->hasMany('App\Entite\personnephysique','idpersonnephysique','idpersonnephysique');
    }

    //get representant de l'afa
    public function getRepr($id_personnemoral){
        $repr = afa::with('personnephysique')
            ->join('personnephysique','personnephysique.idpersonnephysique','=','afa.idpersonnephysique')
            ->where('afa.idpersonnemorale',$id_personnemoral)->get();

        foreach ($repr as $res){
            return $res;

        }
    }
}
