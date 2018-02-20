<?php affichageHeader(); ?>


{!! plugin_css('assets/css/maps') !!}

  <div class="main-slider-wrapper clearfix content corps">
            <div id="main-slider">
                <div class="slide">
                    <img src="{{link_img('assets/images/slider/1.jpg')}}" alt="Slide">
                </div>
                <div class="slide">
                    <img src="{{link_img('assets/images/slider/2.jpg')}}" alt="Slide">
                </div>
                <div class="slide">
                    <img src="{{link_img('assets/images/slider/3.jpg')}}" alt="Slide">
                </div>
                <div class="slide">
                    <img src="{{link_img('assets/images/slider/4.jpg')}}" alt="Slide">
                </div>
            </div>

        </div>             
            <div class="container"> 
                <header class="section-header text-center"> 
                    <div class="container"></br>
                        <h3 class="pull-left">Résultats des recherches - <small> {{$resultat->total()}} produits enregistrées </small></h3> 
                        <div class="pull-right"> 
                            <div class="property-sorting pull-left"> 
                                <label for="property-sort-dropdown"> Nombre de produits à afficher:   </label>                                 
                                <select name="property-sort-dropdown" id="property-sort-dropdown" onchange="showUser(this.value)"> 
                                    <option value="10">10 produits</option> 
                                    <option value="20">20 produits</option>  
                                    <option value="50">50 produits</option>                                  
                                    <option value="100">100 produits</option>                                     
                                </select>
                            </div>                             
                            <p class="pull-left layout-view"> Vue:<i class="fa fa-th-large selected" data-layout="6"></i> <i class="fa fa-list-ul" data-layout="12"></i> </p> 
                        </div>                         
                    </div>                     
                </header>  

         <!-- breadcrumb     -->       
                <div class="row">
                        <div class="col-md-12"> 
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                              <li class="breadcrumb-item active">Résultats du recherche</li>
                            </ol>

                        </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="row" id="txtHint"> 

                            @foreach($resultat as $res)
                            <div class="col-md-6 layout-item-wrap">
                                <article class="property layout-item clearfix"> 
                                    <figure class="feature-image"> 
                                        <a class="clearfix zoom" href="single-property.html">
                                            <img data-action="zoom" src="{{url('/images/'.$res->urlimage1)}}" alt="..." width="350" height="233">
                                        </a>                                         
                                        <span class="btn btn-warning btn-sale">A vendre</span> 
                                    </figure>                                     
                                    <div class="property-contents clearfix"> 
                                        <header class="property-header clearfix"> 
                                            <div class="pull-left"> 
                                                <h6 class="entry-title"><a href="{{url('/produit/'.$res->slug)}}">{{$res->nom}}</a></h6> 
                                                <span class="property-location"><i class="fa fa-map-marker"></i> {{$res->adresse}}</span> 
                                            </div>      
                                            </header>                                        
                                            <button class="btn btn-default btn-price pull-right">
                                                <strong>{{$res->prix}}</strong>
                                            </button>                                             
                                                                               
                                        <div class="property-meta clearfix"> 
                                            <span><i class="fa fa-arrows-alt"></i> {{$res->surface}}</span> 
                                            <span><i class="fa fa-bed"></i> {{$res->ch}}</span> 
                                            <span><i class="fa fa-bathtub"></i> {{$res->sdb}}</span> 
                                            <span><i class="fa fa-cab"></i> {{$res->garage}}</span> 
                                        </div>                                         
                                        <div class="contents clearfix"> 
                                            <p> {{$res->description}} </p> 
                                        </div>                                         
                                        <div class="author-box clearfix"> 
                                        </div>                                         
                                    </div>                                     
                                </article>                                 
                            </div>
                            @endforeach

                            <!-- pagination -->
                            <div class="col-md-12 layout-item-wrap">
                                    {{ $resultat->links() }}
                            </div>    
                            <!-- end pagination --> 

                        </div>
                    </div>                     
                    <div class="col-lg-4 col-md-5"> 
                        <div id="property-sidebar"> 
                            <section class="property-meta-wrapper common text-center bg-info"> 
                                <div class="col-md-12">
                                <div class="content-box-header">
                                    <div class="panel-title">Espaces publicitaires</div>
                                </div>
                                 <p>
                                  <a href="APL.php" class="btn btn-success btn-lg"> Agences Partenaires Locales </a><br/>
                                </p>

                                <!-- google maps API -->
                                <div class="content-box-large box-with-header">
                                    <div id="map"></div>
                                </div>
                                 
                                
                                 <h6><img src="{{link_img('assets/images/features/bleu.png')}}" width="10" height="10"> Résidentiel </h6>
                                 <h6><img src="{{link_img('assets/images/features/vert.png')}}" width="10" height="10"> Foncier </h6>
                                 <h6><img src="{{link_img('assets/images/features/rouge.png')}}" width="10" height="10"> Industriel </h6>
                                 <h6><img src="{{link_img('assets/images/features/jaune.png')}}" width="10" height="10"> Commercial </h6>
                                

                                <div class="content-box-large box-with-header">
                                      <img src="{{link_img('assets/images/announcement-bg.jpg')}}" class="img-rounded" alt="Cinque Terre" width="604" height="236">
                                    <br /><br />
                                </div>
                            </div>
                        </section>
                            <section class="property-meta-wrapper common text-center bg-info"> 
                                <h2 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                                ESPACES PUBLICITES</h2> 
                                <p class="wow slideInRight" style="visibility: hidden; animation-name: none;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut                         <br> 
                                    labore et dolore magna aliquan ut enim ad minim veniam.</p> 
                            </section>                             
                            <section class="property-meta-wrapper common text-center bg-info"> 
                                <h2 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                                ESPACES PUBLICITES</h2> 
                                <p class="wow slideInRight" style="visibility: hidden; animation-name: none;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut                         <br> 
                                    labore et dolore magna aliquan ut enim ad minim veniam.</p> 
                            </section>                             
                            <section class="widget recent-properties clearfix"> 
                                <h5 class="title">Récents</h5> 
                                <div class="property clearfix"> 
                                    <a href="#" class="feature-image zoom">
                                        <img data-action="zoom" src="{{link_img('assets/images/property/1.jpg')}}" alt="Property Image">
                                    </a>                                     
                                    <div class="property-contents"> 
                                        <h6 class="entry-title"> <a href="#">Maison familiale luxe</a></h6> 
                                        <span class="btn-price">$389.000</span> 
                                        <div class="property-meta clearfix"> 
                                            <span> <i class="fa fa-arrows-alt"></i> 3060 SqFt</span> 
                                            <span> <i class="fa fa-bed"></i> 3 Beds</span> 
                                            <span> <i class="fa fa-bathtub"></i> 3 Baths</span> 
                                            <span> <i class="fa fa-cab"></i> Yes</span> 
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                                <div class="property clearfix"> 
                                    <a href="#" class="feature-image zoom">
                                        <img data-action="zoom" src="{{link_img('assets/images/property/2.jpg')}}" alt="Property Image">
                                    </a>                                     
                                    <div class="property-contents"> 
                                        <h6 class="entry-title"> <a href="single-property.html">Maison familiale luxe</a></h6> 
                                        <span class="btn-price">$389.000</span> 
                                        <div class="property-meta clearfix"> 
                                            <span> <i class="fa fa-arrows-alt"></i> 3060 SqFt</span> 
                                            <span> <i class="fa fa-bed"></i> 3 Beds</span> 
                                            <span> <i class="fa fa-bathtub"></i> 3 Baths</span> 
                                            <span> <i class="fa fa-cab"></i> Yes</span> 
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                                <div class="property clearfix"> 
                                    <a href="#" class="feature-image zoom">
                                        <img data-action="zoom" src="{{link_img('assets/images/property/3.jpg')}}" alt="Property Image">
                                    </a>                                     
                                    <div class="property-contents"> 
                                        <h6 class="entry-title"> <a href="single-property.html">Maison familiale luxe</a></h6> 
                                        <span class="btn-price">$389.000</span> 
                                        <div class="property-meta clearfix"> 
                                            <span> <i class="fa fa-arrows-alt"></i> 3060 SqFt</span> 
                                            <span> <i class="fa fa-bed"></i> 3 Beds</span> 
                                            <span> <i class="fa fa-bathtub"></i> 3 Baths</span> 
                                            <span> <i class="fa fa-cab"></i> Yes</span> 
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                            </section>                             
                            <section class="widget property-taxonomies clearfix"> 
                                <h5 class="title">Status récents</h5> 
                                <ul class="clearfix"> 
                                    <li>
                                        <a href="#">à louer </a>
                                        <span class="pull-right">29</span>
                                    </li>                                     
                                    <li>
                                        <a href="#">à vendre </a>
                                        <span class="pull-right">35</span>
                                    </li>                                     
                                    <li>
                                        <a href="#">Bureau à louer </a>
                                        <span class="pull-right">07</span>
                                    </li>                                     
                                </ul>                                 
                            </section>                             
                            <section class="widget property-taxonomies clearfix"> 
                                <h5 class="title">Types récents</h5> 
                                <ul class="clearfix"> 
                                    <li>
                                        <a href="#">Apartement </a>
                                        <span class="pull-right">30</span>
                                    </li>                                     
                                    <li>
                                        <a href="#">Grenier </a>
                                        <span class="pull-right">05</span>
                                    </li>                                     
                                    <li>
                                        <a href="#">Maison unifamiliale </a>
                                        <span class="pull-right">28</span>
                                    </li>                                     
                                    <li>
                                        <a href="#">Villa </a>
                                        <span class="pull-right">37</span>
                                    </li>                                     
                                </ul>                                 
                            </section>                             
                        </div>                         
                    </div>
                </div>
            </div>             
        </div>         
        <footer id="footer"> 
            <div class="site-footer"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-4 col-sm-6"> 
                            <section class="widget about-widget clearfix"> 
                                <h4 class="title hide">About Us</h4> 
                                <a class="footer-logo" href="#">
                                    <img src="{{link_img('assets/images/footer-logo.png')}}" alt="Footer Logo">
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
        {!! helper_js('assets/js/jquery.min') !!}         
        {!! helper_js('assets/js/jquery.migrate') !!}         
        {!! helper_js('assets/js/bootstrap.min') !!}         
               
        {!! helper_js('plugins/slick/slick.min') !!}         
        {!! helper_js('plugins/jquery-ui/jquery-ui.min') !!}          
        {!! helper_js('plugins/forms/jquery.form.min') !!}        
        {!! helper_js('plugins/forms/jquery.validate.min') !!}         
        {!! helper_js('plugins/modernizr/modernizr.custom') !!}         
        {!! helper_js('plugins/wow/wow.min') !!}        
        {!! helper_js('plugins/zoom/zoom') !!}     
        {!! helper_js('plugins/mixitup/mixitup.min') !!}       
        {!! helper_js('assets/js/theme') !!}
        {!! helper_js('assets/js/head') !!}        
    </body>  
    <script>
        function showUser(str) {
          if (str=="") {
            document.getElementById("txtHint").innerHTML="";
            return;
          } 
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              document.getElementById("txtHint").innerHTML=this.responseText;
            }
          }
          xmlhttp.open("GET",str,true);
          xmlhttp.send();
        }
    </script>
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
    <!-- google maps API  -->
   {!! helper_js('assets/js/maps') !!}
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwT0Og8y1m-XKquI-MSCZnaawvxhX_Q-w&callback=initMap"></script> 
</html>

@include('front.footer-bar')