<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Produit extends Model
{
	protected $appends = ['nom','prix','ch','sdb','garage','slug'];

	public function localisation()
	{
		return $this->belongsTo('App\Localisation','localisation_id','idlocalisation');
	}
	/**
	* Fonction Query Builder produit recemment enregistres
	* @return Object produit
	*/
	public function queryprincipal()
	{
		//$product = Produit::where('localisation_id','1')->first();
        //dd( $product->localisation()->get() );

		$queryRaw =  DB::table('produits')
				->select('produits.idproduit','produits.nom','produits.description','produits.prix','produits.surface','produits.slug','produits.iframe','localisations.cite','localisations.pays','localisations.adresse','optionproduits.ch','optionproduits.sdb','optionproduits.garage','optionproduits.parking','optionproduits.piscine','optionproduits.autres','images.urlimage1','images.urlimage2','images.urlimage3','typeproduits.libelle')
				->join('localisations','localisations.idlocalisation','=','produits.localisation_id')
				->join('optionproduits','optionproduits.produit_id','=','produits.idproduit')
				->join('typeproduits','typeproduits.idtypeproduit','=','produits.typeproduit_id')
				->join('images','images.id','=','produits.images_id');
		return $queryRaw;
	}
	/**
	* Fonction get derniers enregistrements
	* @return Object Collection Produit
	*/
	public function queryLatestenregistred($default=null)
	{
		if(is_null($default))
			$default = 6;
		
		$objArray = array();
		$queryRaw = $this->queryprincipal();
		$queryvalue = $queryRaw->orderBy('produits.idproduit', 'desc')->limit($default)->get()->toArray();
		return $objArray = Produit::hydrate($queryvalue);
	}
	/**
	* Fonction getone detail produit
	* @return Object Collection Produit
	*/
	public function queryOnedetail($product_id)
	{
		$objArray = array();
		$queryRaw = $this->queryprincipal();
		$queryvalue = $queryRaw->where('produits.idproduit',$product_id)->get()->toArray();
		return $objArray = Produit::hydrate($queryvalue);
	}
	/**
	* Fonction scopeGetone
	* @param $query
	* @return Object Produit
	*/
	public function scopeGetone($query,$prod_id)
	{
		 return $query->where('produits.idproduit',$prod_id)->first();
	}
	/** Fonction listes allproducts trie par categorie
	* @param Categorie (résidentiel,foncier,industriel,commercial)
	* @return Object Collection produits
	*/
	public function sortbyCategory($categorie,$paginate=null)
	{
		if(is_null($paginate))
			$paginate = 10;

		$objArray = array();	
		$queryRaw = $this->queryprincipal();
		return $queryRaw->where('typeproduits.libelle',$categorie)->paginate(intval($paginate));
	}

	 /**
    * Query compter produits de chaque TypeProduits
    * @param integer idtypeproduit
    * @return Collection Object Typeproduit
    */
    public function queryCountTypeproduit($idtype)
    {
        return DB::table('typeproduits')->select('typeproduits.libelle')
        								->join('produits','typeproduits.idtypeproduit','=','produits.typeproduit_id')
        								->where('typeproduits.idtypeproduit',$idtype)->count();
    }

    /**
	* Fonction compter produits de chaque typeproduit
	* @param null
	* @return Collection Object TypeProduit
	*/
	public function countProductbyType()
	{
		$getalltypeproduit = DB::table('typeproduits')->get();

		foreach ($getalltypeproduit as $key => $gets)
		{
			$results[$key]['libelle'] = $gets->libelle;
			$results[$key]['count'] = $this->queryCountTypeproduit($gets->idtypeproduit);
		}
		return $results;
	}

	/**
	* Fonction getters et setters
	* @param $value 
	* @return le nom de colonne
	*/
	public function getNomAttribute($value)
	{
    	return strtolower($value);
	}
	public function getPrixAttribute($value)
	{
		return 'A$ ' . number_format($value, 2, ',', ' ');
	}
	public function getChAttribute($value)
	{
		if(is_null($value))
			return "non défini";
		else
			return $value . ' lits' ;
	}
	public function getSdbAttribute($value)
	{
		if(!empty($value))
			return $value . ' douche';
		else
			return "non défini";
	}
	public function getGarageAttribute($value)
	{
		if(is_null($value))
			return "non défini";
		else
			return $value;
	}
	public function getSurfaceAttribute($value)
	{
		if(is_null($value))
			return "non défini";
		else
			return $value . ' m2';
	}
	public function getAdresseAttribute($value)
	{
		if(is_null($value))
			return "non défini";
		else
			return $value;
	}
	public function getParkingAttribute($value)
	{
		if($value)
			return "Oui";
		else
			return "Non";
	}
	public function getPiscineAttribute($value)
	{
		if(is_null($value))
			return "Non";
		else
			return $value;
	}
	public function getAutresAttribute($value)
	{
		if(!is_null($value))
		{
			$chaine = preg_split('/,/', $value);
			$value = '<ul class="property-single-features-list clearfix">';
			for($i=0;$i<count($chaine);$i++)
			{
				$value .= '<li>' . $chaine[$i] . '</li>';
			}
			$value .= '</ul>';
			return $value;
		}
		else
			return "<label>Aucun autre critère n'est mentionné</label>";
	}
	/**
     * fonction qui genere un slug
     * @param Object produit
     * @return \Illuminate\Http\Response
     */
	public static function createSlug($datas)
	{
		if(!empty($datas))
		{
			foreach($datas as $data)
			{
				$data->slug = strtolower($data->idproduit).'-'.Str::slug($data->nom);
			}
		}
		return $datas;
	}
}

