<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicite;
use App\Http\Requests;

class PublicitesController extends Controller
{
    protected $public;
    protected $xml_loader;

    public function __construct(Publicite $pub)
	{
		$this->publicite = $pub;
		$this->xml_loader = xml_loader_files('publicites');
	}

	/**
	* fonction affichage publicite par page 
	* @param string $nom_page
	* @return Collection Object Publicite
	*/
	

}
