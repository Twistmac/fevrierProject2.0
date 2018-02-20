<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Infocompte extends Model {

    /**
     * Generated
     */

    protected $table = 'infocompte';
    protected $fillable = ['IDINFOCOMPTE', 'LIBELLE', 'ETATINSCRIPTION', 'DROITINSCRIPTION', 'CPCPOURCENTAGE', 'CCVMINPOURCENTAGE', 
	'CCVMAJPOURCENTAGE', 'CCVSEUIL', 'UPDATED_AT', 'CREATED_AT'];
	protected $primaryKey = "IDINFOCOMPTE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
