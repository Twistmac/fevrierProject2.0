@include('front.header-bar')

<div class="main-slider-wrapper clearfix content corps">

        <div id="site-banner" class="text-center clearfix">
                <div class="container">
                    <h1 class="title wow slideInLeft">Connexion</h1>
                    <ol class="breadcrumb wow slideInRight">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li class="active">Connexion</li>
                    </ol>
                </div>
            </div>
    </div>

<div id="contact-page" class="contact-page-var-two">
    <div class="container">
        <h3 class="entry-title">Connexion</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form-wrapper">
                    <div class="contents">
                        <p>Sed perspiciatis unde natus error sit voluptatem accusantium doloremque  laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
                    </div>
                    <div class="contact-page-contents clearfix">
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fa fa-map-marker"></i>
                                <div class="contents">
                                    <h6 class="title">Mailing Address</h6>
                                    <address>
                                        95 Amphitheatre Parkway
                                        Mountain View CA,
                                        United States
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <i class="fa fa-phone"></i>
                                <div class="contents">
                                    <h5 class="title">Contact Info</h5>
                                    <ul>
                                        <li>Phone: (123) 45678910</li>
                                        <li>Mail: company@domain.com</li>
                                        <li>Fax: +84 962 216 601</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <form action="{!! url('/authentification')!!}" method="post" class="contact-form" >
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p class="form-author common">
                        <input name="email" type="email" placeholder="Votre email *" aria-required="true" required="required">
                    </p>
                    <p class="form-author common">
                         <input name="pwd"  type="password" placeholder="Votre mot de passe *" aria-required="true" required="required">
                    </p>
                    <p style="color:red"> {!! session('errorConnexion') !!}</p>
                    <p>Vous avez un compte ?<a href="inscription-membre.php"> Inscrivez-vous </a></p>
                    <p class="form-submit">
                        <button type="submit" class="pull-right submit-btn btn btn-default btn-lg" data-hover="Connexion">Connexion</button>
                        <span id="ajax-loader"><i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i><span class="sr-only">Loading...</span></span>
                    </p>
                    <div id="error-container"></div>
                    <div id="message-container"></div>
                </form>
            </div>
        </div>
    </div>
    <div id="map-canvas"></div>
</div>

        <footer id="footer">
            <div class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <section class="widget about-widget clearfix">
                                <h4 class="title hide">About Us</h4>
                                <a class="footer-logo" href="#">
                                    <img src="assets/images/footer-logo.png" alt="Footer Logo">
                                </a>
                                <ul class="social-icons clearfix">
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <section class="widget address-widget clearfix">
                                <h4 class="title">acces rapide</h4>
                                <ul>
                                    <li>
                                       <a href="#">Accueil</a>
                                    </li>
                                    <li>
                                        <a href="#">Immobilier</a>
                                    </li>
                                    <li>
                                         <a href="#">Business</a>
                                    </li>
                                    <li>
                                         <a href="#">Nos services</a>
                                    </li>
                                    <li>
                                         <a href="#">Blog</a>
                                    </li>
                                    <li>
                                         <a href="#">Mon compte</a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <section class="widget address-widget clearfix">
                                <h4 class="title"></h4>
                                <ul>
                                    <li>
                                         <a href="#">Termes et conditions</a>
                                    </li>
                                    <li>
                                        <a href="#">Politique de confidentialité</a>
                                    </li>
                                    <li>
                                        <a href="#">Guide de l'investisseur</a>
                                    </li>
                                    <li>
                                        <a href="#">Publicité</a>
                                    </li>
                                    <li>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer-bottom">
                <div class="container text-center">
                    <div>
                        <p>INVESTIR EN AUSTRALIE est un e-marketplace.</p>
                        <p> © Copyright "Investir en Australie" 2018 - Tous droits réservés</p>
                    </div>
                </div>
            </div>
        </footer>
        <a href="#top" id="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="public/assets/js/jquery.min.js"></script>
        <script src="public/assets/js/jquery.migrate.js"></script>
        <script src="public/assets/js/bootstrap.min.js"></script>
        <script src="public/plugins/slick-nav/jquery.slicknav.min.js"></script>
        <script src="public/plugins/slick/slick.min.js"></script>
        <script src="public/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="public/plugins/forms/jquery.form.min.js"></script>
        <script src="public/plugins/modernizr/modernizr.custom.js"></script>
        <script src="public/plugins/wow/wow.min.js"></script>
        <script src="public/plugins/zoom/zoom.js"></script>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2MtZynhsvwI2B40juK6SifR_OSyj4aBA&libraries=places"></script>
        <script src="public/plugins/whats-nearby/source/WhatsNearby.js"></script>
        <script src="public/assets/js/theme.js"></script>

<script>
    /*****************************************************
     *Google Maps
     ******************************************************/
    function initializeContactMap()
    {
        var officeLocation = new google.maps.LatLng(-24.841552, 137.33135);
        var contactMapOptions = {
            center: officeLocation,
            zoom: 6,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        };
        var contactMap = new google.maps.Map(document.getElementById("map-canvas"), contactMapOptions);
        var contactMarker = new google.maps.Marker({
            position: officeLocation,
            map: contactMap
        });
    }

    window.onload = initializeContactMap();
</script>
