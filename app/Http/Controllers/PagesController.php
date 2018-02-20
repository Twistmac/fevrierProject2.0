<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Page;

class PagesController extends Controller
{
	protected $page;
	protected $xml_parser;

	public function __construct()
	{
		$this->page = new Page();
		$this->xml_parser = xml_loader_files('textes');
	}
    /** Fonction listes des pages statiques
    * @return Object Collection Pages
    */
    public function showStaticPage()
    {
    	$statics = Page::get();
    	return view('admin.pages',compact('statics'));

    	//$sxml = simplexml_load_file('test.xml');
		//$personne = $sxml->addChild('personne');
		//$personne->addAttribute('id', '2');
		//$nom = $personne->addChild('nom', /*utf8_encode*/($_POST['nom']));
		//$sxml->asXML('test.xml');
    } 

    /** Fonction Route vers contenu dans les pages statiques
    * @param nom_page, xml
    * @return nouveaux contenus 
    */
    public function show($slug,Request $request)
    {
    	$contenus = array();
    	if(!empty($slug))
    	{
    		 $array = json_decode(json_encode($this->xml_parser), TRUE);
    		 foreach($array as $key => $data)
    		 {
    		 	if($key == $slug)
    		 		$contenus = $array[$slug];
    		 }
    	}
    	return view('admin.updatepages',compact('contenus','slug'));
    }
    /** Fonction modification de contenu d'une page
    * @param method: put
    * @return Object Collection Page
    */
    public function update(Request $request)
    {
        $parser = $this->xml_parser; 
        $array = $request->all();
        unset($array['_token']);

        switch ($request->post('parameter')) {
            case 'accueil':
                    $object = $this->xml_parser->accueil;
                break;
            case 'membre':
                    $object = $this->xml_parser->membre;
                break;
            case 'vendeur':
                    $object = $this->xml_parser->vendeur;
                break;
            case 'afa':
                    $object = $this->xml_parser->afa;
                break;
            case 'apl':
                    $object = $this->xml_parser->apl;
                break;
            case 'services':
                    $object = $this->xml_parser->services;
                break;
        }
        unset($array['parameter']);

        foreach($object as $cle => $obj)
        {
            foreach ($array as $key => $value)
             {
                $object->$key = $value;
            }
        } 
        //parser xml des contenus des pages 
        $parser->saveXML(public_path().'/xml/textes.xml');
        return back()->with('success',"Le contenu a été modifié avec succés");
    }

}
