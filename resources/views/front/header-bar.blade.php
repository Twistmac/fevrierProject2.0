<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-control" content="public">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Investir en Australie</title>
        <!-- Styles -->
        <link href="../../../fonts.googleapis.com/css178b.css?family=Montserrat:400,700|Poppins:400,600" rel="stylesheet">

        <!-- favicon and touch icons -->
        <link rel="shortcut icon" href="{{ link_img('favicon.png') }}">
       <!-- Bootstrap -->
        {!! plugin_css('assets/css/multirange') !!}
        {!! plugin_css('assets/css/owl.carousel') !!}
        {!! plugin_css('assets/css/owl.transitions') !!}
        {!! plugin_css('assets/css/owl.theme') !!}
        {!! plugin_css('plugins/font-awesome/css/font-awesome.min') !!}
        {!! plugin_css('plugins/slick/slick') !!}
        {!! plugin_css('plugins/slick-nav/slicknav') !!}
        {!! plugin_css('plugins/wow/animate') !!}
        {!! helper_css('bootstrap') !!}
        {!! helper_css('theme') !!}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/css/bootstrap-slider.min.css" rel="stylesheet" />
        {!! helper_css('head') !!}

        {!! plugin_css('/searchbar/assets/css/style') !!}

        <!-- {!! plugin_css('/searchbar/assets/css/style') !!} -->

        <!-- sylesheet css search-bar -->
        <link rel="stylesheet" href="{{asset('searchbar/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('searchbar/assets/css/fontello.css')}}">
        <link rel="stylesheet" href="{{asset('searchbar/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" href="{{asset('searchbar/assets/fonts/icon-7-stroke/css/helper.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('searchbar/assets/css/bootstrap-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('searchbar/assets/css/icheck.min_all.css')}}">
        <link rel="stylesheet" href="{{asset('searchbar/assets/css/price-range.css')}}">
        <link rel="stylesheet" href="{{asset('searchbar/assets/css/responsive.css')}}">
        <!-- <link rel="stylesheet" href="{{asset('searchbar/assets/css/style.css')}}"> -->



    </head>
    <body {!! (empty($body)) ? null : $body!!}>
        <div id="page-loader">
            <div class="loaders">
                <img src="{{ link_img('assets/images/loader/3.gif') }}" alt="First Loader">
            </div>
        </div>
        <header id="head">
            <div id="site-header-top" class="barreNoir">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="clearfix">
                                <p class="contanct">Appelez-nous: +61 00 000 000</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="clearfix">
                                <div class="language-in-header">
                                    <a href="{{social('googleplus.value')}}"><i class="{{social('googleplus.font')}}"></i></a>
                                </div>
                                <div class="language-in-header">
                                    <a href="{{social('linkedin.value')}}"><i class="{{social('linkedin.font')}}"></i></a>
                                </div>
                                <div class="language-in-header">
                                    <a href="{{social('twitter.value')}}"><i class="{{social('twitter.font')}}"></i></a>
                                </div>
                                <div class="language-in-header">
                                    <a href="{{social('facebook.value')}}"><i class="{{social('facebook.font')}}"></i></a>
                                </div>
                                <div class="language-in-header">
                                    <i class="fa fa-globe"></i>
                                    <label for="language-dropdown">Langue :</label>
                                    <select name="currency" id="language-dropdown">
                                        <option value="FRS"> &nbsp; Fr</option>
                                        <option value="ENG"> &nbsp; Eng</option>
                                    </select>
                                </div>
                                 <div class="currency-in-header">
                                    <i class="fa fa-sign-in"></i>
                                    <label for="currency-dropdown"> S'inscrire: </label>
                                    <select name="currency" id="currency-dropdown" onChange="location.href=''+this.options[this.selectedIndex].value;">
                                        <option value="#">En tant que</option>
                                        <option value="{{url('/')}}/inscription-membre">Membre</option>
                                        <option value="{{url('/')}}/seller">vendeur</option>
                                        <option value="{{url('/')}}/AFA">A.F.A</option>
                                        <option value="{{url('/')}}/acceptation-APL">A.P.L</option>
                                    </select>
                                </div>
                                <div class="currency-in-header">
                                    <i class="fa fa-mouse-pointer"></i>
                                    <label for="currency-dropdown"> <a href="{!! route('connexion') !!}">Connexion</a> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container top-menu" >
                <div class="row">
                    <div class="col-md-3" >
                        <figure id="site-logo" class="logo">
                            <a href="{{url("/")}}">
                                <img src="{{ link_img('assets/images/logo.png') }}" alt="Logo">
                            </a>
                        </figure>
                    </div>
                    <div class="col-md-6 col-sm-7 ">
                        <nav id="site-nav" class="nav navbar-default menuBtn">
                            <ul class="nav navbar-nav ">
                                <li>
                                    <a href="#">IMMOBILIER</a>
                                    <ul>
                                        <li>
                                            <a href="{{url('immobilier/residentiel')}}">Résidentiel</a>
                                        </li>
                                        <li>
                                            <a href="{{url('immobilier/foncier')}}">Foncier</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">BUSINESS</a>
                                    <ul>
                                        <li>
                                            <a href="{{url('business/industriel')}}">Industriel</a>
                                        </li>
                                        <li>
                                            <a href="{{url('business/commercial')}}">Commercial</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('front.services')}}">NOS SERVICES</a>
                                </li>
                                <li>
                                    <a href="{{route('blog')}}">BLOG</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3 col-sm-4">

                            <form class="navbar-form form-search searchMenu" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="q">
                                    <div class="input-group-btn">
                                        <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
            <!-- </nav> -->
        </header>
        <!-- content -->
