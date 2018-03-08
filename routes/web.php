<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index')->name('acceuil');
//Route::get('/', function () {  return view('front.accueil');});
Route::get('/acceptation-APL',function () {  return view('acceptation-APL');});
Route::get('/subscriptionAPL','Service\InscriptionController@loadInscriptionAPL');
Route::post('/inscrire','Service\InscriptionController@inscrireForm');
Route::post('/verifieEmail','Service\InscriptionController@verifieEmail');
Route::get('/contratVerif','Service\InscriptionController@contratVerif');
Route::get('/signerContrat','Service\InscriptionController@signerContrat');
Route::post('/paiementLoadInterface','Service\InscriptionController@paiementLoadInterface');
Route::post('/payer','Service\PaiementController@makePaiementSubscription');
Route::get("/creatLoginMp",'Service\InscriptionController@creatLoginMp');

//route connexion
Route::get("/connexion",['as'=>'connexion',function(){
    if(session('login')==''){
        return view("connexion");
    }
    else{
        return redirect('/');
    }
}]);
////

Route::get("/inscription-membre",'Service\InscriptionController@loadInscriptionMembre');
Route::get("/seller",function(){ return view("seller"); });
Route::post("/checkConditionBeforeSubscription","Service\InscriptionController@checkConditionBeforeSubscription");
Route::get("/AFA",function(){ return view("AFA");});
Route::get('/authentification',['uses'=>'ConnexionController@auth','as'=>'authentification']);
Route::post('/authentification',['uses'=>'ConnexionController@auth','as'=>'authentification']);

//Deconnection
Route::get('/Deconnection',['as'=>'deconnection', function()
{
    session()->flush();
    return redirect()->route('connexion');
}]);

//
Route::get('/accueilMembre',['as'=>'accueilMembre', function()
{
    if(session('login')==''){
        return redirect()->route('ErrorSession');
    }
    else{
        return redirect()->route('home');
    }

}]);

//home
Route::get("/home",['as'=>'home', 'uses'=>'HomeController@acceuilMembre']);



Route::get('/acceuilAFA',['as'=>'acceuilAFA', function()
{
    if(session('login')==''){
        return redirect()->route('ErrorSession');
    }
    else{    return View::make('acceuilAFA');
    }
}]);
Route::get('/acceuilAPL',['as'=>'acceuilAPL', function()
{
    if(session('login')==''){
        return redirect()->route('ErrorSession');
    }
    else{    return View::make('acceuilAPL');
    }
}]);
Route::get('/Reconnexion',['as'=>'ErrorSession', function () {
    session(['errorConnexion'=>"Veuillez vous connecter s'il vous plait"]);
    return redirect()->route('connexion');
}]);
Route::get('/Dashboard-Client',['uses'=>'MembreController@dashboard','as'=>'dashboard']);
Route::get('/maj-membre',['as'=>'maj', 'uses'=>'MembreController@maj']);
Route::get('/mise-a-jour',['uses'=>'MembreController@modifierProfil','as'=>'modifierProfil']);
Route::post('/mise-a-jour',['uses'=>'MembreController@modifierProfil','as'=>'modifierProfil']);
Route::get('/favoris',['uses'=>'ProduitUserController@Favoris','as'=>'favoris']);
Route::get('/recherche-sauvegardees',['as'=>'recherche-sauvegardees','uses'=>'ProduitUserController@rechercheSauvegarder']);
Route::get('/encours_dachat',['as'=>'encours_dachat','uses'=>'ProduitUserController@encours']);
Route::get('/achetees_precedemment',['as'=>'achatPrec', 'uses'=>'ProduitUserController@achatPrec']);
Route::get('/compteAFA',['as'=>'dashboardAFA','uses'=>'Service\MembreController@dashboardAFA']);
//Route::get('/','HomeController@index');

Route::get('produit/{slug}','ProduitsController@details')->middleware('verification');;
Route::get('blog/detail/{slug}','BlogsController@detailsblog')->middleware('trustarticle');
Route::get('blog/',['as' => 'blog', 'uses' => 'BlogsController@listesblog']);

//residentiel
Route::get('immobilier/residentiel','ProduitsController@indexresidentiel');
Route::get('immobilier/{param}-{categorie}','ProduitsController@gestioncontenu')->where('param','[0-9]+'); //residentiel/{param}
Route::get('immobilier/foncier','ProduitsController@indexfoncier');

//foncier
Route::get('business/industriel','ProduitsController@indexindustriel');
Route::get('business/{param}-{categorie}','ProduitsController@gestioncontenu')->where('param','[0-9]+'); //foncier/{param}

Route::get('business/commercial','ProduitsController@indexcommercial');

// --------------------------------------------------------------------------------------------------------------------------------------------
//ADMIN
//Blog
// --------------------------------------------------------------------------------------------------------------------------------------------

Route::prefix('admin')->group(function () {
    Route::get('blog/new',['as' => 'blog.new','uses'=>'BlogsController@show']);
    Route::post('blog/store',['as' => 'blog.store','uses'=>'BlogsController@store']);
    Route::get('blog/listes',['as' => 'blog.all','uses' => 'BlogsController@showall']);
    Route::get('pages/',['as' => 'pages.all','uses' => 'PagesController@showStaticPage']);
    Route::get('pages/{slug}',['as' => 'pages.show','uses'=>'PagesController@show'])->where('slug','[a-z0-9\-]+'); //[a-z0-9\-]+
    Route::post('pages-update',['as' => 'pages.update','uses'=>'PagesController@update']);
    Route::get('blog/update/{slug}',['as' => 'blog.update','uses'=>'BlogsController@update'])->where('slug','[a-z0-9\-]+')->middleware('trustarticle');
    Route::post('blog/moteur-update',['as' => 'blog.moteur-update','uses'=>'BlogsController@updateMoteur']);
    Route::get('blog/delete/{slug}',['as' => 'blog.delete','uses' => 'BlogsController@delete'])->where('slug','[a-z0-9\-]+')->middleware('trustarticle');
    Route::get('blog/register',['as' => 'blog.showregistre', 'uses' => 'BlogsController@showregistre']);
    Route::get('blog/restore/{slug}',['as' => 'blog.restore','uses' => 'BlogsController@restorearticle'])->where('slug','[0-9\-]+')->middleware('trustarticle');
// login administrateur
    Route::get('auth', function(){ return view('admin.authentification');});
// profil Admin
    Route::get('profilAdmin', function(){ return view('admin.profilAdm');});
// statistique
    Route::get('stat', function(){ return view('admin.statistique');});

});

//Route vers page Services
Route::get('services',['as' => 'front.services','uses'=>'ServicesController@redirectServices']);
Route::post('search',['as' => 'front.search', 'uses' => 'SearchsController@searchGlobal']);
//Route listes des pages statiques
//Auth::routes();

/** route dans les produits */
Route::post('/saveRech',['as' => 'saveRecherche', 'uses'=> 'ProduitsController@saveRecherche']);
Route::post('/putFav',['as' => 'putFavoris', 'uses'=> 'ProduitsController@putFavoris']);

//Route recuperation API AgentPoint
Route::get('getapi', ['as' => 'get.api', 'uses' => 'ApiController@getdataPropertiesromApi']);
