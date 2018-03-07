<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicite extends Model
{
	protected $fillable = ['type','libelle','codecontenu','created_at','updated_at'];
    //

    public function getallPublicite()
    {
    	return self::all();
    }
}
