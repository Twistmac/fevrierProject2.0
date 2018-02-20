<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Listutilisateur extends Model {

    /**
     * Generated
     */

    protected $table = 'listutilisateur';
    protected $fillable = ['IDUTILISATEUR', 'IDPERSONNEPHYSIQUE', 'LIBELLE', 'DROIT', 'DATECREATION', 'UPDATED_AT', 'CREATED_AT'];
	protected $primaryKey = "IDUTILISATEUR";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

}
