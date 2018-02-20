       <!-- endcontent -->
  <footer id="footer">
            <div class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <section class="widget about-widget clearfix">
                                <h4 class="title hide">About Us</h4>
                                <a class="footer-logo" href="#">
                                    <img src="{{ link_img('assets/images/footer-logo.png') }}" alt="Footer Logo">
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
                                        <a href="acceuil.php">Accueil</a>
                                    </li>
                                    <li>
                                        <a href="immobilier.php">Immobilier</a>
                                    </li>
                                    <li>
                                        <a href="business.php">Business</a>
                                    </li>
                                    <li>
                                        Nos services
                                    </li>
                                    <li>
                                        <a href="blog.php">Blog</a>
                                    </li>
                                    <li>
                                        Mon compte
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <section class="widget address-widget clearfix">
                                <h4 class="title"></h4>
                                <ul>
                                    <li>
                                        Termes et conditions
                                    </li>
                                    <li>
                                        Politique de confidentialité
                                    </li>
                                    <li>
                                        Guide de l'investisseur
                                    </li>
                                    <li>
                                        Publicité
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
        {!! helper_js('/assets/js/jquery.min') !!}
        {!! helper_js('assets/js/jquery.migrate') !!}
        {!! helper_js('assets/js/bootstrap.min') !!}
        {!! helper_js('plugins/slick-nav/jquery.slicknav.min') !!}
        {!! helper_js('plugins/slick/slick.min') !!}
        {!! helper_js('plugins/jquery-ui/jquery-ui.min') !!}
        {!! helper_js('plugins/forms/jquery.form.min') !!}
        {!! helper_js('plugins/forms/jquery.validate.min') !!}
        {!! helper_js('plugins/modernizr/modernizr.custom') !!}
        {!! helper_js('plugins/wow/wow.min') !!}
        {!! helper_js('plugins/zoom/zoom') !!}
        {!! helper_js('plugins/mixitup/mixitup.min') !!}
        <script src="../../../maps.googleapis.com/maps/api/js7809?key=AIzaSyD2MtZynhsvwI2B40juK6SifR_OSyj4aBA&amp;libraries=places"></script>
        {!! helper_js('plugins/whats-nearby/source/WhatsNearby') !!}
        {!! helper_js('assets/js/theme') !!}
        {!! helper_js('assets/js/multirange') !!}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/bootstrap-slider.js"></script>
        <!-- Slider Range -->
        <script type='text/javascript'>
            $(document).ready(function () {
                $("#ex2").slider({
                    formatter: function (value) {
                        return 'Current value: ' + value;
                    }
                });
            });
        </script>
        <!-- Slider Range -->
        <script type='text/javascript'>
            $(document).ready(function () {
                $("#ex3").slider({
                    formatter: function (value) {
                        return 'Current value: ' + value;
                    }
                });
            });
        </script>
         <!-- Slider Range -->
        <script type='text/javascript'>
            $(document).ready(function () {
                $("#ex4").slider({
                    formatter: function (value) {
                        return 'Current value: ' + value;
                    }
                });
            });
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/bootstrap-slider.min.js"></script>
        {!! helper_js('assets/js/head') !!}

    </body>
    </html>    