<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ParametresController extends Controller
{
    private $nom_site;
    private $identifiant;
    protected $xml_loader;

    public function __construct(Auth $user)
    {
    	$this->xml_loader = xml_loader_files('config');
    }

    /**
    * fonction get parametrage du site view : configInfoSite
    * @param null
    * @return Collection Object
    */
    public function showConfigSite()
    {
    	$datas = [
    		'identifiant' => param('identifiant'),
    		'nomSite' => param('nom'),
    		'titre' => param('titre'),
    		'email' => param('email'),
    		'latitude' => param('latitude'),
    		'longitude' =>  param('longitude')
    		];
    	$donnees = json_decode(json_encode($datas),false);
    	return view('admin.configInfoSite',compact('donnees'));
    }

    /**
    * fonction modification configuration du site 
    * @param Request $request
    * @return Response 
    */
    public function updateConfig(Request $request)
    {
    	$compteur = false;
    	$inputs = $request->input();
    	unset($inputs['_token']);
    	$configs = param();
    	foreach ($inputs as $key => $value) {
    		foreach ($configs['app'] as $cle => $valeur) {
    			if( $key == $cle )
    				if( $value != $valeur){
    					$compteur = true;
    					param($key,$value);
    				}
    		}
    	}
    	if( $compteur )
    		return back()->with('success','La configuration a été modifiée avec succés ! ');
    	else
    		return back()->with('error','Aucune modification n\'a été enregistrée ! ');
    }

}
