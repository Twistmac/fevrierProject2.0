<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicite;
use App\Image;
use App\Http\Requests;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\BlogsController;

class PublicitesController extends Controller
{
    protected $public;
    protected $xml_loader;
    private $image;

    public function __construct(Publicite $pub)
	{
		$this->publicite = $pub;
		$this->xml_loader = xml_loader_files('publicites');
		$this->image = new Image();
	}
	/**
	* fonction main publicite 
	* @param string $url_page
	* @return Array $publicite
	*/

	public function getpubliciteperPage($url)
	{
		$recuperation = $this->affichagePublicitePage($url);
		$saveCookie = $this->savePubIntoCookie(new CookiesController,$recuperation,$url);	
		return $saveCookie;
	}

	/**
	* fonction affichage publicite dans page
	* @param string $page
	* @return Array PagePublicite
	*/
	public function affichagePublicitePage($page)
	{
		$resultat = [];
		$xml_page = $this->xml_loader->$page;
		$cles = array_keys(json_decode(json_encode($xml_page),true));

		for ($i=0; $i < count($cles) ; $i++)
		{ 
			$resultat[$cles[$i]] = $xml_page->$cles[$i];
		}
		return json_decode(json_encode($resultat),true);
	}

	/**
	* fonction get Array Cookie
	* @param Object Request, string $nomCookie
	* @return Cookie 
	*/
	public function getCookie($nomCookie)
	{
		$cookie_data = Cookie::get($nomCookie);
		if( $cookie_data )
		{
			if(!is_array($cookie_data))
            {
                $data = [];
                $data[] = $cookie_data;
            }else{
                $data = $cookie_data;
            }
            return $data;
		}
	}

	/**
	* fonction insertion pubilcite dans cookie
	* @param Object Stdclass $objectPub
	* @return Cookie $getpublicite
	*/

	public function savePubIntoCookie($cookie, $objectPub,$nomPage)
	{
		$data_cookie = $cookie->getcookies('publiciteIEA');
		// dd( $cookie->showcookies('publiciteIEA'));
		
		if( !empty($data_cookie) && isset($data_cookie) )
		{
			if( !empty($data_cookie[$nomPage]) )
			{
				//similaire : true , not :false
				$compare = $this->verificationUpdate($data_cookie[$nomPage],$objectPub);
				if( $compare ) //true
				{
					return $data_cookie;
				}
				else{ //false
					$cookie->deletecookies('publiciteIEA');
					unset($data_cookie[$nomPage]);
					$data_cookie[$nomPage] = $objectPub;

					$save = $cookie->setcookies('publiciteIEA',$data_cookie,null,'/');
					return $data_cookie;
				}
			}
			else
			{
				$data_cookie[$nomPage] = $objectPub;
				$cookie->deletecookies('publiciteIEA');
				$cookie->setcookies('publiciteIEA',$data_cookie,null,'/'); 
				return $data_cookie;
			}
		}
		else
		{
			$array_cookies = [];
			$array_cookies[$nomPage] = $objectPub;
			$saveCookie = $cookie->setcookies('publiciteIEA',$array_cookies,null,'/');
			return $array_cookies;
		}
	}

	/**
	* fonction verification si publicite a changé dans Cookie
	* @param Array $$data_cookie[indice], Object $objectPub
	* @return bool : true => modification existe ; false => aucune modification
	*/
	public function verificationUpdate($cookies, $objectPub)
	{
		// $arrayPub = json_decode(json_encode($objectPub),true);
		// $modification = array_diff_assoc($arrayPub,$cookies);
		$modification = ( $objectPub === $cookies);
		return $modification;
	}

	/**
	* fonction listes des pages possédant des publicites
	* @param null
	* @return Collection Object 
	*/
	public function listespagespublicites()
	{
		$pages = $this->publicite->getlistespages(1);
		return view('admin.listespages',compact('pages'));
	}

	/**
	* fonction listes les publicites d'une page 
	* @param string $nom_de_la_page
	* @return Array $listes_pub 
	*/
	public function publiciteperPage($nom_page)
	{
		//listes des pages publicites
		$listesPage = Publicite::all();
		foreach ($listesPage as $lists) {
			$nomlists[] = $lists;
		}
		//listes des sections d'une page
		$sections = $this->xml_loader->$nom_page;
		foreach ($sections as $key => $value) {
			foreach ($value as $cle => $valeur) {
				$listsection[] = $cle;
			}
		}
		//Data de chaque section de page
		//$this->xml_loader->$nom_page->$listsection[0]->lienImage
		$datas = $this->xml_loader->$nom_page;
		//listes des publicites archives 
		$archives = $this->listsarchivespub();
		return view('admin.settingpub',compact('nomlists','listsection','datas','nom_page','archives'));
	}

	/**
	* fonction ajouter une nouvelle publicite 
	* @param Request $request 
	* @return Responce 
	*/
	public function updatePublicite( Request $request )
	{
		$this->validate($request,[
			'description' => 'required'
		]);

		//recolte des données 
		$array_update = [ $request->input('description'),$request->input('class'),$request->input('width'),$request->input('height') ];
		$imageXml = preg_replace("/images\//",'',$request->input('nameImage'));
		//update dans la base de donnée
		if( Image::where('urlimage1', $imageXml ) )
			Image::where('urlimage1',$imageXml)->update(['options'=> implode(";",$array_update) ]);

		//assignation d'une image déjà stockée 
		if( !is_null($request->input('archives')) )
		{
			//get information option image
			$option = $this->listsarchivespub($request->input('archives'));
			$array_segment = explode(";",$option[0]->options);
			$assigne = $this->assignationPub($request->input('page'),$request->input('section'), array_merge([1 => $option[0]->urlimage1], $array_segment) );
			if( $assigne )
				return back()->with('success','La publicite a été sauvegardé et assigné à la section');
		}

		//update dans le fichier xml
		$update_xml = $this->assignationPub($request->input('page'),$request->input('section'), array_merge([1 => $imageXml], $array_update) );
		if( $update_xml )
			return back()->with('success','La publicite a été sauvegardé et assigné à la section');
	}

	/**
	* fonction qui modifie une section publicite
	* @param Request $request
	* @return Response 
	*/ 
	public function ajouterPub( Request $request)
	{
		$this->validate($request,[
			'file' => 'required',
			'description' => 'required'
		]);

		if( is_null($request->input('width')) && is_null($request->input('height')) ){
			$width = 800; 
			$height = 451;
		}
		else{
			$width = $request->input('width'); 
			$height = $request->input('height');
		}
		$blog = new BlogsController();
		//insertion Image
		$nomImage = $blog->uploadAndResize($request,$width,$height);
		$array_options = [$request->input('description'),$request->input('class'),$request->input('width'),$request->input('height')];
		Image::create(['urlimage1' => $nomImage, 'type' => 'pub', 'options' => implode(";",$array_options) ]);
		//assignation de la pub à la section
		if( !empty($request->input('appliquer')) ){
			$update = $this->assignationPub($request->input('page'),$request->input('section'),array_merge([1 => $nomImage], $array_options ));
			if( $update)
				return back()->with('success','La publicite a été sauvegardé et assigné à la section');
		}

		return back()->with('success','La publicité a été sauvegardé avec succés');
		
	}

	/**
	* fonction assignation publicite sur une section 
	* @param string $page, string $section, string $image, Array $option
	* @return bool 
	*/
	 public function assignationPub($page,$section,$option)
	 {
	 	$parser =  $this->xml_loader;
	 	$update = $this->xml_loader->$page->$section;
	 	if( is_array($option) )
	 	{
	 		$update->lienImage = 'images/' . $option[0];
		 	$update->description = $option[1];
		 	$update->class = $option[2];
		 	$update->width = $option[3];
		 	$update->height = $option[4];
	 	}
	 	$parser->saveXML(public_path().'/xml/publicites.xml');
	 	return true;
	 }

	 /**
	 * fonction listes des publicites archivés dans la base de donnée 
	 * @param null
	 * @return Collection Object 
	 */
	 public function listsarchivespub($type=null)
	 {
	 	if( is_null($type) )
	 		$listes =  Image::where('type','pub')->get();
	 	else
	 		$listes = Image::where('id',$type)->get();

	 	foreach($listes as $lst)
	 	{
	 		$segments = explode(";",$lst->options);
	 		$lst->description = $segments[0];
	 		$lst->class = $segments[1];
	 		$lst->width = $segments[2];
	 		$lst->height = $segments[3];
	 	}
	 	return $listes;
	 }
}
