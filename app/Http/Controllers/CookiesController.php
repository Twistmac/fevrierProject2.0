<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class CookiesController extends Controller
{
   
    public function __construct()
    {
    	 //
    }

    /**
    * fonction set cookie avec encryption
    * @param string $name, string valeur, integer $minutes, string $path, string $domain, string $secure, string $httpOnly
    * @return bool true
    */
    public function setcookies( $name, $valeur, $minutes=null, $path=null, $domain=null, $secure=null, $httpOnly=null)
    {
    	try
    	{
    		if( is_null($minutes) )
    		{
    			$minutes = time() + (10 * 365 * 24 * 60 * 60);
    		}
    		$valeurCrypt = Crypt::encrypt($valeur);
	    	$setcookies = setcookie($name, $valeurCrypt, $minutes, $path, $domain, $secure, $httpOnly); 
	    	return true;

		} catch (Exception $e) {
			    echo 'Exception reçue : ',  $e->getMessage(), "\n";
		}	
    }

    /**
    * fonction get cookie avec decryptage
    * @param string $name, string $default
    * @return Object Cookie
    */
    public function getcookies($name,$default=null)
    {
    	if( is_null($default) && isset($_COOKIE[$name]))
    	{
    		$valeur_non_crypt = $_COOKIE[$name];
    		$value_cookie = Crypt::decrypt($valeur_non_crypt);
    		return $value_cookie;
    	}
    	else
    		return $default;
    }
    /**
    * fonction delete cookie encrypter
    * @param string $nom_cookie
    * @return bool 
    */
    public function deletecookies($nom_cookie)
    {
    	try {

    		if( isset($_COOKIE[$nom_cookie]))
    		{
    			unset($_COOKIE[$nom_cookie]);
    			setcookie($nom_cookie, '', time() - 3600, '/'); 
    			return true;
    		}
    		else
    			return false;
    		
    	} catch (Exception $e) {
    		echo 'Exception reçue : ' . $e->getMessage(), "\n";
    	}
    }

    /** 
    * fonction show cookies existants
    * @param string $name
    * @return Object Cookie
    */
    public function showcookies($name=null)
    {
    	if( is_null($name) ){
    		$valeurs = $_COOKIE;
    		return Crypt::decrypt($valeur);
    	}
    	else
    		return Crypt::decrypt($_COOKIE[$name]);
    }

}
