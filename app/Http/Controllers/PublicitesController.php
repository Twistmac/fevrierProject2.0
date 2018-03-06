<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicite;
use App\Http\Requests;
use App\Http\Controllers\CookiesController;

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
}
