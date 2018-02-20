<?php
use App\Entite\Membre;

/**
* creer le lien css du dashboard ADMIN en ligne 
* @param $url_css string : lien du fichier en local 
* format : lib/bootstrap (bootstrap.css)
*/
//http://dev2.investirenaustralie.com
if ( ! function_exists('helper_css'))
{
    function helper_css($url_css)
	{
	  return '<link href="'. asset('assets/css/'. $url_css .'.css').'" rel="stylesheet">' ;
	}  
}
/**
* creer le lien image vers le dashboard ADMIN en ligne  
* @param $url_img string : lien de l'image en local
*/
if( ! function_exists('link_img'))
{
	function link_img($url_img)
	{
		return asset($url_img) ;
	}
}
/**
* creer le lien javascript vers le dashboard ADMIN en ligne  
* @param $url_js string : lien de l'image en local
* format : assets/js/lib/jquery.js ou assets/plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js
*/

if( ! function_exists('helper_js'))
{
	function helper_js($url_js)
	{
		return '<script src="'. asset($url_js.'.js').'"></script>';
	}
}
/**
* creer le lien css plugin vers le frontEnd en ligne  
* @param $url_css string : lien du css/plugin en local
* format : plugins/slick-nav/slicknav
*/
if( ! function_exists('plugin_css'))
{
	function plugin_css($plugin_css)
	{
		return '<link href="'. asset($plugin_css .'.css').'" rel="stylesheet">';
	}
}
/** 
*chargement des fichiers xml_loader_files
* @param Route Xml 
* @return Array Xml 
*/
if( ! function_exists('xml_loader_files') )
{
	function xml_loader_files($xml_name)
	{
		$xml_routes = public_path().'/xml/'.$xml_name.'.xml';
		
		if(File::exists($xml_routes))
		{
			$xml = simplexml_load_file($xml_routes);
			return $xml;		
		}
		else
		{
			echo "Fichier xml non trouvé";
		}
	}
}

/** 
* Helpers Pagination bootstrap boo-admin 
* @param Object LengthAwarePaginator 
* @return view : pagination-admin
*/

if( ! function_exists('paginationAdmin') )
{
	function paginationAdmin($lengthAwarePaginator)
	{
		return view('admin.pagination-admin',compact('lengthAwarePaginator'));
	}
}

//test session existe et include l'entete
function affichageHeader(){
	$membre = new Membre();
	$email = $membre->getEmail(session('login'));
	$TypeNature = $membre->getNature($email);

	if(session('login')==''){
		echo view('front.header-bar');
	}
	else{
		if($TypeNature == 0){
			echo view('front.header_CM');
		}
		if($TypeNature == 1){
			echo view('front.header_V');
		}
		if($TypeNature == 2){
			echo view('front.header_APL');
		}
		if($TypeNature == 3){
			echo view('front.header_AFA');
		}
	}
}
