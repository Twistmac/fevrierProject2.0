<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Typefacture extends Model {

    /**
     * Generated
     */

    protected $table = 'typefacture';
    protected $fillable = ['IDTYPEFACTURE', 'LIBELLE', 'UPDATED_AT', 'CREATED_AT'];
	protected $primaryKey = "IDTYPEFACTURE";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
