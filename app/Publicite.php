<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicite extends Model
{
	protected $fillable = ['type','libelle','codecontenu','created_at','updated_at'];
    
	/**
	* fonction get all publicites 
	*/
    public function getallPublicite()
    {
    	return self::all();
    }

    /**
    * fonction get publicite selon page 
    * @param string $type
    * @return Collection Object Publicite
    */
    public function getpubBy($type)
    {
    	return self::where('type',$type)->first();
    }

}
