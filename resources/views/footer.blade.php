<footer id="footer">
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <section class="widget about-widget clearfix">
                        <h4 class="title hide">About Us</h4>
                        <a class="footer-logo" href="#">
                            <img src="{{ asset('assets/images/footer-logo.png') }}" alt="Footer Logo">
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
                                Régie publicitaire
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
                <p>
                    INVESTIR EN AUSTRALIE est un e-marketplace.
                </p>
            </div>
        </div>
    </div>
</footer>
<a href="#top" id="scroll-top"><i class="fa fa-angle-up"></i></a>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('js/myJs.js') }}"></script>
<script src="{{ asset('assets/js/jquery.migrate.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/slick-nav/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('plugins/tweetie/tweetie.js') }}"></script>
<script src="{{ asset('plugins/forms/jquery.form.min.js') }}"></script>
<script src="{{ asset('plugins/forms/jquery.validate.min.js') }}"></script>
<script src="{{ asset('plugins/modernizr/modernizr.custom.js') }}"></script>
<script src="{{ asset('plugins/wow/wow.min.js') }}"></script>
<script src="{{ asset('plugins/zoom/zoom.js') }}"></script>
<script src="{{ asset('plugins/mixitup/mixitup.min.js') }}"></script>
<script src="../../../maps.googleapis.com/maps/api/js7809?key=AIzaSyD2MtZynhsvwI2B40juK6SifR_OSyj4aBA&amp;libraries=places"></script>
<script src="{{ asset('plugins/whats-nearby/source/WhatsNearby.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/head.js') }}"></script>
<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- JS Limitation -->
<script type="text/javascript">
    function textLimit(field, maxlen) {
        if (field.value.length > maxlen) {
            field.value = field.value.substring(0, maxlen);
            alert('Text too long!');
        }
    }
</script>

<!-- Bootstrap modal js auto -->
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>

</body>
</html>
