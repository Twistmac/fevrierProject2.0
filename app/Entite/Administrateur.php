<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model {

    /**
     * Generated
     */

    protected $table = 'administrateur';
    protected $fillable = ['IDADMIN', 'IDPERSONNEPHYSIQUE', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "IDADMIN";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
