<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;
use App\Entite\Personnemoral as Personnemoral;
use App\Entite\Personnephysique as Personnephysique;
use DB;

class Membre extends Model {

    /**
     * Generated
     */

    protected $table = 'membre';
    protected $fillable = ['IDMEMBRE', 'IDPERSONNEMORALE', 'IDPERSONNEPHYSIQUE', 'STATUTCOMPTE', 'ETATNEWSLETTER', 'ETATPARTAGEDONNEE', 
	'UPDATED_AT', 'CREATED_AT', 'NUMINSCRIPTION'];
	protected $primaryKey = "IDMEMBRE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

    //getMDP
    public function getMdp($email){
        $pm = new Personnemoral();
        $pp = new Personnephysique();

        //
        $mdpPM = $pm->getMdpPM($email);
        $mdpPP = $pp->getMdpPP($email);

        $mdp = null;
        //get tout les mdp selon l'email sasie
        if($mdpPM==null){
            return $mdp = $mdpPP;
        }
        else{return $mdp=$mdpPM;}
    }
    ///getLogin
    public function getLogin($email){
        $pm = new Personnemoral();
        $pp = new Personnephysique();
        $result=null;
        if($pm->getLoginPM($email)==null){
            return $result=$pp->getLoginPP($email);
        }
        else{return $result=$pm->getLoginPM($email);}
    }

    //get id
    public function getId($login){
        $pm = new Personnemoral();
        $pp = new Personnephysique();
        $result=null;
        if($pm->getId($login)==null){
            return $result=$pp->getId($login);
        }
        else{return $result=$pm->getId($login);}
    }
    //get nature
    public function getNature($email){
        $pm = new Personnemoral();
        $pp = new Personnephysique();
        $result = null;
        if($pm->getNature($email) == null){
            return $result=$pp->getNature($email);
        }
        else{
            return $result=$pm->getNature($email);
        }
    }

    //get numero inscription
    public function getN_inscription($id){

    }

    /*---------------------------- test TYPE DE MEMBRE -----------------------*/
    public function TypeMembre($login){
        $testPM = DB::table('personnemoral')->where(['Login'=>$login])->count();
        $testPP = DB::table('personnephysique')->where(['Login'=>$login])->count();

        if($testPM==1 && $testPP==0){
            return 'Organisation';
        }
        if($testPM==0 && $testPP==1){
            return 'Particulier';
        }
    }
    /*------------------------------GET NOM ----------------------------*/
    public function getNom($login){
        $type = $this->typeMembre($login);
        if($type == 'Organisation'){
            $result = DB::select('select Nom from personnemoral where Login="'.$login.'"') ;
            foreach ($result as $result){
                return $result->Nom;
            }
        }
        if($type == 'Particulier'){
            $result = DB::select('select Nom from personnephysique where Login="'.$login.'"') ;
            foreach ($result as $result){
                return $result->Nom;
            }
        }
    }

    /*-------------------------- Get prenom -----------------------------*/
    public function getPrenom($login){
        $type = $this->typeMembre($login);
        if($type == 'Organisation'){
            return '-------- ---- --- --';
        }
        if($type == 'Particulier'){
            $result = DB::select('select Prenom from personnephysique where Login="'.$login.'"') ;
            foreach ($result as $result){
                return $result->Prenom;
            }
        }
    }
    /*---------- - ---------------Get Mail -----------------------------*/
    public function getEmail($login){
        $type = $this->typeMembre($login);
        if($type == 'Organisation'){
            $result = DB::select('select Email from personnemoral where Login="'.$login.'"') ;
            foreach ($result as $result){
                return $result->Email;
            }
        }
        if($type == 'Particulier'){
            $result = DB::select('select Email from personnephysique where Login="'.$login.'"') ;
            foreach ($result as $result){
                return $result->Email;
            }
        }
    }
    /*---------------------------Get Phone ***************************/
    public function getTelephone($login){
        $type = $this->typeMembre($login);
        if($type == 'Organisation'){
            $result = DB::select('select Telephone from personnemoral where Login="'.$login.'"') ;
            foreach ($result as $result){
                return $result->Telephone;
            }
        }
        if($type == 'Particulier'){
            $result = DB::select('select Telephone from personnephysique where Login="'.$login.'"') ;
            foreach ($result as $result){
                return $result->Telephone;
            }
        }
    }
    /*****--------------------------GET AVATAR ************************/
    public function getAvatar($login){
        $type = $this->typeMembre($login);
        if($type == 'Organisation'){
            $result = DB::select('select Logo from personnemoral where Login="'.$login.'"') ;
            foreach ($result as $result){
                return $result->Logo;
            }
        }
        if($type == 'Particulier'){
            $result = DB::select('select avatar from personnephysique where Login="'.$login.'"') ;
            foreach ($result as $result){
                return $result->avatar;
            }
        }
    }
    /***********************------------- Modifier Profil ----------------********************/
    public function modifier($login, $nom, $prenom, $email, $contact, $avatar){
        $type = $this->typeMembre($login);

        if($type == 'Organisation'){
            $query = DB::table('personnemoral')
                ->where('login',$login)
                ->update(array('Nom'=>$nom, 'Email'=>$email, 'Telephone'=>$contact, "Logo"=>$avatar));
        }
        if($type == 'Particulier'){
            $query = DB::table('personnephysique')
                ->where('login',$login)
                ->update(array('Nom'=>$nom, 'Prenom'=>$prenom, 'Email'=>$email, 'Telephone'=>$contact, 'avatar'=>$avatar));
        }
    }

}
