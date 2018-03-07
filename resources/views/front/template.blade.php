<?php affichageHeader(); ?>

{!! plugin_css('assets/css/maps') !!}

  <div class="slider-area">
            <div class="main-slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                    <div class="slider"><img src="{{link_img('assets/images/slider/1.jpg')}}" alt="Slide"></div>
                    <div class="slider"><img src="{{link_img('assets/images/slider/2.jpg')}}" alt="Slide"></div>
                    <div class="slider"><img src="{{link_img('assets/images/slider/3.jpg')}}" alt="Slide"></div>
                </div>
            </div>

            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <!-- corps barre de recherche -->
                        <div class="search-form wow pulse" data-wow-delay="0.8s" style="top: 200px;">
                            <form method="post" action="{{route('front.search')}}" class="form-inline">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                                 <div class="form-group">                                     
                                    <select id="basic" class="selectpicker show-tick form-control" name="etats">
                                        
                                        <option value="">Etats</option>
                                        <option value="Australie-Méridionale">Australie-Méridionale </option>
                                        <option value="Gold coast">Gold coast</option> 
                                        <option value="Nouvelle-Galles du Sud">Nouvelle-Galles du Sud</option>
                                        <option value="Queensland">Queensland</option>
                                        <option value="Victoria">Victoria</option>

                                    </select>
                                </div>
                                <div class="form-group">                                   
                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Villes" name="villes">

                                        <option value="">Villes</option>
                                        <option value="Surfers Paradise">Surfers Paradise</option>
                                        <option value="Melbourne">Melbourne</option>
                                        <option value="Benowa Waters">Benowa Waters</option>
                                        <option value="Valla Beach">Valla Beach</option>
                                        <option value="MacLeay Island">MacLeay Island</option>
                                    </select>
                                </div>
                                <div class="form-group">                                     
                                    <select id="basic" class="selectpicker show-tick form-control" name="suburbs">
                                        <option value="">Darlington</option>
                                        <option value="">Lucas Heights </option>
                                        <option value="">Mosman</option>
                                        <option value="">Rose Bay</option>  

                                    </select>
                                </div>
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>

                                <div style="display: none;" class="search-toggle tab-content">

                                  <a data-toggle="tab" class="btn btn-default" href="#residentiel"><i class="fa fa-home" aria-hidden="true">&nbsp;Résidentiel</i></a>
                                  <a data-toggle="tab" class="btn btn-default" href="#foncier"><i class="fa fa-map-o" aria-hidden="true">&nbsp;Foncier</i></a>
                                  <a data-toggle="tab" class="btn btn-default" href="#industriel"><i class="fa fa-industry" aria-hidden="true">&nbsp;Industriel</i></a>
                                  <a data-toggle="tab" class="btn btn-default" href="#commercial"><i class="fa fa-building" aria-hidden="true">&nbsp;Commercial</i></a>

                                <div id="residentiel" class="tab-pane fade in active">
                                    <div class="search-row">   
                                        <div class="form-group mar-r-20">
                                            <label for="price-range">Prix (AU$):</label>
                                            <input type="text" class="span2" value="" data-slider-min="100000" 
                                                   data-slider-max="10000000" data-slider-step="50000" 
                                                   data-slider-value="[500000,5000000]" id="price-range1" name="prix"><br />
                                            <b class="pull-left color">100000$</b> 
                                            <b class="pull-right color">10000000$</b>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group mar-l-20">
                                            <label for="property-geo">Superficie (m2) :</label>
                                            <input type="text" class="span2" value="" data-slider-min="50" 
                                                   data-slider-max="1000" data-slider-step="25" 
                                                   data-slider-value="[50,450]" id="property-geo" name="superficie"><br />
                                            <b class="pull-left color">50m</b> 
                                            <b class="pull-right color">1000m</b>
                                        </div>
                                        <!-- End of  --> 
                                    </div>

                                    <div class="search-row">

                                        <div class="form-group mar-r-20">
                                            <label for="price-range">Min salle de bain :</label>
                                            <input type="text" class="span2" value="" data-slider-min="1" 
                                                   data-slider-max="10" data-slider-step="1" 
                                                   data-slider-value="[4,8]" id="min-baths" name="sdb"><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">10</b>
                                        </div>
                                        <!-- End of  --> 

                                        <div class="form-group mar-l-20">
                                            <label for="property-geo">Min chambre :</label>
                                            <input type="text" class="span2" value="" data-slider-min="1" 
                                                   data-slider-max="10" data-slider-step="1" 
                                                   data-slider-value="[3,7]" id="min-bed" name="ch"><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">10</b>
                                        </div>
                                        <!-- End of  --> 
                                    </div>
                                    <br>

                                    <div class="form-group">                                     
                                            <select id="basic" class="selectpicker show-tick form-control" name="typelogement">
                                                <option value="">Type de logement</option>
                                                <option value="Appartement">Appartement </option>
                                                <option value="Maison individuelle">Maison individuelle</option>
                                                <option value="Townhouse">Townhouse</option>
                                                <option value="Terrain">Terrain</option>
                                                <option value="Bureau & Local commercial">Bureau & Local commercial</option>
                                                <option value="Entrepôt & Local d'activité">Entrepôt & Local d'activité</option>

                                            </select>
                                    </div>
                                    <div class="form-group">                                     
                                            <select id="basic" class="selectpicker show-tick form-control" name="localisation">
                                                <option value="">Localisation</option>
                                                <option value="">En agglomération </option>
                                                <option value="">Hors agglomération</option>
                                                <option value="">En campagne</option>  

                                            </select>
                                    </div>
                                    <br>

                                    <div class="search-row">  
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Suburbs voisins
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Salle d'eau
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Toilette
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 
                                        <br>
                                    </div>

                                    <div class="search-row">  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Garage
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Piscine
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Emergency Exit(200)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 
                                    </div>                                    

                                    <div class="search-row">  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Laundry Room(10073)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Jog Path(1503)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 26' Ceilings(1200)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 
                                        <br>
                                        <hr>
                                    </div>                             
                                    <button class="btn search-btn prop-btm-sheaerch" type="submit"><i class="fa fa-search"></i></button>  
                                </div><!-- end div residentiel --> 

                                <div id="foncier" class="tab-pane fade">
                                  <div class="search-row">   
                                        <div class="form-group">                                     
                                            <select id="basic" class="selectpicker show-tick form-control" name="typefoncier">
                                                <option value="">Types de Foncier</option>
                                                <option value="foncier agricole">Foncier Agricole </option>
                                                <option value="foncier residentiel">Foncier Résidentiel </option>
                                            </select>
                                        </div><br>
                                        <!-- End of -->
                                        <div class="form-group mar-r-20">
                                            <label for="price-range">Prix (AU$):</label>
                                            <input type="text" class="span2" value="" data-slider-min="100000" 
                                                   data-slider-max="10000000" data-slider-step="50000" 
                                                   data-slider-value="[500000,5000000]" id="price-range" name="prix"><br />
                                            <b class="pull-left color">100000$</b> 
                                            <b class="pull-right color">10000000$</b>
                                        </div>
                                        <!-- End of -->
                                        <div class="form-group mar-l-20">
                                            <label for="property-geo">Superficie (m2) :</label>
                                            <input type="text" class="span2" value="" data-slider-min="50" 
                                                   data-slider-max="1000" data-slider-step="25" 
                                                   data-slider-value="[50,450]" id="property-geo1" name="superficie"><br />
                                            <b class="pull-left color">50m</b> 
                                            <b class="pull-right color">1000m</b>
                                        </div>
                                        <br>
                                        <!-- End of  --> 
                                  </div><!-- end search-row -->
                                </div><!-- end div foncier -->

                                <div id="industriel" class="tab-pane fade">
                                  <h3>Menu Industriel</h3>
                                  <p>En attente d'information venant d'Agentpoint</p>
                                </div><!-- end id industriel -->

                                 <div id="commercial" class="tab-pane fade">
                                  <h3>Menu Commercial</h3>
                                  <p>En attente d'information venant d'Agentpoint</p>
                                </div><!-- end id industriel -->

                              </div><!-- end content search-bar -->  
                            </form>
                        </div><!-- end barre de recherche -->
                    </div>
                </div>
            </div>
        </div>


            <div class="container"> 
                <header class="section-header text-center"> 
                    <div class="container"></br></br>
                        <h3 class="pull-left">{{$categorie}} - <small> {{$requete->total()}} produits enregistrées </small></h3> 
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
                              <li class="breadcrumb-item active">{{$categorie}}</li>
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
                                            <button class="btn btn-default btn-price pull-right">
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

@include('front.footer-bar')