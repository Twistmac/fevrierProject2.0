<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model {

    /**
     * Generated
     */

    protected $table = 'commentaire';
    protected $fillable = ['IDCOMMENTAIRE', 'LIBELLE', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "IDCOMMENTAIRE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
