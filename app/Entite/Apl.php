<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Apl extends Model {

    /**
     * Generated
     */

    protected $table = 'apl';
    protected $fillable = ['IDAPL', 'IDPERSONNEMORALE', 'LATITUDE', 'LONGITUDE', 'STATUTCOMPTE', 'DATECRETION', 'CONTRATURL', 
	'ETATCONTRAT', 'UPDATED_AT', 'CREATED_AT', 'NUMINSCRIPTION'];
	protected $primaryKey = "IDAPL";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
