<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Afa extends Model {

    /**
     * Generated
     */

    protected $table = 'afa';
    protected $fillable = ['IDAFA', 'IDPERSONNEPHYSIQUE', 'IDPERSONNEMORALE', 'STATUTCOMPTE', 'UPDATED_AT', 'CREATED_AT', 'NUMINSCRIPTION', 'STATE'];
	protected $primaryKey = "IDAFA";


    public function personnephysique(){
        return $this->hasMany('App\Entite\personnephysique','idpersonnephysique','idpersonnephysique');
    }
    public function personnemoral(){
        return $this->hasMany('App\Entite\Personnemoral','idpersonnemorale','idpersonnemorale');
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

    //modifier Detail Business
    public function setDetail($nom, $address, $pays, $etat, $codepostal, $telephone, $urlsite, $avatar){
        $query = afa::with('personnemoral')
            ->join('personnemoral','personnemoral.idpersonnemorale','=','afa.idpersonnemorale')
            ->join('localisations', 'personnemoral.idlocalisation', '=', 'localisations.idlocalisation')
            ->where('login',session('login'))
            ->update(array('adresse'=>$address,
                            'nom'=>$nom,
                            'pays'=>$pays,
                            'etat'=>$etat,
                            'codepostal'=>$codepostal,
                            'telephone'=>$telephone,
                            'urlsiteweb'=>$urlsite,
                            'logo'=>$avatar
                ));
    }

    
}
