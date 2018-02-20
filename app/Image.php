<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $fillable = ['urlimage1','urlimage2','urlimage3','type','blog_id','created_at','updated_at'];

	/** Fonction Relationship
	* @return
	*/
     public function blog()
    {
    	return $this->belongsTo('App\Blog')->withDefault();;
    }
    
}
