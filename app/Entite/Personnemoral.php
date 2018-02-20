<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;
use App\Entite\Localisation as Localisation;

class Personnemoral extends Model {

    /**
     * Generated
     */

    protected $table = 'personnemoral';
    protected $fillable = ['IDPERSONNEMORALE', 'IDLOCALISATION', 'NOM', 'ETATCOMPTE', 'URLSITEWEB', 'LOGO', 'PRESENTATION', 
	'TELEPHONE', 'EMAIL', 'ETATPAIEMENTCOMPTE', 'OBSERVATION', 'OPERABILITE', 'LANGUAGE', 'CRM_PROVIDER_NAME', 'CRM_PROVIDER_EMAIL', 
	'COMPTEPAYPAL', 'REFBANCAIRE', 'LOGIN', 'MOTDEPASSE', 'UPDATED_AT', 'CREATED_AT', 'TYPENATURE'];
	protected $primaryKey = "IDPERSONNEMORALE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

    public function localisation(){
        return $this->hasMany('App\Entite\Localisation','idlocalisation');
    }

    /*get mdp du personne moral*/
    public function getMdpPM($email)
    {
        $result = Personnemoral::where('Email', $email)->get();
        foreach ($result as $result) {
            return $result->MOTDEPASSE;
        }
    }

    /*get Login du personne moral*/
    public function getLoginPM($email)
    {
        $result = Personnemoral::where('Email', $email)->get();
        foreach ($result as $result) {
            return $result->LOGIN;
        }
    }

    /* get TypeNature */
    public function getNature($email)
    {
        $result = Personnemoral::where('Email', $email)->get();
        foreach ($result as $result) {
            return $result->TYPENATURE;
        }
    }

    /* get idpersonnemoral */
    public function getId($login)
    {
        $result = Personnemoral::where('Login', $login)->get();
        foreach ($result as $result) {
            return $result->IDPERSONNEMORALE;
        }
    }


    /* get personne Moral */
    public function getAll($login)
    {
        $result = Personnemoral::with('Localisation')
            ->join('localisation','Localisation.idlocalisation','=','Personnemoral.idlocalisation')
            ->where('Personnemoral.login',$login)->get();;
        foreach ($result as $res) {
            return $res;
        }

    }

}
