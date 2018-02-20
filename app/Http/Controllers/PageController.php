<?php

namespace App\Http\Controllers;
use App\Entite\Page;

class PageController extends Controller
{
    public function get($id){
        return Page::find($id);
    }

    public function create($libelle,$lien,$parametres){
        $page = new Page;
        $page->LIBELLE = $libelle;
        $page->LIEN = $lien;
        $page->PARAMETRES = $parametres;
        $page->save();
        return $page;
    }

    public function update($id,$libelle,$lien,$parametres){
        $page = $this->get($id);
        $page->LIBELLE = $libelle;
        $page->LIEN = $lien;
        $page->PARAMETRES = $parametres;
        $page->save();
        return $page;
    }

    public function getAll(){
        return Page::all();
    }

    public function delete($id){
        $page = $this->get($id);
        $page->delete();
    }

}
