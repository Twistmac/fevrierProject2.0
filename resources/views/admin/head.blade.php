<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html>
<!--<![endif]-->

<head>
<meta charset="utf-8">
<title>Gestion des Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
{!! plugin_css('admin/assets/css/lib/bootstrap') !!}
{!! plugin_css('admin/assets/css/lib/bootstrap-responsive') !!}
{!! plugin_css('admin/assets/css/boo-extension') !!}
{!! plugin_css('admin/assets/css/boo') !!}
{!! plugin_css('admin/assets/css/style') !!}
{!! plugin_css('admin/assets/css/boo-coloring') !!}
{!! plugin_css('admin/assets/css/boo-utility') !!}

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="assets/plugins/selectivizr/selectivizr-min.js"></script>
    <script src="assets/plugins/flot/excanvas.min.js"></script>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="{{link_img('admin/assets/ico/favicon.ico')}}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{link_img('admin/assets/ico/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{link_img('admin/assets/ico/apple-touch-icon-114-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{link_img('admin/assets/ico/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{link_img('admin/assets/ico/apple-touch-icon-57-precomposed.png')}}">
</head>

<body class="sidebar-left ">
<div class="page-container">
    <div id="header-container">
        <div id="header">
            <div class="navbar navbar-inverse navbar-fixed-top">
                      <div class="navbar-inner">
                          <div class="container-fluid">
                              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>
                              <a class="brand" href="#">
                                  <img src="{{link_img('admin/assets/img/logo.png')}}" width="50" height="50">
                              </a>
                              <div class="search-global">
                                  <input id="globalSearch" class="search search-query input-medium" type="search">
                                  <a class="search-button" href="#"><i class="fontello-icon-search-5"></i></a>
                              </div>
                              <div class="nav-collapse collapse">
                                  <ul class="nav user-menu visible-desktop">
                                      <li>
                                          <a class="btn-glyph fontello-icon-edit tip-bc" href="#" title="Messages"><span class="badge badge-important">8</span></a>
                                      </li>
                                      <li>
                                          <a class="btn-glyph fontello-icon-mail-1 tip-bc" href="#" title="Emails"></a>
                                      </li>
                                      <li>
                                          <a class="btn-glyph fontello-icon-lifebuoy tip-bc" href="#" title="Support"><span class="badge badge-important">4</span></a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
            <!-- // navbar -->            
            <div class="header-drawer">
                <div class="mobile-nav text-center visible-phone"> <a href="javascript:void(0);" class="mobile-btn" data-toggle="collapse" data-target=".sidebar"><i class="aweso-icon-chevron-down"></i> Components</a> </div>
                <!-- // Resposive navigation -->
                <div class="breadcrumbs-nav hidden-phone">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="javascript:void(0);"><i class="fontello-icon-home f12"></i> Dashboard</a> <span class="divider">/</span></li>
                        <li class="active">Boo Admin </li>
                    </ul>
                </div>
                <!-- // breadcrumbs --> 
            </div>
            <!-- // drawer --> 
        </div>
    </div>
    <!-- // header-container -->
    
    <div id="main-container">
         <div id="main-sidebar" class="sidebar sidebar-inverse">
                  <div class="sidebar-item">
                      <div class="media profile">
                          <div class="media-thumb media-left thumb-bordereb">
                              <a class="img-shadow" href="detailAdministrateur.html">
                                  <img class="thumb" src="{{link_img('admin/assets/img/profil.png')}}">
                              </a>
                          </div>
                          <div class="media-body">
                              <h5 class="media-heading">RAFALIMANANA Njaka <small>as Administrateur</small></h5>
                              <p class="data">Dernier acces: 27 juin 2017</p>
                          </div>
                      </div>
                  </div>
                  <ul id="mainSideMenu" class="nav nav-list nav-side">
                    <li class="accordion-group">
                        <div class="accordion-heading">
                            <a href="detailAdministrateur.html" data-parent="" class="accordion-toggle"><i class="fontello-icon-user-4"></i> Mon profil</a>
                        </div>
                    </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="statistique.html" data-parent="#mainSideMenu" class="accordion-toggle"><i class="fontello-icon-chart"></i> Statistique</a>
                          </div>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="gestionUtilisateurGeneral.html" data-parent="#mainSideMenu" class="accordion-toggle"><i class="fontello-icon-users-1"></i> Gestion utilisateurs</a>
                          </div>
                          <ul class="accordion-content nav nav-list" id="accMembres">
                              <li>
                                  <a href="gestionUtilisateurAFA.html"> <i class="fontello-icon-right-dir"></i>AFA</a>
                              </li>
                              <li>
                                  <a href="gestionUtilisateurAPL.html"> <i class="fontello-icon-right-dir"></i>APL</a>
                              </li>
                              <li>
                                  <a href="gestionUtilisateurClient.html"> <i class="fontello-icon-right-dir"></i>Membres</a>
                              </li>
                              <li>
                                  <a href="gestionUtilisateurVendeurPromoteur.html"> <i class="fontello-icon-right-dir"></i>Vendeurs promoteurs</a>
                              </li>
                              <li>
                                  <a href="gestionUtilisateurVendeurConstructeur.html"> <i class="fontello-icon-right-dir"></i>Vendeurs constructeurs</a>
                              </li>
                              <li>
                                  <a href="gestionInscriptionAnnule.html"> <i class="fontello-icon-right-dir"></i>Inscription annulée</a>
                              </li>
                              <li>
                                  <a href="gestionUtilisateurAcces.html"> <i class="fontello-icon-right-dir"></i>Droit d'accés utilisateurs</a>
                              </li>
                              <li>
                                  <a href="gestionUtilisateurNewsletter.html"> <i class="fontello-icon-right-dir"></i>Membres dans newsletter</a>
                              </li>
                              <li>
                                  <a href="gestionUtilisateurPartageDonnee.html"> <i class="fontello-icon-right-dir"></i>Membres acceptant de partager leur données</a>
                              </li>
                          </ul>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="gestionProduitResidentiel.html" data-parent="#mainSideMenu"  class="accordion-toggle"><i class="fontello-icon-basket-1"></i> Gestion produits en vente</a>
                          </div>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="gestionProduitVendus.html" data-parent="#mainSideMenu"  class="accordion-toggle"><i class="fontello-icon-basket-1"></i> Gestion produits vendus</a>
                          </div>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="gestionPublicite.html" data-parent="#mainSideMenu"  class="accordion-toggle"><i class="fontello-icon-credit-card"></i> Gestion des publicités</a>
                          </div>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="gestionMessagePreenregistre.html" data-parent="#mainSideMenu"  class="accordion-toggle"><i class="fontello-icon-mail-1"></i> Gestion des messages préenregistrés</a>
                          </div>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="gestionEmailPreenregistre.html" data-parent="#mainSideMenu"  class="accordion-toggle"><i class="fontello-icon-mail-alt"></i> Gestion des emails préenregistrés</a>
                          </div>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="{{route('blog.new')}}" data-parent="#mainSideMenu" class="accordion-toggle"><i class="fontello-icon-users-1"></i> Gestion du Blog</a>
                          </div>
                          <ul class="accordion-content nav nav-list" id="accMembres">
                              <li>
                                  <a href="{{route('blog.all')}}"> <i class="fontello-icon-right-dir"></i>Listes des blogs</a>
                              </li>
                              <li>
                                  <a href="{{route('blog.new')}}"> <i class="fontello-icon-right-dir"></i>Ajouter un article</a>
                              </li>
                               <li>
                                  <a href="{{route('blog.showregistre')}}"> <i class="fontello-icon-right-dir"></i>Registre des articles</a>
                              </li>
                          </ul>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="#" data-parent="#mainSideMenu" class="accordion-toggle"><i class="fontello-icon-tools"></i> Réglages</a>
                          </div>
                          <ul class="accordion-content nav nav-list" id="accRéglages">
                            <li>
                                <a href="gestionSiteInformation.html"> <i class="fontello-icon-right-dir"></i>Information du site</a>
                            </li>
                            <li>
                                <a href="dragAndDrop.html"> <i class="fontello-icon-right-dir"></i> Emplacement des widgets </a>
                            </li>
                              <li>
                                  <a href="gestionPageStatique.html"> <i class="fontello-icon-right-dir"></i> Page statique </a>
                              </li>
                              <li>
                                  <a href="gestionPageSlider.html"> <i class="fontello-icon-right-dir"></i> Slider </a>
                              </li>
                          </ul>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="gestionFacture.html" data-parent="#mainSideMenu"  class="accordion-toggle"><i class="fontello-icon-credit-card"></i> Factures</a>
                          </div>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="gestionMessageListe.html" data-parent="#mainSideMenu" class="accordion-toggle"><i class="fontello-icon-mail-4"></i> Messages</a>
                          </div>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="gestionDesPagesInformations.html" data-parent="#mainSideMenu" class="accordion-toggle"><i class="fontello-icon-edit"></i> Gestion des pages d'informations</a>
                          </div>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="#" data-parent="#mainSideMenu" class="accordion-toggle"><i class="fontello-icon-left-1"></i>Se deconnecter</a>
                          </div>
                      </li>
                  </ul>
                  <div class="sidebar-item"></div>
              </div>
        <!-- // sidebar -->
        
    </div>