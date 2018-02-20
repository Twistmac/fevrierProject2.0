<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Inscriptionannule extends Model {

    /**
     * Generated
     */

    protected $table = 'inscriptionannule';
    protected $fillable = ['IDINSCRIPTIONANNULE', 'IDPERSONNEMORALE', 'IDPERSONNEPHYSIQUE', 'DATEINSCRIPTION', 'TYPEINSCRIPTION', 'UPDATED_AT', 'CREATED_AT'];
	protected $primaryKey = "IDINSCRIPTIONANNULE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
