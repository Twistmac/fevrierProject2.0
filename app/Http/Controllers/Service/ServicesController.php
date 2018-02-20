<?php

namespace App\Http\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Entite\Page;

class ServicesController extends Controller
{
   protected $xml_parser;

	public function __construct()
	{
		$this->page = new Page();
		$this->xml_parser = xml_loader_files('textes');
	}

	public function redirectServices()
	{
		$contenus = $this->xml_parser->services;
		return view('front.services',compact('contenus'));
	}
}
