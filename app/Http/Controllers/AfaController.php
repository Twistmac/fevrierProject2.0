<?php

namespace App\Http\Controllers;
use App\Entite\Afa;
use App\Entite\Membre;
use App\Entite\Personnemoral;
use Illuminate\Http\Request;


class AfaController extends Controller
{
    public function get($id){
      return Afa::find($id);
    }

    public function create($numInscription,$idPersonneMoral,$idPersonnePhysique,$statutCompte){
      $afa = new Afa;
      $afa->NUMINSCRIPTION = $numInscription;
      $afa->IDPERSONNEMORALE = $idPersonneMoral;
      $afa->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
      $afa->STATUTCOMPTE = $statutCompte;
      $afa->save();
      return $afa;
    }

    public function update($id,$numInscription,$idPersonneMoral,$idPersonnePhysique,$statutCompte){
      $afa = this.get($id);
        $afa->NUMINSCRIPTION = $numInscription;
        $afa->IDPERSONNEMORALE = $idPersonneMoral;
        $afa->IDPERSONNEPHYSIQUE = $idPersonnePhysique;
        $afa->STATUTCOMPTE = $statutCompte;
        $afa->save();
        return $afa;
    }

    public function getAll(){
      return Afa::all();
    }

    public function delete($id){
      $afa = $this->get($id);
      $afa->delete();
    }

    public function checkAccount($id){
        $afa = $this->get($id);
        $afa->STATUTCOMPTE = true;
        $afa->save();
        return $afa;
    }

    public function addNumInscription($id,$numInscription){
        $afa = $this->get($id);
        $afa->NUMINSCRIPTION = $numInscription;
        $afa->save();
        return $afa;
    }

    //page mise a jour AFA
    public function majAFA(){
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
            return view('majAFA')->with([
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

    //Modifier Business Detail
    public function setBusinessDetail(Request $request){
        //instance
        $m = new Membre();
        $afa = new Afa();
        $login = session('login');
        $nom = $request->input('nomBusiness');
        $address = $request->input('adressBusiness');
        $pays = $request->input('paysBusiness');
        $etat = $request->input('etatBusiness');
        $codePostal = $request->input('cdBusiness');
        $telephone = $request->input('telBusiness');
        $urlSite = $request->input('siteBusiness');
        $logo = $request->file('logo');

        if($logo == null){
            $logo = $m->getAvatar($login);
            $afa->setDetail($nom,$address,$pays,$etat,$codePostal,$telephone,$urlSite,$logo);
        }
        else{
            $name = time().'.'.$logo->getClientOriginalExtension();
            $destinationPath = storage_path('app/upload/');
            $logo->move($destinationPath, $name);
            $logo= 'upload/'.$name;
            $afa->setDetail($nom,$address,$pays,$etat,$codePostal,$telephone,$urlSite,$logo);

        }

        return redirect()->route('dashboardAFA');
    }
}
