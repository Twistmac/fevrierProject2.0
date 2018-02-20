<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Etatpossessionproduit extends Model {

    /**
     * Generated
     */

    protected $table = 'etatpossessionproduit';
    protected $fillable = ['IDETATPOSSESSIONPRODUIT', 'LIBELLE', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "IDETATPOSSESSIONPRODUIT";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
