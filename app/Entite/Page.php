<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model {

    /**
     * Generated
     */

    protected $table = 'pages';
    protected $fillable = ['IDPAGE', 'LIBELLE', 'LIEN', 'PARAMETRES', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "IDPAGE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

    public function getSlug($pages)
    {
        if(!empty($pages))
            return $pages->slug = Str::slug($pages->libelle);
    }

}
