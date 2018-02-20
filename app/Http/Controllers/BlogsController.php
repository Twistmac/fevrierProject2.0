<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Image;
use Illuminate\Support\Facades\Input;

class BlogsController extends Controller
{
	private $blog;

	public function __construct()
	{
		$this->blog = new Blog();
	}

	/** 
    *Fonction qui recupere les details d'un Blog
	* @param slug Article 
	* @return Object Collection type Blog
	*/

    public function detailsblog()
    {
    	$id_blog = \Request::get('blog_id');
    	$collection = $this->blog->modelDetailArticle($id_blog);
        $this->incrementationlecture($id_blog);
    	return view('front.detailblog',compact('collection'));
    }

    /**
    * Fonction incrementation nombre de lecture 
    * @param nblecture String 
    */
    public function incrementationlecture($idblog)
    {
        $last_value = Blog::find($idblog)->first();
        $value_update = intval($last_value->nblecture)+1;
        $last_value->nblecture = $value_update;
        $last_value->save();
    }

    /** 
    * Fonction qui liste les Artciles dans un blog suivant pagination
    * @return Object Collection Blog
    */

    public function listesblog()
    {
    	$listesblog = $this->blog->listblogwithimage(null,6);
    	foreach($listesblog as $listes)
        {
            $listes->slug = Blog::slugBlog($listes->titre,$listes->id);
            $listes->contenu = Blog::trunque($listes->contenu,150);
        }
        return view('front.listesblogs',compact('listesblog'));	
    }

    /** 
    * Fonction Show Gestion des blog 
    * @param Route 
    */
    public function show()
    {
        return view('admin.blogshow');
    }

    /** 
    * Fonction ajout nouveaux Blogs
    * @param [ ]
    * @return create.blog
    */
    public function store(Request $request)
    {
        if($request->file('file'))
        {
            $this->validate($request, ['file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
            $image = $request->file('file');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']); 
        }
        if($request->post('link')) 
        {
            Blog::create([
                'titre' => $request->post('titre'),
                'contenu' => $request->post('lien') .'<br>'. $request->post('contenu'),
                'created_at' =>  date("Y-m-d H:i:s")
            ]);
            $blog_object = Blog::where('titre',$request->post('titre'))->first(); //urlimage1 & blog_id
        }
        else
        {
            Blog::create([
                'titre' => $request->post('blog_titre'),
                'contenu' => $request->post('blog_paragraphe'),
                'tag' => $request->post('metaArticleKeywords'),
                'created_at' =>  date("Y-m-d H:i:s")
            ]);
            $blog_object = Blog::where('titre',$request->post('blog_titre'))->first(); //urlimage1 & blog_id
        }
      
        Image::create([
            'urlimage1' => $input['imagename'],
            'type' => 'Blog',
            'blog_id' => intval($blog_object->id)
        ]);
        return back()->with('success',"L'article a été deployé avec succés");
    }
    /** 
    * Fonction get alls articles Blog
    * @return Object Collection type Blog
    */
    public function showall()
    {
        $listes_blog = $this->blog->listblogwithimage();
        foreach($listes_blog as $listes)
        {
            $listes->slug = Blog::slugBlog($listes->titre,$listes->id);
            $listes->contenu = Blog::trunque($listes->contenu,70);
        }
        return view('admin.allblogs',compact('listes_blog'));  
    }

    /**
    * Function View update Un Blog 
    * @param string Slug du produit
    * @return Object Collection Blog 
    */
    public function update($slug)
    {
        $id_blog = \Request::get('blog_id');
        $resultat = $this->blog->modelDetailArticle($id_blog);
        return view('admin.update-blog',compact('resultat'));
    }


    /** 
    * Fonction moteur Controller update blog
    * @param Request post 
    * @return update Object Collection Blog
    */
    public function updateMoteur(Request $request)
    {
        //get Request::all() && get blog with Query
        $blog_updated = $request->post();//array
        $last_blog = Blog::where('titre',$request->post('blog_titre'))->firstOrFail();//Object
        $last_blog = json_decode(json_encode($last_blog),true);//array
        //parcourir tableau et comparer avec Request::post()
        unset($blog_updated['_token']);
        //renommer les keys
        $blog_updated = [
            'titre' => $blog_updated['blog_titre'],
            'contenu' => $blog_updated['blog_paragraphe'],
            'tag' => $blog_updated['metaArticleKeywords']
        ];
        $modification = array_diff($blog_updated,$last_blog);
        unset($modification['blog_titre'],$modification['blog_paragraphe'],$modification['metaArticleKeywords']);
       //if $modification NOT NULL : require update
        if(!empty($modification))
        {  
            foreach ($modification as $key => $value) 
            {
               Blog::where('id',$last_blog['id'])->update([$key => $value]);
            }
            //message flash
            return back()->with('success',"La modification a été enregistrée");
        }
        else
        {
         //if Request::post() FALSE
                // message flash 'Aucun modifiacation'
           return back()->with('success',"Aucune modification n'a été effectuée");
        }

    }
    /**
    * Fonction suppression Blog
    * @param Object Request
    * @return null 
    */

    public function delete(Request $request)
    {
        $id_blog = \Request::get('blog_id');
        if(is_int($id_blog))
        {
            $delete = Blog::find($id_blog);
            $delete->statut = 1;
            $delete->save();
        }
        return back()->with('success',"l'article a été archivé avec succés");
    }

    /**
    * Fonction viue de la registre des blogs 
    * @return Object collection Blog
    */
    public function showregistre()
    {
       $query = $this->blog->queryBlog();
       $result = $query->orderBy('blogs.created_at','desc')->get();
       foreach ($result as $value) {
           $value->restore = $this->blog->restauration($value);
           $value->statut = $this->blog->getStatutAttribute($value->statut);
       }
        return view('admin.registre',compact('result'));
    }
    
    /** 
    * Fonction de recuperation d'un article supprimer
    * @param string : id article
    * @return null
    */
    public function restorearticle($id)
    {
        $restore = Blog::where('id',$id)->get();
        foreach ($restore as $value) {
            $value->statut = '0';
            $value->save();
        }
        return back()->with('success',"L'article a été restoré avec success");
    }
}
