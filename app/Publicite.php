<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicite extends Model
{
	protected $fillable = ['id','nompage','lien','publicites','illustrationimg','created_at','updated_at'];

	/**
	* listes de tous les pages 
	* @param string $statut
	* @return Response
	*/
    public function getlistespages($statut=null)
    {
    	if( is_null($statut) )
    		return self::all();
    	else
    		return self::where('publicites',$statut)->get();
    }

    /**
    * Getter updated_at 
    * @param Date $value
    * @return Collection Object 
    */

    public function getUpdated_atAttribute($value)
    {
    	if( is_null($value) )
    		return date('d-m-Y');
    	else
    		return date('d-m-Y',strtotime($value));
    }
}
