<?php

namespace App\Http\Controllers;
use App\Entite\Blog;

class BlogController extends Controller
{
    public function get($id){
        return Blog::find($id);
    }

    public function create($idAdmin,$idCommentaire,$titre,$contenu,$tag){
        $blog = new Blog;
        $blog->IDADMIN = $idAdmin;
        $blog->IDCOMMENTAIRE = $idCommentaire;
        $blog->TITRE = $titre;
        $blog->CONTENU = $contenu;
        $blog->TAG = $tag;
        $blog->save();
        return $blog;
    }

    public function update($id,$idAdmin,$idCommentaire,$titre,$contenu,$tag){
        $blog = $this->get($id);
        $blog->IDADMIN = $idAdmin;
        $blog->IDCOMMENTAIRE = $idCommentaire;
        $blog->TITRE = $titre;
        $blog->CONTENU = $contenu;
        $blog->TAG = $tag;
        $blog->save();
        return $blog;
    }

    public function getAll(){
        return Blog::all();
    }

    public function delete($id){
        $blog = $this->get($id);
        $blog->delete();
    }

}
