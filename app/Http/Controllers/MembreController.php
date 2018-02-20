<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entite\Membre;
use App\Entite\Afa;
use App\Entite\Personnemoral;
use App\Http\Requests;
use DB;

class MembreController extends Controller
{
    public function get($id){
      return Membre::find($id);
    }

    public function getAll(){
      return Membre::all();
    }

    public function create($numInscription,$idPersonneMoral,$idPersonnePhysique,$statutCompte,$etatNewsletter,$etatPartageDonnee){
      $membre = new Membre;
      $membre->NUMINSCRIPTION = $numInscription;
      $membre->IDPERSONNEMORALE = $idPersonneMoral;
      $membre->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
      $membre->STATUTCOMPTE = $statutCompte;
      $membre->ETATNEWSLETTER = $etatNewsletter;
      $membre->ETATPARTAGEDONNEE = $etatPartageDonnee;
      $membre->save();
      return $membre;
    }

    public function update($id,$numInscription,$idPersonneMoral,$idPersonnePhysique,$statutCompte,$etatNewsletter,$etatPartageDonnee){
      $membre = $this->get($id);
      $membre->NUMINSCRIPTION = $numInscription;
      $membre->IDPERSONNEMORALE = $idPersonneMoral;
      $membre->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
      $membre->STATUTCOMPTE = $statutCompte;
      $membre->ETATNEWSLETTER = $etatNewsletter;
      $membre->ETATPARTAGEDONNEE = $etatPartageDonnee;
      $membre->save();
      return $membre;
    }

    public function delete($id){
      $membre = $this->get($id);
      $membre->delete();
    }

    public function changeNumeroInscription($id,$numInscription){
        $membre = $this->get($id);
        $membre->NUMINSCRIPTION = $numInscription;
        $membre->save();
        return $membre;
    }

    public function activeCompte($id){
        $membre = $this->get($id);
        $membre->STATUTCOMPTE = true;
        $membre->save();
        return $membre;
    }

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

    public function maj(){
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
            return view('maj-membre')->with(['type'=>$typeMembre, 'nom'=>$Nom, 'prenom'=>$Prenom, 'email'=>$Email, 'telephone'=>$telephone, 'avatar'=>$avatar]);

        }
    }

    public function modifierProfil(Request $request){
        $m= new Membre();
        $login = session('login');
        $Nom = $request->input('nom');
        $Prenom = $request->input('prenom');
        $Email = $request->input('email');
        $contact = $request->input('contact');
        $image = $request->file('image');
        if($image == null){
            $image = $m->getAvatar($login);
            $m->modifier($login,$Nom,$Prenom,$Email,$contact,$image);
        }
        else{
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/images/');
            $image->move($destinationPath, $name);

            $avatar='assets/images/' .$name;
            $m->modifier($login,$Nom,$Prenom,$Email,$contact,$avatar);
        }
        

        return redirect()->route('dashboard');
    }


    public function dashboardAFA(){

        $afa_= new Afa();
        $m = new Membre();
        $pm = new Personnemoral();
        $login = session('login');
        $id_pm = $m->getId($login);
        $afaRepr = $afa_->getRepr($id_pm);
        $afa = $pm->getAll($login);


        if(session('login')==''){
            return redirect()->route('ErrorSession');
        }
        else{
            return view('dashboardAFA')->with([
                'nom'=>$afa->NOM,
                'adresse'=>$afa->ADRESSE,
                'pays'=>$afa->PAYS,
                'etat'=>$afa->ETAT,
                'codepostal'=>$afa->CODEPOSTAL,
                'email'=>$afa->EMAIL,
                'telephone'=>$afa->TELEPHONE,
                'site'=>$afa->URLSITEWEB,
                'avatar'=>$afa->LOGO,
                'reprTelephone'=>$afaRepr->TELEPHONE,
                'reprEmail'=>$afaRepr->EMAIL,
                'reprNom'=>$afaRepr->NOM,
                'state'=>$afaRepr->STATE,
                'language'=>$afa->LANGUAGE,
                'operabilite'=>$afa->OPERABILITE,
                'presentation'=>$afa->PRESENTATION,
                'crmNom'=>$afa->CRM_PROVIDER_NAME,
                'crmEmail'=>$afa->CRM_PROVIDER_EMAIL,

            ]);

        }


    }

}
