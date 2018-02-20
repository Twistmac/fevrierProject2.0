<?php namespace App\Entite;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class produits extends Model {

    protected $table = 'produits';
    protected $fillable = ['IDPRODUIT', 'IDIMAGE', 'IDLOCALISATION', 'IDTYPEPRODUIT', 'NOM', 'DESCRIPTION', 
	'SURFACE', 'PRIX', 'TAUXMISENAVANT', 'ETATPRODUIT', 'IFRAME', 'SLUG', 'CREATED_AT', 'UPDATED_AT'];
	protected $primaryKey = "IDPRODUIT";
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';


    public function favoris(){
        return $this->belongsTo('App\favoris','idproduit');
    }

    public function getNomProduit($idproduit){
        $result = produits::where('idproduit',$idproduit)->get();
        foreach ($result as $res){
            return $res->NOM;
        }
    }

    public function getDescriptionProduit($idproduit){
        $result = produits::where('idproduit',$idproduit)->get();
        foreach ($result as $res){
            return $res->DESCRIPTION;
        }
    }

    public function getImage($idproduit){
        $result = produits::where('idproduit',$idproduit)->get();
        foreach ($result as $res){
            return $res->URLIMAGE;
        }
    }


    public function localisation()
    {
        return $this->belongsTo('App\Localisation');
    }

    public function queryprincipal()
    {
        $queryRaw =  DB::table('produits')
            ->select('produits.idproduit','produits.nom','produits.description','produits.prix','produits.surface','produits.slug','produits.iframe','localisations.cite','localisations.pays','localisations.adresse','optionproduits.ch','optionproduits.sdb','optionproduits.garage','optionproduits.parking','optionproduits.piscine','optionproduits.autres','images.urlimage1','images.urlimage2','images.urlimage3','typeproduits.libelle')
            ->join('localisations','localisations.idlocalisation','=','produits.localisation_id')
            ->join('optionproduits','optionproduits.produit_id','=','produits.idproduit')
            ->join('typeproduits','typeproduits.idtypeproduit','=','produits.typeproduit_id')
            ->join('images','images.id','=','produits.images_id');
        return $queryRaw;

    }

    public function queryLatestenregistred($default=null)
    {
        if(is_null($default))
            $default = 6;

        $objArray = array();
        $queryRaw = $this->queryprincipal();
        $queryvalue = $queryRaw->orderBy('produits.idproduit', 'desc')->limit($default)->get()->toArray();
        return $objArray = Produit::hydrate($queryvalue);
    }

    public function queryOnedetail($product_id)
    {
        $objArray = array();
        $queryRaw = $this->queryprincipal();
        $queryvalue = $queryRaw->where('produits.idproduit',$product_id)->get()->toArray();
        return $objArray = Produit::hydrate($queryvalue);
    }

    public function scopeGetone($query,$prod_id)
    {
        return $query->where('produits.idproduit',$prod_id)->first();
    }

    public function sortbyCategory($categorie,$paginate=null)
    {
        if(is_null($paginate))
            $paginate = 10;

        $objArray = array();
        $queryRaw = $this->queryprincipal();
        return $queryRaw->where('typeproduits.libelle',$categorie)->paginate(intval($paginate));
    }

    public function getNomAttribute($value)
    {
        return strtolower($value);
    }

    public function getPrixAttribute($value)
    {
        return 'A$ ' . number_format($value, 2, ',', ' ');
    }

    public function getChAttribute($value)
    {
        if(is_null($value))
            return "non défini";
        else
            return $value . ' lits' ;
    }

    public function getSdbAttribute($value)
    {
        if(!empty($value))
            return $value . ' douche';
        else
            return "non défini";
    }

    public function getGarageAttribute($value)
    {
        if(is_null($value))
            return "non défini";
        else
            return $value;
    }

    public function getSurfaceAttribute($value)
    {
        if(is_null($value))
            return "non défini";
        else
            return $value . ' m2';
    }

    public function getAdresseAttribute($value)
    {
        if(is_null($value))
            return "non défini";
        else
            return $value;
    }

    public function getParkingAttribute($value)
    {
        if($value)
            return "Oui";
        else
            return "Non";
    }

    public function getPiscineAttribute($value)
    {
        if(is_null($value))
            return "Non";
        else
            return $value;
    }

    public function getAutresAttribute($value)
    {
        if(!is_null($value))
        {
            $chaine = preg_split('/,/', $value);
            $value = '<ul class="property-single-features-list clearfix">';
            for($i=0;$i<count($chaine);$i++)
            {
                $value .= '<li>' . $chaine[$i] . '</li>';
            }
            $value .= '</ul>';
            return $value;
        }
        else
            return "<label>Aucun autre critère n'est mentionné</label>";
    }


    public static function createSlug($datas)
    {
        if(!empty($datas))
        {
            foreach($datas as $data)
            {
                $data->slug = strtolower($data->idproduit).'-'.Str::slug($data->nom);
            }
        }
        return $datas;
    }

}
