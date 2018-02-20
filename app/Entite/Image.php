<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

    /**
     * Generated
     */

    protected $table = 'images';
    protected $fillable = ['IDIMAGE', 'IDBLOG', 'URLIMAGE1', 'URLIMAGE2', 'URLIMAGE3', 'TYPEIMAGE', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "IDIMAGE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

    public function Blog()
    {
        return $this->hasOne('App\Entite\Blog');
    }

}
