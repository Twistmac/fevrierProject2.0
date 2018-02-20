@php
    affichageHeader();
@endphp

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- End of nav bar -->

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

        <!-- property area -->
        @foreach($contenus as $content)
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <section class="property-meta-wrapper common text-center bg-info">
                        <h3 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                                {!! $content->titre1 !!}</h3></br>
                        <div class="property-single-metax">
                           {!! $content->paragraphe1 !!}
                        </div>
                    </section>
                    <section class="property-meta-wrapper common text-center bg-info">
                        <h3 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                                ESPACES PUBLICITES</h3>
                        <p class="wow slideInRight" style="visibility: hidden; animation-name: none;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
                                    labore et dolore magna aliquan ut enim ad minim veniam.</p>
                        <a class="btn" href="#">
                            <img src="{{link_img('assets/images/iso-btn.png')}}" alt="ISO Button">
                        </a>
                        <a class="btn" href="#">
                            <img src="{{link_img('assets/images/playstore-btn.png')}}" alt="Play Store Button">
                        </a>
                    </section>
                    <section class="property-video common text-center">
                        <h3 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                                {!! $content->titre2 !!} </h3>
                        <div class="property-single-metax">
                                {!! $content->parapgraphe2 !!}    
                        </div>
                        <br>
                        <iframe src="{{ $content->iframe }}" allowfullscreen=""></iframe>
                    </section>
                    <section class="property-meta-wrapper common text-center bg-info">
                        <h2 class="title wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                                {!! $content->titre3 !!} </h2>
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="feature clearfix">
                                    <i class="icon"><img src="{{link_img('assets/images/features/1.png')}}" alt="Feature Icon"></i>
                                    <h6 class="entry-title">Etape 1</h6>
                                    <p> {!! $content->etape1 !!} </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="feature clearfix">
                                    <i class="icon"><img src="{{link_img('assets/images/features/2.png')}}" alt="Feature Icon"></i>
                                    <h6 class="entry-title">Etape 2</h6>
                                    <p> {!! $content->etape2 !!} </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="feature clearfix">
                                    <i class="icon"><img src="{{link_img('assets/images/features/3.png')}}" alt="Feature Icon"></i>
                                    <h6 class="entry-title">Etape 3</h6>
                                    <p> {!! $content->etape3 !!} </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="feature clearfix">
                                    <i class="icon"><img src="{{link_img('assets/images/features/4.png')}}" alt="Feature Icon"></i>
                                    <h6 class="entry-title">Etape 4</h6>
                                    <p> {!! $content->etape4 !!} </p>
                                </div>
                            </div>
                        </div>
                        <div class="text-left">
                            <p> {!! $content->description1 !!} </p>
                            <p> {!! $content->description2 !!} </p>
                            <p> {!! $content->description3 !!} </p>
                            <p> {!! $content->description4 !!} </p>
                        </div>
                    </section>
                    @endforeach
                    <!-- end content -->

                    <section id="property-listing"> 
                        <header class="section-header text-center"> 
                            <div class="container"> 
                                <h2 class="pull-left">Derniers produits enregistrés</h2> 
                                <div class="pull-right"> 
                                    <div class="property-sorting pull-left"> 
                                        <label for="property-sort-dropdown"> Trier par:   </label>                     
                                        <select name="property-sort-dropdown" id="property-sort-dropdown"> 
                                            <option value="">Default Order</option>                         
                                            <option value="by_date">By date</option>                         
                                            <option value="by_price">By price</option>                         
                                        </select>                     
                                    </div>                 
                                    <p class="pull-left layout-view"> View as: <i class="fa fa-th selected" data-layout="4"></i> <i class="fa fa-th-large" data-layout="6"></i><i class="fa fa-list-ul" data-layout="12"></i> </p> 
                                </div>             
                            </div>         
                        </header>  
                           
                        <div class="container section-layout"> 
                            <div class="row"> 

                                <!-- start section products -->
                                @foreach($produits as $produit)

                                <div class="col-lg-4 col-sm-6 layout-item-wrap">
                                    <article class="property layout-item clearfix"> 
                                        <figure class="feature-image"> 
                                            <a class="clearfix zoom" href="#">
                                                <img data-action="zoom" src="{{url('/images/'.$produit->urlimage1)}}" alt="Property Image">
                                            </a>                         
                                            <span class="btn btn-warning btn-sale">A vendre</span> 
                                        </figure>                     
                                        <div class="property-contents clearfix"> 
                                            <header class="property-header clearfix"> 
                                                <div class="pull-left"> 
                                                    <h6 class="entry-title"><a href="{{url('produit/'.$produit->slug)}}">{{$produit->nom}}</a></h6> 
                                                    <span class="property-location"><i class="fa fa-map-marker"></i>{{$produit->cite.','.$produit->pays}}</span> 
                                                </div>   
                                                </header>    
                                                <a href="{{url('produit/'.$produit->slug)}}" class="btn btn-default btn-price pull-right" data-hover="Détails">
                                                    <strong>{{$produit->prix}}</strong>
                                                </a>                
                                            <div class="property-meta clearfix"> 
                                                <span><i class="fa fa-arrows-alt"></i> {{$produit->surface}}</span> 
                                                <span><i class="fa fa-bed"></i> {{$produit->ch}}</span> 
                                                <span><i class="fa fa-bathtub"></i> {{$produit->sdb}}</span> 
                                                <span><i class="fa fa-cab"></i> {{$produit->garage}}</span> 
                                            </div>                         
                                            <div class="contents clearfix"> 
                                                <p>{{$produit->description}}</p> 
                                            </div>                         
                                        </div>                     
                                    </article>                 
                                </div>

                                @endforeach
                                <!-- end section products -->     
                    </section>

                    <section class="property-meta-wrapper common text-center bg-info">
                        <h2 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                                ESPACES PUBLICITES</h2>
                        <p class="wow slideInRight" style="visibility: hidden; animation-name: none;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
                                    labore et dolore magna aliquan ut enim ad minim veniam.</p>
                        <a class="btn" href="#">
                            <img src="{{link_img('assets/images/iso-btn.png')}}" alt="ISO Button">
                        </a>
                        <a class="btn" href="#">
                            <img src="{{link_img('assets/images/playstore-btn.png')}}" alt="Play Store Button">
                        </a></br></br>
                    </section>

                     <div id="blog-listing" class="grid-style">
                            <section class="section-header text-center">
                                <div class="container">
                                <h2 class="pull-left">Les Derniers articles enregistrés</h2> 
                                    <div class="pull-right">
                                        <div class="property-sorting pull-left">
                                            <label for="property-sort-dropdown"> Sort by:   </label>
                                            <select name="property-sort-dropdown" id="property-sort-dropdown">
                                                <option value="">Default Order</option>
                                                <option value="by_date">By date</option>
                                                <option value="by_price">By price</option>
                                            </select>
                                        </div>
                                        <p class="pull-left layout-view"> View as: <i class="fa fa-th selected" data-layout="4"></i> <i class="fa fa-th-large" data-layout="6"></i><i class="fa fa-list-ul" data-layout="12"></i> </p>
                                    </div>
                                </div>
                            </section>


                            <div class="container">
                                <div class="row">
                                    <div id="filter-container">
                                        @foreach($listesblog as $key => $listes)
                                        <div class='col-md-4 col-sm-6 layout-item-wrap mix a{{$key}}'><article class="blog-post clearfix layout-item">
                                            <figure class="feature-image">
                                                <a href="single.html" class="clearfix zoom"><img data-action="zoom" src="{{url('images/'.$listes->urlimage1)}}" alt="..." width="600" height="450"></a>
                                                <time class="updated btn btn-warning" datetime="2017-02-01T13:58Z">{{date('j F')}}</time>
                                            </figure>
                                            <div class="post-contents clearfix">
                                                <h5 class="entry-title"><a href="{{url('blog/detail/'.$listes->slug)}}">{{$listes->titre}}</a></h5>
                                                <div class="contents clearfix">
                                                    {!!$listes->contenu!!}
                                                </div>
                                                <footer class="post-footer post-meta clearfix">
                                                    <span class="author">Poster par <a href="#"> Admin</a>  </span>
                                                    <span>Comment <a href="#"> 0</a> </span>
                                                    <a href="{{url('blog/detail/'.$listes->slug)}}" class="more">Continuer la lecture <i class="fa fa-angle-double-right"></i></a>
                                                </footer>
                                            </div>
                                        </article>
                                        </div>
                                        @endforeach
                                </div>
                                </div>
                                {{$listesblog->links()}}
                            </div>
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
                             <a href="#" class="btn btn-primary btn-lg" role="button" title="Lien"> Agences partenaires locales</a>
                            </p>
                            <div class="content-box-large box-with-header">
                                  <img src="{{link_img('assets/images/announcement-bg.jpg')}}" class="img-rounded" alt="Cinque Terre" width="604" height="236">
                                <br /><br />
                            </div>
                        </div>
                        </section>
                        <section class="property-meta-wrapper common text-center bg-info">
                            <div class="content-box-header">
                                <div class="panel-title">Espaces publicitaires</div>
                            </div>
                            <div class="content-box-large box-with-header">
                                  <img src="{{link_img('assets/images/announcement-bg.jpg')}}" class="img-rounded" alt="Cinque Terre" width="604" height="236">
                                <br /><br />
                            </div>
                        </section>
                        <section class="widget recent-properties clearfix">
                            <h5 class="title">Récents</h5>
                            @foreach($recents as $recent)
                            <div class="property clearfix">
                                <a href="#" class="feature-image zoom">
                                    <img data-action="zoom" src="{{url('images/'.$recent->urlimage1)}}" alt="Property Image">
                                </a>
                                <div class="property-contents">
                                    <h6 class="entry-title"><a href="{{ url('/produit'.$recent->slug) }}">{{ $recent->nom }}</a></h6>
                                    <span class="btn-price">{{ $recent->prix }}</span>
                                    <span class="property-location"><i class="fa fa-map-marker"></i>{{ $recent->cite }}</span>
                                    <div class="property-meta clearfix">
                                        <span><i class="fa fa-arrows-alt"></i> {{ $recent->surface }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </section>
                        <section class="widget property-taxonomies clearfix">
                            <h5 class="title">Status récents</h5>
                            <ul class="clearfix">
                                @foreach($counter as $compte)
                                    <li>
                                        <a href="#">{{ $compte['libelle'] }}</a>
                                        <span class="pull-right">{{ $compte['count'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </section>
                        <section class="property-meta-wrapper common text-center bg-info">
                            <div class="content-box-header">
                                <div class="panel-title">Espaces publicitaires</div>
                            </div>
                            <div class="content-box-large box-with-header">
                                  <img src="{{link_img('assets/images/announcement-bg.jpg')}}" class="img-rounded" alt="Cinque Terre" width="600" height="420">
                                <br /><br />
                            </div>
                        </section>
                        <section class="property-meta-wrapper common text-center bg-info">
                            <div class="content-box-header">
                                <div class="panel-title">Espaces publicitaires</div>
                            </div>
                            <div class="content-box-large box-with-header">
                                  <img src="{{link_img('assets/images/announcement-bg.jpg')}}" class="img-rounded" alt="Cinque Terre" width="604" height="236">
                                <br /><br />
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('front.footer-bar')