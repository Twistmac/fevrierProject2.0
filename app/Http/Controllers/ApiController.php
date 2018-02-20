<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Requests;
use GuzzleHttp\Message\Request as Apirequest;
use GuzzleHttp\Message\Response;

class ApiController extends Controller
{
    protected $token;
    protected $type;

    public function __construct()
    {
        //
    }

    /**
    * fonction générale recuperation produit depuis l'API
    * @param string $method
    * @param string $url_token
    * @return application/json Array data
    */
    public function retrieveDataFromApi($method,$url_token)
    {
        $client = new Client([
            'headers' => ['content-type' => 'application/json' , 'Accept' => 'application/json']
        ]);
        $response = $client->request($method,$url_token);
        $data = $response->getBody();
        $api_data = json_decode($data);
        return $api_data->results;
    }

    /**
    * fonction recuperation des données par type residentiel de produit via API AgentPoint
    * @param string Type : Type de produit
    * @return application/json data
    */
    public function getdataPropertiesromApi()
    {
    	$response_type = $this->retrieveDataFromApi('GET','http://api2.agentaccount.com:80/properties?token=827f01934ab7e1f007eda5b79141aa28f6623d61');
        dd($response_type);
    }
}
