<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    protected $fillable = ['libelle','lien','parametres'];

    public function getSlug($pages)
    {
    	if(!empty($pages))
    		return $pages->slug = Str::slug($pages->libelle);
    }
}
