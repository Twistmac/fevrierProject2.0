<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Possessionproduit extends Model {

    /**
     * Generated
     */

    protected $table = 'possessionproduit';
    protected $fillable = ['IDPOSSESSIONPRODUIT', 'IDETATPOSSESSIONPRODUIT', 'IDPRODUIT', 'IDVENDEUR', 'UPDATED_AT', 'CREATED_AT'];
	protected $primaryKey = "IDPOSSESSIONPRODUIT";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
