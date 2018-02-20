<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Investir en Australie</title>
    <!-- Styles -->
    <link href="../../../fonts.googleapis.com/css178b.css?family=Montserrat:400,700|Poppins:400,600" rel="stylesheet">
    <!-- favicon and touch icons -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/assets/images/favicon.png') }})">
    <!-- Bootstrap -->
    <link href="{{ URL::asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/slick-nav/slicknav.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/wow/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/theme.css') }}" rel="stylesheet">

    <!--  style propertyHQ seller subscription form -->
    <link href="{{ URL::asset('assets/css/styles.css') }}" rel="stylesheet">
    <script type='text/javascript' src="{{ URL::asset('wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4') }}"></script>
    <link rel='stylesheet' id='main-style-css'  href="{{ URL::asset('wp-content/themes/phq_2017/style97df.css?ver=1.0055') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='updates-style-css'  href="{{ URL::asset('wp-content/themes/phq_2017/updates1ed1.css?ver=1.0052') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='zoowidget_styles-css'  href="{{ URL::asset('wp-content/plugins/zoowidgets/stylesheeta288.css?ver=4.8.1') }}" type='text/css' media='all' />
    <script type='text/javascript' src="{{ URL::asset('wp-content/themes/phq_2017/js/scriptsae7c.js?ver=1.0043') }}"></script>
    <link href="{{ URL::asset('assets/css/head.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/myCss.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div id="page-loader">
    <div class="loaders">
        <img src="{{ URL::asset('assets/images/loader/3.gif') }}" alt="First Loader">
        <img src="{{ URL::asset('assets/images/loader/4.gif') }}" alt="First Loader">
    </div>
</div>
<header id="head">
    <div id="site-header-top" class="barreNoir">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="clearfix">
                        <p class="contanct">Appelez-nous: +61 00 000 000</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="clearfix">
                        <div class="language-in-header">
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="language-in-header">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="language-in-header">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <div class="language-in-header">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                        <div class="language-in-header">
                            <i class="fa fa-globe"></i>
                            <label for="language-dropdown">Langue : </label>
                            <select name="currency" id="language-dropdown">
                                <option value="FRS"> &nbsp; Fr</option>
                                <option value="ENG"> &nbsp; Eng</option>
                            </select>
                        </div>
                        <div class="currency-in-header">
                            <i class="fa fa-sign-in"></i>
                            <label for="currency-dropdown"> S'inscrire: </label>
                            <select name="currency" id="currency-dropdown" onChange="location.href=''+this.options[this.selectedIndex].value;">
                                <option value="#">en tant que...</option>
                                <option value="inscription-membre">Membre</option>
                                <option value="seller">Vendeur</option>
                                <option value="AFA">A.F.A</option>
                                <option value="acceptation-APL">A.P.L</option>
                            </select>
                        </div>
                        <div class="currency-in-header">
                            <i class="fa fa-mouse-pointer"></i>
                            <label for="currency-dropdown"> <a href="connexion.php">Connexion</a> </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <nav class="navbar navbar-default navbar-fixed-top">     -->
    <div class="container top-menu" >
        <div class="row">
            <div class="col-md-3" >
                <figure id="site-logo" class="logo">
                    <a href="accueil.php">
                        <img src="{{ URL::asset('assets/images/logo.png') }}" alt="Logo">
                    </a>
                </figure>
            </div>
            <div class="col-md-5 col-sm-7 ">
                <nav id="site-nav" class="nav navbar-default menuBtn">
                    <ul class="nav navbar-nav ">
                        <li>
                            <a href="immobilier.php">IMMOBILIER</a>
                            <ul>
                                <li>
                                    <a href="immobilier.php">Résidentiel</a>
                                </li>
                                <li>
                                    <a href="immobilier.php">Foncier</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="business.php">BUSINESS</a>
                            <ul>
                                <li>
                                    <a href="business.php">Industriel</a>
                                </li>
                                <li>
                                    <a href="business.php">Commercial</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="services.php">NOS SERVICES</a>
                        </li>
                        <li>
                            <a href="blog.php">BLOG</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="col-md-3 col-sm-4">

                <form class="navbar-form form-search searchMenu" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- </nav> -->
</header>