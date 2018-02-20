<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model {

    /**
     * Generated
     */

    protected $table = 'facture';
    protected $fillable = ['IDFACTURE', 'IDTYPEFACTURE', 'REFERENCE', 'DATECREATIONFACTURE', 'IDPAYEUR', 'IDPAYE', 'TYPEPAYEUR', 
	'TYPEPAYE', 'URLFICHIERFACTURE', 'DATEPAIEMENTFACTURE', 'UPDATED_AT', 'CREATED_AT'];
	protected $primaryKey = "IDFACTURE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
