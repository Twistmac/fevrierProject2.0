<?php
namespace App\Http\Service;


use App\Entite\Afa;
use App\Entite\Personnemoral;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Entite\Membre;

class MembreController extends Controller
{

    public function dashboard(){
        $m = new Membre();
        $login = session('login');
        $typeMembre = $m->TypeMembre($login);
        $Nom = $m->getNom($login);
        $Prenom = $m->getPrenom($login);
        $Email = $m->getEmail($login);
        $telephone = $m->getTelephone($login);
        $avatar = $m->getAvatar($login);
        if(session('login')==''){
            return redirect()->route('ErrorSession');
        }
        else{
            return view('dashboard')->with(['type'=>$typeMembre, 'nom'=>$Nom, 'prenom'=>$Prenom, 'email'=>$Email, 'telephone'=>$telephone, 'avatar'=>$avatar]);
        }
    }

    

}