<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Typeproduit extends Model {

    /**
     * Generated
     */

    protected $table = 'typeproduit';
    protected $fillable = ['IDTYPEPRODUIT', 'LIE', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "IDTYPEPRODUIT";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
