<?php
/**
 * Created by PhpStorm.
 * User: Geek-Kim
 * Date: 21/11/2017
 * Time: 19:21
 */

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Entite\Localisation;

class GeolocalisationController extends Controller
{
    protected $cle = "AIzaSyC9Rj2LP78cThfZaXkxeUlDyNtYvU0um4M";

    public function checkIfPointIsInRadius($rayon,$latOrg,$longOrg,$listLocalisation){
        try{
            $url = 'http://maps.googleapis.com/maps/api/distancematrix/';
            $curl = curl_init();
            curl_setopt_array($curl , array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $url,
                CURLOPT_USERAGENT => 'Codular Sample cURL Request',
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => array(
                    origins => $latOrg.",".$longOrg,
                    destinations => $this->createDestinationParam($listLocalisation)
                )
            ));
            $rep = false;
            $json = curl_exec($curl);
            $rep = $this->getVerdic($rayon,$json);
            curl_close($curl);
            return $rep;
        }
        catch(Exceptio $error){
            throw $error;
        }
    }

    public function createDestinationParam($listLocalisation){
        $destination = "";
        for($i=0 ; $i<$listLocalisation.length ; $i++){
            $destination = $listLocalisation[$i]->LATITUDE.",".$listLocalisation[$i]->LONGITUDE;
            if($i != ($listLocalisation.length-1)){
                $destination += "|";
            }
        }
        return $destination;
    }

    public function getVerdic($rayon, $json){
        $returnJson = json_decode($json);
        var_dump($returnJson);
        $i = 0;
        $result = array();
        $intRayon = $this->getIntValueDistance($rayon);
        foreach($returnJson->{"rows"}->{"elements"}->{"distance"}->{"text"} as $distance){
            $intDistance = $this->getIntValueDistance($distance);
            if($intDistance<=$intRayon){
                $result[$i] =  true;
            }
            else{
                $result[$i] =  false;
            }
            $i++;
        }
        return $result;
    }

    public function getIntValueDistance($distance){
        $distance = ltrim($distance);
        $distance = str_replace("km","",$distance);
        return intval($distance);
    }

}