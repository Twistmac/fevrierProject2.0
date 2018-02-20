<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Image;

class Blog extends Model
{
    protected $fillable = ['titre','contenu','images_id','tag','users_id','nblecture','statut','created_at','updated_at'];
    
    /** 
    *Fonction Relationship
    * @return 
    */
    public function image()
    {
    	return $this->hasMany('App\Image');
    }
    /** 
    *Fonction Truncage de texte
    * @return texte...
    */
    public static function trunque($str, $nb = 150)
    {
		if (strlen($str) > $nb) 
		{
			$str = substr($str, 0, $nb);
			$position_espace = strrpos($str, " ");
			$texte = substr($str, 0, $position_espace); 
			$str = $str."...";
		}
	return $str;
	}
	/** 
	*Fonction Query Builder getblogwithimage
	* @param default nbre de resultat
	* @return Object Collection Blog
	*/
	public function queryBlog()
	{
		//{try} $result =  $this->with('image')->where('statut','0')->orderBy('created_at','desc')->limit(5);
		//return $this->with('image');
		
		return DB::table('blogs')
				->select('blogs.id','blogs.titre','blogs.contenu','blogs.created_at','blogs.updated_at','blogs.comments_id','blogs.tag','blogs.nblecture','blogs.statut','images.urlimage1','images.type')
				->join('images','blogs.id','=','images.blog_id');
	}
	public function listblogwithimage($default=null,$paginate=null)
	{	
		$queryRaw = $this->queryBlog();
		if(is_null($default) OR is_null($paginate))
			$default = $paginate = 10; //limiter à 6 articles par page
		
		$queryvalue = $queryRaw->where('statut',0)->orderBy('blogs.created_at','desc')->limit($default)->paginate($paginate);
		return $queryvalue;
	}
	/** 
	*Fonction generer un slug personnalisé pour Bloh
	* @param titre
	* @return char Slug
	*/
	public static function slugBlog($titre,$id)
	{
		return "artcl".$id."-".Str::slug($titre);
	}
	/**
	* Fonction get detail article
	* @param slug
	* @return Object Collection Blog
	*/
	public function modelDetailArticle($article)
	{
		$queryRaw = $this->queryBlog();
		return $queryRaw->where('blogs.id',$article)->get()->toArray();
	}

	/** 
	* Fonction get article supprimer 
	* @param Object Blog
	* @return Object Blog where statut FALSE
	*/
	public function getdeleteblog()
	{
		$objArray = array();
		$queryRaw = $this->queryBlog();
		$queryvalue = $queryRaw->where('statut',1)->orderBy('blogs.created_at','desc')->limit($default)->paginate($paginate);
		return $queryvalue;
	}
	/**
	* Fonction getter Statut
	* @param getAttribute statut
	* @return 'Supprimé' / 'Disponible'
	*/
	public function getStatutAttribute($value)
	{
		if($value == '0')
			return '<span class="label label-success">Disponible</span>';
		else
			return '<span class="label label-warning">archivé</span>';
	}

	/** 
	* Fonction getters restauration pour statut 'Supprimé'
	* @param $value->statut string 
	* @return Object collection Blog
	*/
	public function restauration($value)
	{
		if($value->statut == '1')
			return '<a class="btn btn-primary" type="button" href="'.route("blog.restore",$value->id).'">Restaurer</a>';
		else return null;
	}
}
