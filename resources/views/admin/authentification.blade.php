<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin - IEA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
    {!! plugin_css('admin/css/lib/bootstrap-responsive') !!}
    {!! plugin_css('admin/css/lib/bootstrap') !!}
    {!! plugin_css('admin/css/boo-coloring') !!}
    {!! plugin_css('admin/css/boo-extension') !!}
    {!! plugin_css('admin/css/boo-utility') !!}
    {!! plugin_css('admin/css/boo') !!}
    {!! plugin_css('admin/css/style') !!}

<!-- HTML5 shim, for IE6-8 support of HTML5 elements --
> -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="assets/plugins/selectivizr/selectivizr-min.js"></script>
    <script src="assets/plugins/flot/excanvas.min.js"></script>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="{{ link_img('favicon.png') }}">

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body class="signin signin-horizontal">
<div class="page-container">
    <div id="header-container">
        <div id="header">
            <div class="navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container"> </div>
                </div>
            </div>
            <!-- // navbar -->

            <div class="header-drawer" style="height:3px"> </div>
            <!-- // breadcrumbs -->
        </div>
        <!-- // drawer -->
    </div>
    <!-- // header-container -->

    <div id="main-container">
        <div id="main-content" class="main-content container">
            <div id="page-content" class="page-content">
                <div class="row">
                    <div class="tab-content overflow form-dark">
                        <div class="tab-pane fade in active" id="login">
                            <div class="span5">
                                <h4 class="welcome"> <small><i class="fontello-icon-user-4"></i>Se Connecter</small></h4>
                                <form method="post" action="dashboard-one.html" name="login_form">
                                    <fieldset>
                                        <div class="controls">
                                            <input id="idLogin" class="span5" type="text" name="id_login_email" placeholder="your ID or email">
                                        </div>
                                        <div class="controls controls-row">
                                            <input id="idPassword" class="span3" type="password" name="id_login_password" placeholder="password">
                                            <button type="submit" class="span2 btn btn-yellow btn-large">Connnecter</button>
                                        </div>
                                        <hr class="margin-xm">
                                        <label class="checkbox">
                                            <input id="remember" class="checkbox" type="checkbox">
                                            Souviens-toi de moi</label>
                                        <hr class="margin-mm ">
                                        <a href="#forgot" class="btn btn-boo" data-toggle="tab">Oublier mot de passe?</a>
                                    </fieldset>
                                </form>
                                <!-- // form -->
                            </div>
                            <div class="span7">
                                <h4 class="welcome"><small>Investir en Australie</small></h4>
                                <p>J'ai créé le site www.investirenaustralie.com pour développer les échanges de la communauté francophone avec l'Australie. Cela concerne donc la France Métropolitaine et ses territoires ultramarins de la Mer Méditerranée et des 3 grands océans, la Belgique, le Luxembourg, la Suisse, Monaco, le Québec, les pays de l'Afrique francophone, etc...</p>
                                <p>Les constructeurs et promoteurs australiens déposent sur le site leurs produits immobiliers, fonciers, industriels et commerciaux; les Membres de la communauté francophone internationale intéressés par l'Australie parcourent les offres déposées sur le site, contactent les vendeurs, et peuvent initier une procédure d'achat en étant assistés de juristes et financiers australiens francophones.
L'acheteur est donc entouré par une équipe de professionnels francophones auprès desquels ils peuvent obtenir explications et soutien.</p>
                            </div>
                        </div>
                        <!-- // Tab Login -->

                        <div class="tab-pane fade" id="forgot">
                            <div class="span5">
                                <h4 class="welcome"><small><i class="fontello-icon-help-2"></i>Forgot your password?</small></h4>
                                <form class="" method="post" action="dashboard-one.html" name="forgot_password">
                                    <p class="note">Enter your e-mail address, we will send you an e-mail code for password reset.</p>
                                    <div class="controls">
                                        <input id="email" class="input-block-level" type="email" name="id_email_forgot" placeholder="your email">
                                    </div>
                                    <p class="text-center">or</p>
                                    <div class="controls">
                                        <input id="email" class="input-block-level" type="tel" name="id_phone_forgot" placeholder="number phone">
                                    </div>
                                    <hr class="margin-xm">
                                    <button type="submit" class="btn-block btn btn-yellow btn-large">Submit</button>
                                    <hr class="margin-mm">
                                    <p>Have you remembered? <a href="#login" class="btn btn-boo" data-toggle="tab">Try to log in again.</a> or <a href="#register" class="btn btn-boo link" data-toggle="tab">Register now for free!</a></p>
                                </form>
                                <!-- // form -->
                            </div>
                            <div class="span7">
                                <h4 class="welcome"><small>Place infotext for forgot password</small></h4>
                                <p>Lorem ipsum dolor sit amet consectetuer Curabitur egestas adipiscing laoreet Suspendisse. Lacus Sed justo penatibus vel wisi elit felis lorem Donec ipsum. Pretium nibh nibh eget adipiscing volutpat dui..</p>
                                <p>Semper ipsum rutrum egestas Nam congue semper urna metus lorem habitasse. Sodales Nulla Vestibulum pretium justo quis vestibulum pellentesque et amet eu. Senectus augue turpis et Vestibulum ut risus velit pellentesque laoreet lacus.</p>
                            </div>
                        </div>
                        <!-- // Tab Forgot -->

                        <div class="tab-pane fade" id="register">
                            <div class="span7">
                                <h4 class="welcome"><small>Place infotext for registration</small></h4>
                                <p>Lorem ipsum dolor sit amet consectetuer Curabitur egestas adipiscing laoreet Suspendisse. Lacus Sed justo penatibus vel wisi elit felis lorem Donec ipsum. Pretium nibh nibh eget adipiscing volutpat dui..</p>
                                <p>Semper ipsum rutrum egestas Nam congue semper urna metus lorem habitasse. Sodales Nulla Vestibulum pretium justo quis vestibulum pellentesque et amet eu. Senectus augue turpis et Vestibulum ut risus velit pellentesque laoreet lacus.</p>
                            </div>
                            <div class="span5">
                                <h4 class="welcome"> <small><i class="fontello-icon-users"></i>New User Registration</small></h4>
                                <form method="post" action="dashboard-one.html" name="login_form">
                                    <fieldset>
                                        <legend class="two"><span>Account information</span></legend>
                                        <div class="controls controls-row">
                                            <input id="idLogin" class="input-block-level" type="text" name="id_name" placeholder="name">
                                        </div>
                                        <div class="controls controls-row">
                                            <input id="idLogin" class="input-block-level" type="text" name="id_username" placeholder="username">
                                        </div>
                                        <div class="controls controls-row">
                                            <input id="idLogin" class="input-block-level" type="text" name="id_email_address" placeholder="email address">
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="two"><span>Password</span></legend>
                                        <div class="controls controls-row">
                                            <input id="idPassw" class="span3" type="password" name="password" placeholder="password">
                                        </div>
                                        <div class="controls controls-row">
                                            <input id="idPassw" class="span3" type="password" name="confirm_password" placeholder="confirm password">
                                        </div>
                                        <hr class="margin-xx">
                                        <button type="submit" class="btn btn-green btn-block btn-large">REGISTER TO BOO</button>
                                        <hr class="margin-xm">
                                        <p class="text-right">Have you remembered? <a href="#login" class="btn btn-boo" data-toggle="tab">Try to log in again.</a></p>
                                    </fieldset>
                                </form>
                                <!-- // form -->
                            </div>
                        </div>
                        <!-- // Tab Forgot -->

                    </div>

                </div>

            </div>
            <!-- // page content -->

        </div>
        <!-- // main-content -->

    </div>
    <!-- // main-container  -->

</div>
<!-- // page-container -->

<!-- Le javascript -->
<!-- Placed at the end of the document so the pages load faster -->
