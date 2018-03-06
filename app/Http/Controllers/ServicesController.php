<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Page;
use App\Publicite;
use App\Http\Controllers\PublicitesController;

class ServicesController extends Controller
{
   protected $xml_parser;
   private $pubs;
   private $publicite;

	public function __construct()
	{
		$this->pubs = new Publicite();
		$this->publicite = new PublicitesController($this->pubs);
		$this->page = new Page();
		$this->xml_parser = xml_loader_files('textes');
	}

	/** Fonction Route Services
	* @param null
	* @return view Services
	*/
	public function redirectServices()
	{
		$publicites =  json_decode(json_encode($this->publicite->getpubliciteperPage('services')),false);
		$contenus = $this->xml_parser->services;
		return view('front.services',compact('contenus','publicites'));
	}
}
