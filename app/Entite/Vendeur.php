<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model {

    /**
     * Generated
     */

    protected $table = 'vendeur';
    protected $fillable = ['IDVENDEUR', 'IDPERSONNEPHYSIQUE', 'IDAFA', 'IDPERSONNEMORALE', 'STATUTCOMPTE', 
		'LIBELLETYPEVENDEUR', 'UPDATED_AT', 'CREATED_AT', 'NUMINSCRIPTION'];
	protected $primaryKey = "IDVENDEUR";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


}
