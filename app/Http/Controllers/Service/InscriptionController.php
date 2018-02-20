<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\AfaController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\AplController;
use App\Http\Controllers\LocalisationController;
use App\Http\Controllers\PersonnemoralController;
use App\Http\Controllers\PersonnephysiqueController;
use App\Http\Controllers\InfocompteController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\VendeurController;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use App\Mail\ContratEmail;
use App\Mail\InfoCompteEmail;
use App\Entite\Membre;

class InscriptionController extends Controller
{
    public function getCondition($type){
      $condition = array();
      if($type == "APL"){ //A voir si à mettre en base de données ou pas
        $condition[0] = "L'Agence Partenaire Locale accepte la Mission d'Information, d'Orientation et de Promotion qui
        consiste d'une part à informer et orienter les Membres du site IEA qui sont engagés dans une relation exclusive
        avec elles, et d'autre part d'assurer le placement des produits affichés par des initiatives promotionnelles
        ciblées propres. ";
        $condition[1] = "L'Agence Partenaire Locale accepte la sécurisation du lien que des Membres ont établi en
        choisissant d'établir une relation d'exclusivité avec elle. Ceci sera détaillé dans le contrat qui lui sera
        proposé dans la suite de la procédure. ";
        $condition[2] = "L'Agence Partenaire Locale accepte la sécurisation de la relation d'affaires entre IEA et
        elle-même qui comporte des clauses de non concurrence et de loyauté nécessaires et essentielles dans un marché
        virtuel. Ceci sera détaillé dans le contrat qui lui sera proposé dans la suite de la procédure. ";
        $condition[3] = "L'Agence Partenaire Locale accepte les montants et la procédure de la rémunération établis par IEA.
        En cas d'achat d'un bien par un des Membres qui lui est lié par une relation d'exclusivité, le taux de rémunération
        normal de l'APL est de 0,5% du prix de vente du bien exprimé en dollars australiens. Si l'APL a été à l'origine d'un
        volume d'affaires égal ou supérieur à 2 500 000 dollars australiens au cours d'un exercice, le taux de sa rémunération
        est porté à 1% du prix de vente du bien exprimé en dollars australiens. Le versement de la rémunération s'effectue par
        une procédure automatisée à 30 jours fin de mois après la perception par IEA de sa propre rémunération. ";
        $condition[4] = "L'Agence Partenaire Locale reconnaît avoir pris connaissance des Termes et Conditions d'Utilisation
        du site \"Investir en Australie\" et déclare les accepter sans aucune réserve. ";
      }
      return $condition;
    }

    public function getMessageConfirmation(Request $request){
        $message = array();
        if($request->session()->get("stepMessage") == 1 && $request->session()->get("personne")->LANGUAGE == "fr"){
            $message[0] = "Merci beaucoup";
            $message[1] = "Veuillez vérifiez votre email, un email a été envoyé dans votre boite email. Veuillez accepter et 
                    confirmer votre inscription";
            $message[2] = asset('images/email.png');
        }
        else if($request->session()->get("stepMessage") == 1 && $request->session()->get("personne")->LANGUAGE == "eng"){
            $message[0] = "Thank you so much";
            $message[1] = "Please check your email, an email has been sent to your mailbox.Please accept and confirm your 
                    registration";
            $message[2] = asset('images/email.png');
        }
        else if($request->session()->get("stepMessage") == 2 && $request->session()->get("personne")->LANGUAGE == "fr"){
            $message[0] = "MERCI BEAUCOUP";
            $message[1] = "Un email resumant le contrat entre IEA et l'entité de type ".$request->session()->get("type")." et de nom ".
                            $request->session()->get("entite")->NOM." seras envoyé dans votre boite email, 
                            veuillez signer ce contrat pour poursuivre votre inscription";
            $message[2] = asset('images/email.png');
        }
        else if($request->session()->get("stepMessage") == 2 && $request->session()->get("personne")->LANGUAGE == "eng"){
            $message[0] = "THANK YOU SO MUCH";
            $message[1] = "An email summarizing the contract between IEA and an entity typed ".$request->session()->get("type")." and named ".
                            $request->session()->get("entite")->NOM." will be send to you email box, please 
                            check and sign this for continue your subscription";
            $message[2] = "asset('images/email.png')";
        }
        else if($request->session()->get("stepMessage") == 3 && $request->session()->get("personne")->LANGUAGE == "fr"){
            $message[0] = "Merci beaucoup";
            $message[1] = "Vous avez contracté avec IEA en tant que ".$request->session()->get("type")." sous le nom ".$request->session()->get("personne")->NOM.". Une dernière
                        étape reste à faire et votre compte seras enregistré.Veuillez continuer pour le paiement de votre droit
                        d'inscription";
            $message[2] = asset("images/paiement2.png");
        }
        else if($request->session()->get("stepMessage") == 3 && $request->session()->get("personne")->LANGUAGE == "eng"){
            $message[0] = "Thank you so much";
            $message[1] = "You have contracted with IEA as ".$request->session()->get("type")." in the name of ".$request->session()->get("personne")->NOM.". One last step
                      remains to be done and your account will be registered.Continue to pay your registration fee";
            $message[2] = asset("images/paiement2.png");
        }
        else if($request->session()->get("stepMessage") == 4 && $request->session()->get("personne")->LANGUAGE == "fr"){
            $message[0] = "Merci beaucoup";
            $message[1] = "Vous avez contracté avec IEA en tant que ".$request->session()->get("type")." sous le nom ".$request->session()->get("personne")->NOM."
                      Un email concernant le detail de votre compte seras envoyé à votre adresse email.";
            $message[2] = asset("images/ok2.jpg");
        }
        else if($request->session()->get("stepMessage") == 4 && $request->session()->get("personne")->LANGUAGE == "eng"){
            $message[0] = "Thank you so much";
            $message[1] = "You have contracted with IEA as ".$request->session()->get("type")." in the name of ".$request->session()->get("personne")->NOM."An email
                      regarding the details of your account will be sent to your email address.";
            $message[2] = asset("images/ok2.jpg");
        }
        return $message;
    }

    public function loadPaysListe(){
        $ligne = 1;
        $fic = fopen( storage_path("../public/country-code-fr.csv") , "a+");
        $listePays = array();
        while($tab=fgetcsv($fic,1024))
        {
            $champs = count($tab);
            $ligne ++;
            for($i=0; $i<$champs; $i ++)
            {
                $pays = explode(";", $tab[$i]);
                array_push( $listePays, $pays[1]) ;
            }
        }
        return $listePays;
    }

    public function loadContactTelephonique(){
        $ligne = 1;
        $fic = fopen( storage_path("../public/indicatif-telephonique.csv") , "a+");
        $listeContact = array();
        while($tab=fgetcsv($fic,1024))
        {
            $champs = count($tab);
            $ligne ++;
            for($i=0; $i<$champs; $i ++)
            {
                $contact = explode(";", $tab[$i]);
                array_push( $listeContact, $contact[0]."  ".$contact[1]) ;
            }
        }
        return $listeContact;
    }

    public function loadInscriptionAPL(){
      $listePays = $this->loadPaysListe();
      return view("subscriptionAPL",["listePays"=>$listePays]);
    }

    public function loadInscriptionMembre(){
        $listePays = $this->loadPaysListe();
        $listContact = $this->loadContactTelephonique();
        return view("inscription-membre",["listePays"=>$listePays , "listeContact"=>$listContact]);
    }

    public function sendEmail(Request $request){

      if( $request->session()->get("stepEmail") == 1){ //Email de vérification inscription d'un compte
        if( $request->session()->get("type") =="APL"){
            $urlDestination = "contratVerif";
        }
        else if( $request->session()->get("type") == "MEMBRE" ){
            $urlDestination = "creatLoginMp";
        }
        else if( $request->session()->get("type") == "Vendeur" ){
            $urlDestination = "contratVerif";
        }
        else if( $request->session()->get("type") == "AFA" ){
            $urlDestination = "contratVerif";
        }
        Mail::to( $request->session()->get("personne")->EMAIL )->send(new Email($request->session()->get("type"),$urlDestination,$request->session()->get("personne")));
      }
      else if($request->session()->get("stepEmail") == 2){ //Email pour acceptation de contrat
        if( $request->session()->get("type") =="APL"){
            $condition = $this->getCondition("APL");
            Mail::to( $request->session()->get("personne")->EMAIL  )->send(new ContratEmail("APL",$request->session()->get("personne"),$condition));
        }
      }
      else if($request->session()->get("stepEmail") == 3){ //Email de detail sur le compte à été fait => redirection vers la page d'authentification
          Mail::to( $request->session()->get("personne")->EMAIL )->send( new InfoCompteEmail($request->session()->get("entite"),$request->session()->get("personne")));
      }

      if($request->session()->get("inscription") == false){
          $this->killSession($request);
      }

    }

    public function killSession(Request $request){
        $request->session()->flush();
    }

    public function changeDateFormat($date){
        echo $date;
        $dateFormated = explode('-', $date);
        $date = $dateFormated[2].'-'.$dateFormated[0].'-'.$dateFormated[1];
        return $date;
    }

    public function checkConditionBeforeSubscription(Request $request){
        if($request->type == "Vendeur"){
            if( $request->condition1 == 1 && $request->condition2 == 1){
                return view("subscriptionSeller");
            }
            else{
                return  view("seller",[
                   "error" => "Vous devez acceptez les conditions en tant que Vendeur"
                ]);
            }
        }
        else if($request->type == "AFA"){
            if( $request->condition1 == 1 && $request->condition2 == 1 && $request->condition3 == 1 && $request->condition4 == 1){
                return view("subscriptionAFA");
            }
            else{
                return  view("AFA",[
                    "error" => "Vous devez acceptez les conditions en tant que AFA"
                ]);
            }
        }
    }

    public function inscrireForm(Request $request,PersonnemoralController $personnemoralController,
                    LocalisationController $localisationController,AplController $aplController,
                     PersonnephysiqueController $personnephysiqueController,MembreController $membreController,
                    VendeurController $vendeurController, AfaController $afaController){


        $membre =new Membre();

        if($request->type == "APL"){
            $testEmail = $membre->getLogin($request->email);
            if($testEmail == null){
                $localisation = $localisationController->create($request->adresse,$request->pays,
                    $request->etat,$request->ville,$request->codePostal);
                $logoPath = $request->file('logo')->store("upload");
                $personneMoral = $personnemoralController->create($localisation->IDLOCALISATION, $request->nom,false,"",$logoPath,
                    $request->presentationAPL, $request->telephone, $request->email,false,"",$request->operabilite,
                    $request->langue,"","","",$request->refBancaire,"","",2);
                $apl = $aplController->create("",$personneMoral->IDPERSONNEMORALE,'','',false,date('Y-m-d'),'',false);

                $request->session()->put("inscription",true);
                $request->session()->put("type","APL");
                $request->session()->put("entite",$apl);
                $request->session()->put("personne",$personneMoral);
                return response()->view("confirmation");
            }
            else{
                echo 'email efa misy io';
            }

      }

      else if($request->type == "MEMBRE"){

          if($request->typeMembre == "Particulier"){
              $testEmail = $membre->getLogin($request->emailParticulier);
              if($testEmail == null){
                  $request->session()->put("typeMembre","Particulier");
                  $localisation = $localisationController->create($request->adresseParticulier,
                                                                  $request->paysParticulier,
                                                                  $request->etatParticulier,
                                                                  $request->villeParticulier,
                                                                  $request->codePostal);

                  if($request->file("avatar") != null){
                      $avatarPath = $request->file("avatar")->store("membreParticulier");
                      $personnePhysique = $personnephysiqueController->create($localisation->IDLOCALISATION,
                          $request->nomParticulier,
                          $request->prenomParticulier,
                          $avatarPath,"","",$request->genre,
                          $request->dateNaissance,
                          $request->emailParticulier
                          ,$request->contactParticulierSuffixe." ".$request->contactParticulierNumber,
                          "",$request->referenceBancairePart,"","",0);

                      $membre = $membreController->create("",null,$personnePhysique->IDPERSONNEPHYSIQUE,false,
                          $this->getBooleanToInt($request->newsletterPart),$this->getBooleanToInt($request->partageDonnePart));

                      $request->session()->put("inscription",true);
                      $request->session()->put("type","MEMBRE");
                      $request->session()->put("typeMembre","Particulier");
                      $request->session()->put("entite",$membre);
                      $request->session()->put("personne",$personnePhysique);
                  }
                  else{
                      $avatarPath = "assets/images/avatar.png";
                      $personnePhysique = $personnephysiqueController->create($localisation->IDLOCALISATION,
                          $request->nomParticulier,
                          $request->prenomParticulier,
                          $avatarPath,"","",$request->genre,
                          $request->dateNaissance,
                          $request->emailParticulier
                          ,$request->contactParticulierSuffixe." ".$request->contactParticulierNumber,
                          "",$request->referenceBancairePart,"","",0);

                      $membre = $membreController->create("",null,$personnePhysique->IDPERSONNEPHYSIQUE,false,
                          $this->getBooleanToInt($request->newsletterPart),$this->getBooleanToInt($request->partageDonnePart));

                      $request->session()->put("inscription",true);
                      $request->session()->put("type","MEMBRE");
                      $request->session()->put("typeMembre","Particulier");
                      $request->session()->put("entite",$membre);
                      $request->session()->put("personne",$personnePhysique);
                  }

                  return $this->verifieEmail($request);
              }
              else{
                  echo 'efa misy io email io';
              }

          }
          else if($request->typeMembre == "Organisation"){
              $testEmail = $membre->getLogin($request->emailOrg);
              if($testEmail == null){
                  $localisation = $localisationController->create($request->adresseOrg,$request->paysOrg,$request->etatOrg,
                      $request->villeOrg,$request->codePostalOrg);
                  $logoPath = $request->file("logo")->store("upload");
                  $personneMoral = $personnemoralController->create($localisation->IDLOCALISATION,$request->nomOrg,$this->getBooleanToInt(false),"",
                      $logoPath, $request->presentationOrg,$request->prefixPhone." ".$request->phoneNumber, $request->emailOrg ,
                      false,"",0,$request->langOrg,"","", ""
                      ,$request->refBankOrg,"","",0);
                  $membre = $membreController->create("",$personneMoral->IDPERSONNEMORALE,null,false,
                      $this->getBooleanToInt($request->newsletterOrg),$this->getBooleanToInt($request->partageDonneOrg));

                  $request->session()->put("inscription",true);
                  $request->session()->put("type","MEMBRE");
                  $request->session()->put("typeMembre","Organisation");
                  $request->session()->put("entite",$membre);
                  $request->session()->put("personne",$personneMoral);
                  return $this->verifieEmail($request);
              }
              else{
                  echo 'efa misy io mail';
              }

          }
      }
      else if($request->type == "Vendeur"){

            $localisation = $localisationController->create( $request->adresse , "Australia" , $request->etat,
                            $request->ville, $request->codePostal);
            $logoPath = $request->file("logo")->store("upload");
            $personneMoral = $personnemoralController->create($localisation->IDLOCALISATION , $request->nom ,
                false, $request->websiteUrl , $logoPath, "",$request->numeroTelephone ,
                $request->email, false,"",0,"eng",
                $request->crmProviderName, $request->crmProviderEmail,"","","","",1);
            $personnePhysique = $personnephysiqueController->create($localisation->IDLOCALISATION , $request->contactNom,
                "","", "", "" , null, "1111-11-11", $request->conctactEmail,
                $request->contactNumero, "", "", "", "",1);
            $vendeur = $vendeurController->create(null, $personnePhysique->IDPERSONNEPHYSIQUE, "",
                $personneMoral->IDPERSONNEMORALE, false, $request->typeVendeur);

            $request->session()->put("inscription",true);
            $request->session()->put("type","Vendeur");
            $request->session()->put("typeVendeur",$request->typeVendeur);
            $request->session()->put("entite", $vendeur);
            $request->session()->put("personne",$personneMoral);
            return $this->verifieEmail($request);
      }
      else if($request->type == "AFA"){

          $membre = new Membre();
          $testEmail = $membre->getLogin($request->email);
          if($testEmail == null){
              $localisation = $localisationController->create( $request->adresse , "Australia", $request->etat, $request->ville,
                  $request->codePostal);
              $logoPath = $request->file("logo")->store("upload");
              $personneMoral = $personnemoralController->create( $localisation->IDLOCALISATION, $request->nom , false ,
                  $request->websiteUrl , $logoPath, $request->presentation, $request->numero, $request->email, false,
                  "", $request->operabilite, $request->lang , $request->crmName, $request->crmEmail, "",
                  "", "", "",3);
              $personnePhysique = $personnephysiqueController->create($localisation->IDLOCALISATION, $request->contactNom, "",
                  "", "", "" ,0, "1111-11-11", $request->contactEmail,
                  $request->contactMobile,"" ,"","","",3);
              $afa = $afaController->create("",$personneMoral->IDPERSONNEMORALE, $personnePhysique->IDPERSONNEPHYSIQUE,false);

              $request->session()->put("inscription", true);
              $request->session()->put("type","AFA");
              $request->session()->put("entite",$afa);
              $request->session()->put("personne",$personneMoral);
              return $this->verifieEmail($request);
          }
          else{
              echo " efa misy io mail io an";
          }

      }
    }

    public function getBooleanToInt($value){
        if($value){
            return 1;
        }
        return 0;
    }

    public function redirectPageResult($titre,$message,$image,$next,$lien){
      return response()->view("subscriptionResult",[
          "titre" => $titre,
          "message" => $message,
          "image" => $image,
          "next" => $next,
          "lien" => $lien
      ]);
    }

    public function redirectPageAcceuil(){
        return response()->view("acceuil");
    }

    public function verifieEmail(Request $request){

      if($request->session()->get("inscription")){

        $request->session()->put("stepEmail",1);
        $request->session()->put("stepMessage",1);
        $message = $this->getMessageConfirmation($request);
        $this->sendEmail($request);
        return $this->redirectPageResult($message[0],$message[1],$message[2],false,"");

      }
      else{
          return $this->redirectPageAcceuil();
      }

    }



    public function contratVerif(Request $request,AplController $aplController,VendeurController $vendeurController,
                                 PersonnemoralController $personnemoralController, InfocompteController $infocompteController,
                                AfaController $afaController){

      if($request->session()->get("inscription")){
             if( $request->session()->get("type")=="APL" ){
                $aplController->changeStatutCompte( $request->session()->get("entite")->IDAPL );
                $request->session()->put("stepEmail",2);
                $request->session()->put("stepMessage",2);
                $this->sendEmail($request);
                $message = $this->getMessageConfirmation($request);
                return $this->redirectPageResult($message[0],$message[1],$message[2],false,"");
            }
            else if($request->session()->get("type") == "Vendeur"){
                $vendeurController->changeStatutCompte($request->session()->get("entite")->IDVENDEUR);

                if($infocompteController->getStateSubscription("Vendeur")){
                    $infocompte = $infocompteController->getInfocompteByLibelle("Vendeur");
                    $request->session()->put("infoCompte",$infocompte);
                    $request->session()->put("stepMessage",3);
                    $message = $this->getMessageConfirmation($request);
                    return $this->redirectPageResult($message[0],$message[1],$message[2],true,"");
                }
                else {
                    $this->initialiseCompteVendeur($request,$vendeurController,$personnemoralController);
                    $request->session()->put("inscription",false);
                    $request->session()->put("stepEmail",3);
                    $request->session()->put("stepMessage",4);
                    $this->sendEmail($request);
                    $message = $this->getMessageConfirmation($request);
                    return $this->redirectPageResult($message[0],$message[1],$message[2],false,"");
                }
            }
            else if($request->session()->get("type") == "AFA"){
                $afaController->checkAccount($request->session()->get("entite")->IDAFA);
                if($infocompteController->getStateSubscription("AFA")){
                    $infocompte = $infocompteController->getInfocompteByLibelle("AFA");
                    $request->session()->put("infoCompte",$infocompte);
                    $request->session()->put("stepMessage",3);
                    $message = $this->getMessageConfirmation($request);
                    return $this->redirectPageResult($message[0],$message[1],$message[2],true,"");
                }
                else{
                    $this->initialiseCompteAfa($request,$personnemoralController,$afaController);
                    $request->session()->put("stepEmail",3);
                    $this->sendEmail($request);
                    $request->session()->put("stepMessage",4);
                    $message = $this->getMessageConfirmation($request);
                    return $this->redirectPageResult($message[0],$message[1],$message[2],false,"");
                }
            }
      }
      else{
          //Erreur 404
          return $this->redirectPageAcceuil();
      }
    }

    public function initialiseCompteAfa(Request $request, PersonnemoralController $personnemoralController,
                        AfaController $afaController){
        //Create a mp and numInscription
        $numInscription = "AFA-".$this->createRandom();
        $mp = $this->createRandom();
        //Assign $numInscription in Afa
        $afa = $afaController->addNumInscription($request->session()->get("entite")->IDAFA, $numInscription);
        $request->session()->put("entite",$afa);
        //Change login et mot de passe du personneMoral du afa
        $personne = $personnemoralController->updateLoginMp($request->session()->get("personne")->IDPERSONNEMORALE, $mp);
        $request->session()->put("personne",$personne);
    }

    public function initialiseCompteVendeur(Request $request,VendeurController $vendeurController,PersonnemoralController $personnemoralController){
        //Si le paiement n'auras pas lieu
        if($request->session()->get("typeVendeur") == "Builder"){
            $numInscription = "SBU-".$this->createRandom();
        }
        else if($request->session()->get("typeVendeur") == "Developer"){
            $numInscription = "SDE-".$this->createRandom();
        }
        $mp = $this->createRandom();
        //Change num inscription de l'entite
        $vendeur = $vendeurController->initialiseNumInscription($request->session()->get("entite")->IDVENDEUR,$numInscription);
        $request->session()->put("entite",$vendeur);
        //Change le login et mot de passe du compte du vendeur
        $personneMoral = $personnemoralController->updateLoginMp($request->session()->get("personne")->IDPERSONNEMORALE,$mp);
        $request->session()->put("personne",$personneMoral);
    }

    public function signerContrat(Request $request,AplController $aplController,
                    InfocompteController $infocompteController){

      if($request->session()->get("inscription")){
          if($request->session()->get("type")=="APL"){
                  $aplController->signerContrat($request->session()->get("entite")->IDAPL);
                  $infoCompte = $infocompteController->getInfocompteByLibelle("APL");
                  $request->session()->put("infoCompte",$infoCompte);
                  $paiement = $infoCompte->ETATINSCRIPTION;

                  if($paiement == true){
                    $request->session()->put("stepMessage",3);
                    $message = $this->getMessageConfirmation($request);
                    return $this->redirectPageResult($message[0],$message[1],$message[2],true,"");
                  }
                  else{
                    $request->session()->put("stepMessage",4);
                    $next = false;
                    $lien = "";
                    $message = $this->getMessageConfirmation($request);
                    return $this->redirectPageResult($message[0],$message[1],$message[2],$next,$lien);
                  }
          }
      }
      else {
          //Erreur 404
          return $this->redirectPageAcceuil();
      }

    }

    public function paiementLoadInterface(Request $request){
      if($request->session()->get("inscription")){
        if($request->input("modePaiement") == 1){  //Call view paypal paiement

        }
        else if ($request->input("modePaiement") == 2){ //Call view stripe paiement
          return response()->view("cartePaiement");
        }
      }
      else {
        //Erreur 404
          return $this->redirectPageAcceuil();
      }
    }

    public function creatLoginMp(Request $request,PersonnemoralController $personnemoralController,
                PersonnephysiqueController $personnephysiqueController,MembreController $membreController,
                AplController $aplController,VendeurController $vendeurController, AfaController $afaController){
        if($request->session()->get("inscription")){
            if($request->session()->get("type") == "APL"){
                $numInscription = "APL-".$this->createRandom();
                $apl = $aplController->changeNumInscription($request->session()->get("entite")->IDAPL,$numInscription);
                $mp = $this->createRandom();
                $personneMoral = $personnemoralController->updateLoginMp($request->session()->get("personne")->IDPERSONNEMORALE,$mp);
                $request->session()->put("entite",$apl);
                $request->session()->put("personne",$personneMoral);
                $request->session()->put("stepEmail",3);
                $request->session()->put("stepMessage",4);
                $message = $this->getMessageConfirmation($request);
                $request->session()->put("inscription",false);
                $this->sendEmail($request);
                return $this->redirectPageResult($message[0],$message[1],$message[2],false,"");
            }
            else if($request->session()->get("type") == "MEMBRE"){
                $numInscription = "CLI-".$this->createRandom();
                $mp = $this->createRandom();
                $membreController->changeNumeroInscription($request->session()->get("entite")->IDMEMBRE,$numInscription);
                $membre = $membreController->activeCompte($request->session()->get("entite")->IDMEMBRE);
                if($request->session()->get("typeMembre") == "Particulier"){
                     $personnephysique = $personnephysiqueController->updateLoginMotDePasse($request->session()->get("personne")->IDPERSONNEPHYSIQUE,$mp);
                     $request->session()->put("personne",$personnephysique);
                }
                else if($request->session()->get("typeMembre") == "Organisation"){
                    $personneMoral = $personnemoralController->updateLoginMp($request->session()->get("personne")->IDPERSONNEMORALE,$mp);
                    $request->session()->put("personne",$personneMoral);
                }
                $request->session()->put("stepEmail",3);
                $request->session()->put("stepMessage",4);
                $request->session()->put("entite",$membre);
                $message = $this->getMessageConfirmation($request);
                $this->sendEmail($request);
                $request->session()->put("inscription",false);
                return $this->redirectPageResult($message[0],$message[1],$message[2],false,"");
            }
            else if($request->session()->get("type") == "Vendeur"){
                $this->initialiseCompteVendeur($request,$vendeurController,$personnemoralController);
                $request->session()->put("stepEmail",3);
                $request->session()->put("stepMessage",4);
                $message = $this->getMessageConfirmation($request);
                $request->session()->put("inscription",false);
                $this->sendEmail($request);
                //Reste à faire sur l'appel du fonction inscrireVendeurDansAgentPoint
                return $this->redirectPageResult($message[0],$message[1],$message[2],false,"");
            }
            else if($request->session()->get("type") == "AFA"){
                $this->initialiseCompteAfa($request,$personnemoralController,$afaController);
                $request->session()->put("stepEmail",3);
                $request->session()->put("stepMessage",4);
                $message = $this->getMessageConfirmation($request);
                $request->session()->put("inscription",false);
                $this->sendEmail($request);
                return $this->redirectPageResult($message[0],$message[1],$message[2],false,"");
            }
        }
        else{
            //Erreur 404
            return $this->redirectPageAcceuil();
        }
    }


    public function createRandom(){
        $letters='abcdefghijklmnopqrstuvwxyz';  // selection of a-z
        $string='';  // declare empty string
        for($x=0; $x<3; ++$x){  // loop three times
            $string.=$letters[rand(0,25)].rand(0,9);  // concatenate one letter then one number
        }
        return $string;
    }


    public function inscrireVendeurDansAgentPoint(){
        // Appel d'un controlleur qui vas faire appel aux services de Agent Point
    }

}
