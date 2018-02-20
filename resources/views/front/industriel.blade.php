@include('front.header',['body' => $body])
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


            <!-- Barre de recherche -->
            <div id="slider-contents">
                <div class="container"> 
                    <div class="jumbotron" style="width: 900px"> 
                        <div class="panel-group">
                            <div class="row">
                                <div class="col-xs-12 col-lg-11 adv-search-icons">
                                    <ul class="nav nav-tabs adv-search-tabs" role="tablist">
                                        <li role="presentation" class="active" data-toggle="tooltip" data-placement="top" title="Résidentiel">
                                            <a href="#" aria-controls="apartments" role="tab" data-toggle="tab" id="adv-search-tab1"><i class="fa fa-building"></i> &nbsp; {{$categorie}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-1 visible-lg">
                                    <a id="adv-search-hide" data-toggle="collapse" href="#apartments"><i class="fa fa-chevron-down"></i></a>
                                </div>
                            </div>
                             <div class="panel panel-default">
                                <div id="apartments" class="panel-collapse collapse in">
                                    <form action="#" id="adv-search-form" class="clearfix"> 
                                        <h4 class="text-center">{{$categorie}}</h4>
                                        <fieldset> 
                                            <select name="location" id="main-location"> 
                                                <option value="">Etats</option>
                                                <option value="ACT"> Australian Capital Territory</option>
                                                <option value="NSW"> New south wales</option>
                                                <option value="NTR"> Northern Territory</option>
                                                <option value="QLD"> Queenslad</option>
                                                <option value="SA"> South Autralia</option>
                                                <option value="TAS"> Tasmania</option>
                                                <option value="VIC"> Victoria</option>
                                                <option value="WA"> Western Australia</option>
                                            </select>                                             
                                            <select name="sub-location" id="property-sub-location"> 
                                                <option value="">Villes</option>                                                 
                                                <option value="sydney"> Sydney</option>                                                 
                                                <option value="Newcastle"> Newcastle</option>                                                 
                                                <option value="Central Coast"> Central Coast</option>                                                 
                                                <option value="Wollongong"> Wollongong</option>                                                 
                                                <option value="Albury-Wodonga"> Albury-Wodonga (Vic)</option>                                                 
                                                <option value="Maitland"> Maitland</option>                                                 
                                                <option value="Coffs Harbour"> Coffs Harbour</option>                                                 
                                                <option value="Wagga Wagga"> Wagga Wagga</option>                                                 
                                                <option value="Port Macquarie"> Port Macquarie</option>                                                 
                                                <option value="Tamworth"> Tamworth </option>                                                 
                                                <option value="Orange"> Orange</option>                                                 
                                                <option value="Dubbo"> Dubbo</option>                                                 
                                                <option value="Bathurst"> Bathurst</option>                                                 
                                                <option value="Nowra-Bomaderry"> Nowra-Bomaderry</option>                                                 
                                                <option value="Lismore"> Lismore </option>                                                 
                                                <option value="Taree"> Taree</option> 
                                                <option value="Ballina"> Ballina</option>  
                                                <option value="Armidale"> Armidale</option> 
                                                <option value="Goulburn"> Goulburn</option>
                                                <option value="Cessnock"> Cessnock</option> 
                                                <option value="Bowral-Mittagong"> Bowral-Mittagong</option> 
                                                <option value="Foster-Tuncurry"> Foster-Tuncurry</option>                                           
                                            </select>                                             
                                            <select id="property-status" name="status"> 
                                                <option value="">Suburb</option>                                                 
                                                <option value="Darlington"> Darlington</option>                                                 
                                                <option value="Lucas Heights"> Lucas Heights</option>                                                 
                                                <option value="Manly United FC"> Manly United FC</option>                                                 
                                                <option value="Manly-Warringah Sea Eagles‎"> Manly-Warringah Sea Eagles‎</option>                    
                                                <option value="Mosman"> Mosman</option>                                                 
                                                <option value="Parramatta‎"> Parramatta‎ </option>                                                 
                                                <option value="Rose Bay"> Rose Bay</option>                                                 
                                            </select>                                             
                                            <select id="property-type" name="type"> 
                                                <option value="">Localisation</option>                                                 
                                                <option value="En agglomération"> En agglomération</option>                                                 
                                                <option value="Hors agglomération"> Hors agglomération</option>                                                 
                                                <option value="En campagne"> En campagne</option>                                                
                                            </select>                                            
                                            <select name="bathrooms" id="property-baths"> 
                                                <option value="">Types de logement</option>                                                 
                                                <option value="">appartement</option>                                                 
                                                <option value="">maison individuelle</option>
                                                <option value="">townhouse</option> 
                                                <option value="">etc... </option>                                                
                                            </select> 
                                            
                                            <b> $100.000</b> 
                                            <input id="ex3" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000000" data-slider-step="5" data-slider-value="[250000,600000]"/> 
                                            <b> $10.000.000</b>


                                            <b> 50m²</b> 
                                            <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[355,715]"/> 
                                            <b>1000m²</b>

                                        </fieldset>

                                        <fieldset>

                                            <b> 1 ch</b> 
                                            <input id="ex4" type="text" class="span2" value="" data-slider-min="1" data-slider-max="30" data-slider-step="5" data-slider-value="[4,20]"/> 
                                            <b>10 ch</b>

                                        </fieldset>

                                        <fieldset>
                                            <button type="submit" class="btn btn-default btn-lg text-center"> Rechercher </button>
                                            <div class="checkbox">
                                              <label><input type="checkbox" value="">Suburbs voisins</label>
                                            </div>
                                        </fieldset> 

                                    </form>
                                    <div class="panel-footer">
                                        <p>
                                          <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            + Plus de critères (minimum)
                                          </a>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                            <div class="row">
                                              <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1">Salle d'eau </span>
                                                   <div class="input-group">
                                                      <input type="text" class="form-control">
                                                    </div>
                                                </div><!-- /input-group -->
                                              </div><!-- /.col-lg-3 -->
                                              <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1">Toilette </span>
                                                    <div class="input-group">
                                                      <input type="text" class="form-control">
                                                    </div>
                                                </div><!-- /input-group -->
                                              </div><!-- /.col-lg-3 -->
                                              <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1">Garage </span>
                                                    <div class="input-group">
                                                      <input type="text" class="form-control">
                                                    </div>
                                                </div><!-- /input-group -->
                                              </div><!-- /.col-lg-3 -->
                                              <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1">Piscine </span>
                                                    <div class="input-group">
                                                      <input type="text" class="form-control">
                                                    </div>
                                                </div><!-- /input-group -->
                                              </div><!-- /.col-lg-3 -->
                                            </div><!-- /.row -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>                         
                    </div>
                </div>                 
            </div>
        <!-- fin barre de recherche     -->


        </div>             
            <div class="container"> 
                <header class="section-header text-center"> 
                    <div class="container"></br>
                        <h2 class="pull-left">Résidentiel 1 - 50 sur 500 pages</h2> 
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
                              <li class="breadcrumb-item"><a href="accueil.php">Accueil</a></li>
                              <li class="breadcrumb-item active">Résidentiel</li>
                            </ol>

                        </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="row" id="txtHint"> 

                            @foreach($requete as $requetes)
                            <div class="col-md-6 layout-item-wrap">
                                <article class="property layout-item clearfix"> 
                                    <figure class="feature-image"> 
                                        <a class="clearfix zoom" href="single-property.html">
                                            <img data-action="zoom" src="{{url('/images/'.$requetes->urlimage1)}}" alt="..." width="350" height="233">
                                        </a>                                         
                                        <span class="btn btn-warning btn-sale">A vendre</span> 
                                    </figure>                                     
                                    <div class="property-contents clearfix"> 
                                        <header class="property-header clearfix"> 
                                            <div class="pull-left"> 
                                                <h6 class="entry-title"><a href="{{url('/produit/'.$requetes->slug)}}">{{$requetes->nom}}</a></h6> 
                                                <span class="property-location"><i class="fa fa-map-marker"></i> {{$requetes->adresse}}</span> 
                                            </div>      
                                            </header>                                        
                                            <button class="btn btn-default btn-price pull-right btn-3d" data-hover="Voir détail">
                                                <strong>{{$requetes->prix}}</strong>
                                            </button>                                             
                                                                               
                                        <div class="property-meta clearfix"> 
                                            <span><i class="fa fa-arrows-alt"></i> {{$requetes->surface}}</span> 
                                            <span><i class="fa fa-bed"></i> {{$requetes->ch}}</span> 
                                            <span><i class="fa fa-bathtub"></i> {{$requetes->sdb}}</span> 
                                            <span><i class="fa fa-cab"></i> {{$requetes->garage}}</span> 
                                        </div>                                         
                                        <div class="contents clearfix"> 
                                            <p> {{$requetes->description}} </p> 
                                        </div>                                         
                                        <div class="author-box clearfix"> 
                                        </div>                                         
                                    </div>                                     
                                </article>                                 
                            </div>
                            @endforeach

                            <!-- pagination -->
                            <div class="col-md-12 layout-item-wrap">
                                    {{ $requete->links() }}
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
          xmlhttp.open("GET",str+"-{{$categorie}}",true);
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