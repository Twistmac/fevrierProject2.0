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
<title>IEA-Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
{!! plugin_css('admin/css/lib/bootstrap') !!}
{!! plugin_css('admin/css/lib/bootstrap-responsive') !!}
{!! plugin_css('admin/css/boo-extension') !!}
{!! plugin_css('admin/css/boo') !!}
{!! plugin_css('admin/css/style') !!}
{!! plugin_css('admin/css/boo-coloring') !!}
{!! plugin_css('admin/css/boo-utility') !!}

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="assets/plugins/selectivizr/selectivizr-min.js"></script>
    <script src="assets/plugins/flot/excanvas.min.js"></script>
<![endif]-->

{!! helper_js('admin/amcharts/amcharts') !!}
{!! helper_js('admin/amcharts/xy') !!}
{!! helper_js('admin/amcharts/funnel') !!}
{!! helper_js('admin/amcharts/pie') !!}
{!! helper_js('admin/amcharts/serial') !!}
{!! helper_js('admin/amcharts/graphe') !!}
{!! helper_js('admin/amcharts/gantt') !!}
{!! helper_js('admin/amcharts/gauge') !!}
{!! helper_js('admin/amcharts/radar') !!}

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="{{link_img('assets/images/favicon.png')}}">
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
                              <!-- <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button> -->
                              <a class="brand" href="#">
                                  <img src="{{link_img('admin/img/logo.png')}}" width="100" height="50">
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
                <div class="mobile-nav text-center visible-phone"> <a href="javascript:void(0);" class="mobile-btn" data-toggle="collapse" data-target=".sidebar"><i class="aweso-icon-chevron-down"></i> Menu</a> </div>
                <!-- // Resposive navigation -->
                <div class="breadcrumbs-nav hidden-phone">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="javascript:void(0);"><i class="fontello-icon-home f12"></i> Dashboard</a> <span class="divider">/</span></li>
                        <li class="active">Profil administrateur </li>
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
                              <a class="img-shadow" href="{{url('admin/profilAdmin')}}">
                                  <img class="thumb" src="{{link_img('admin/img/'. Auth::user()->urlimage)}}">
                              </a>
                          </div>
                          <div class="media-body">
                              <h5 class="media-heading">{{ Auth::user()->firstname . ' ' . Auth::user()->name }}</h5>
                              <p class="data">Dernière modif : {{ date('d/m/Y',strtotime(Auth::user()->updated_at))}}</p>
                          </div>
                      </div>
                  </div>
                  <ul id="mainSideMenu" class="nav nav-list nav-side">
                    <li class="accordion-group">
                        <div class="accordion-heading">
                            <a href="{{url('admin/profilAdmin')}}" data-parent="" class="accordion-toggle"><i class="fontello-icon-user-4"></i> Mon profil</a>
                        </div>
                    </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="{{url('admin/home')}}" data-parent="#mainSideMenu" class="accordion-toggle"><i class="fontello-icon-chart"></i> Statistique</a>
                          </div>
                      </li>
                      <li class="accordion-group">
                          <div class="accordion-heading">
                              <a href="#accMembres" data-parent="#mainSideMenu"  data-toggle="collapse" class="accordion-toggle">
                                <i class="fontello-icon-users-1"></i>
                                <i class="chevron fontello-icon-right-open-3"></i>
                                Parties Prenantes
                              </a>
                          </div>
                          <ul class="accordion-content nav nav-list collapse" id="accMembres">
                            <li>
                                <a href="{{url('admin/users')}}"> <i class="fontello-icon-right-dir"></i>Tous</a>
                            </li>
                              <li>
                                  <a href="{{url('admin/sellers')}}"> <i class="fontello-icon-right-dir"></i>Vendeurs</a>
                              </li>
                              <li>
                                  <a href="#"> <i class="fontello-icon-right-dir"></i>AFA</a>
                              </li>
                              <li>
                                  <a href="#l"> <i class="fontello-icon-right-dir"></i>APL</a>
                              </li>
                              <li>
                                  <a href="gestionUtilisateurVendeurPromoteur.html"> <i class="fontello-icon-right-dir"></i>Visiteurs Membres</a>
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
                              <a href="{{route('registre.publicite')}}" data-parent="#mainSideMenu"  class="accordion-toggle"><i class="fontello-icon-credit-card"></i> Gestion des publicités</a>
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
                                  <a href="{{ route('pages.all') }}"> <i class="fontello-icon-right-dir"></i> Page statique </a>
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
