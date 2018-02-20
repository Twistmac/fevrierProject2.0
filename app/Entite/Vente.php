<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model {

    /**
     * Generated
     */

    protected $table = 'vente';
    protected $fillable = ['IDVENTE', 'IDVENDEUR', 'IDMEMBRE', 'IDPRODUIT', 'DATEDEBUTTRANSACTION', 'DATEFINTRANSACTION', 
	'VALEURCCV', 'ETATPAIEMENTCCV', 'DATEPAIEMENTCCV', 'VALEURCPC', 'ETATPAIEMENTCPC', 'DATEPAIEMENTCPC', 'ETATTRANSACTION', 
	'DERNIERETAPETRANSACTION', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "IDVENTE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
