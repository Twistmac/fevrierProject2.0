<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Personnephysique extends Model {

    /**
     * Generated
     */

    protected $table = 'personnephysique';
    protected $fillable = ['IDPERSONNEPHYSIQUE', 'IDLOCALISATION', 'NOM', 'PRENOM', 'LOGIN', 'MOTDEPASSE', 'GENRE', 
	'DATENAISSANCE', 'EMAIL', 'TELEPHONE', 'FAX', 'REFBANCAIRE', 'COMPTEPAYPAL', 'OBSERVATION', 'UPDATED_AT', 
	'CREATED_AT', 'AVATAR', 'TYPENATURE', 'LANGUAGE'];
	protected $primaryKey = "IDPERSONNEPHYSIQUE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

    /*get mdp du personne physique */
    public function getMdpPP($email){
        $result = Personnephysique::where('Email',$email)->get();
        foreach ($result as $result){
            return $result->MOTDEPASSE;
        }
    }

    public function getLoginPP($email){
        $result = Personnephysique::where('Email',$email)->get();
        foreach ($result as $result){
            return $result->LOGIN;
        }
    }
    /* get TypeNature */
    public function getNature($email){
        $result = Personnephysique::where('Email',$email)->get();
        foreach ($result as $result){
            return $result->TYPENATURE;
        }
    }
    /*GET ID PRESONNNE PHYSIQUE*/
    public function getId($login){
        $result = Personnephysique::where('Login',$login)->get();
        foreach ($result as $result){
            return $result->IDPERSONNEPHYSIQUE;
        }
    }

}
