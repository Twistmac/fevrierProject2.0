<?php

namespace App\Http\Controllers;
use App\Entite\Image;

class ImageController extends Controller
{
    public function get($id){
        return Image::find($id);
    }

    public function create($idblog,$urlImage1,$urlImage2,$urlImage3,$typeImage){
        $image = new Image;
        $image->IDBLOG = $idblog;
        $image->URLIMAGE1 = $urlImage1;
        $image->URLIMAGE2 = $urlImage2;
        $image->URLIMAGE3 = $urlImage3;
        $image->TYPEIMAGE = $typeImage;
        $image->save();
        return $image;
    }

    public function update($id,$idblog,$urlImage1,$urlImage2,$urlImage3,$typeImage){
        $image = $this->get($id);
        $image->IDBLOG = $idblog;
        $image->URLIMAGE1 = $urlImage1;
        $image->URLIMAGE2 = $urlImage2;
        $image->URLIMAGE3 = $urlImage3;
        $image->TYPEIMAGE = $typeImage;
        $image->save();
        return $image;
    }

    public function getAll(){
        return Image::all();
    }

    public function delete($id){
        $image = $this->get($id);
        $image->delete();
    }

}
