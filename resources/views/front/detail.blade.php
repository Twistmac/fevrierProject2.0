<?php affichageHeader()

?>


<script>
    function saveRechJS() {
        var form = document.getElementById("saveRechForm");
        form.submit();
    }
    function putFavorisJS() {
        var form = document.getElementById("putFavorisForm");
        form.submit();
    }
</script>
		
        <div id="property-single">
        <div id="main-slider">
            <div class="slide"><img src="{{link_img('assets/images/slider/1.jpg')}}" alt="Slide"></div>
            <div class="slide"><img src="{{link_img('assets/images/slider/2.jpg')}}" alt="Slide"></div>
            <div class="slide"><img src="{{link_img('assets/images/slider/3.jpg')}}" alt="Slide"></div>
            <div class="slide"><img src="{{link_img('assets/images/slider/4.jpg')}}" alt="Slide"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                	<!-- start content -->
                	@foreach($detailproduit as $details)
                	
                	<!-- content caroussel -->
                    <section class="property-meta-wrapper common">
						  <div id="myCarousel" class="carousel slide" data-ride="carousel">
						    <!-- Indicators -->
						    <ol class="carousel-indicators">
						      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						      <li data-target="#myCarousel" data-slide-to="1"></li>
						      <li data-target="#myCarousel" data-slide-to="2"></li>
						    </ol>
						    <!-- Wrapper for slides -->
						    <div class="carousel-inner">
						      <div class="item active">
						        <img src="{{url('/images/'.$details->urlimage1)}}" alt="..." style="width:100%;">
						      </div>
						      <div class="item">
						        <img src="{{url('/images/'.$details->urlimage2)}}" alt="..." style="width:100%;">
						      </div>
						      <div class="item">
						        <img src="{{url('/images/'.$details->urlimage3)}}" alt="..." style="width:100%;">
						      </div>
						    </div>
						    <!-- Left and right controls -->
						    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
						      <span class="glyphicon glyphicon-chevron-left"></span>
						      <span class="sr-only">Previous</span>
						    </a>
						    <a class="right carousel-control" href="#myCarousel" data-slide="next">
						      <span class="glyphicon glyphicon-chevron-right"></span>
						      <span class="sr-only">Next</span>
						    </a>
						  </div>
                    </section>

                    <!-- end content caroussel -->
                    <section class="property-meta-wrapper common">
                    <p>
                      <button class="btn btn-warning"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> contacter l'administrateur</button>
                      <button class="btn btn-info" onclick="saveRechJS() "><i class="fa fa-floppy-o" aria-hidden="true"></i> Sauvegarder la recherche</button>
                      <button class="btn btn-success"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></i> choisir un APL</button>
                    </p>
                    </section>

                        <!-- VALEUR A RECUPERER -->
                    <form action="{!! route('saveRecherche') !!}" id="saveRechForm" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="login" value="{!! session('login') !!}">
                        <input type="hidden" name="idproduit" value="{!! $details->idproduit !!}">
                    </form>
                        <!-- ------- -valeur pour favoris - -  -- - - - - -->
                        <form action="{!! route('putFavoris') !!}" id="putFavorisForm" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="login" value="{!! session('login') !!}">
                            <input type="hidden" name="idproduit" value="{!! $details->idproduit !!}">
                        </form>

                    <section class="property-meta-wrapper common">
                        <h3 class="entry-title">{{$details->nom}}</h3>
                        <div class="property-single-meta">
                            <ul class="clearfix">
                                <li><span>Superficie:</span> {{$details->surface}}</li>
                                <li><span>Réference_ID:</span> {{$details->idproduit}}</li>
                                <li><span>Chambres:</span> {{$details->ch}}</li>
                                <li><span>Salle de bain:</span> {{$details->sdb}}</li>
                                <li><span>Garage:</span> {{$details->garage}}</li>
                                <li><span>Publication du</span> 2016-01-09</li>
                                <li><span>Prix:</span> {{$details->prix}}</li>
                                <li><span>Parking:</span> {{$details->parking}}</li>
                                <li><span>Piscine:</span> {{$details->piscine}}</li>
                                <li><span>Adresse:</span> {{$details->adresse}}</li>
                            </ul>
                        </div>
                    </section>
                    <section class="property-contents common">
                        <div class="entry-title clearfix">
                            <h4 class="pull-left">Description </h4><a class="pull-right print-btn" href="javascript:window.print()">Print This Property <i class="fa fa-print"></i></a>
                        </div>
                        <p>{!! $details->description !!}</p>
                    </section>
                    <section class="property-single-features common clearfix">
                        <h4 class="entry-title">Les différents critères</h4>
                            {!! $details->autres !!}
                    </section>
                    <section class="property-nearby-places common">
                        <h4 class="entry-title">Agglomérations</h4>
                        {!! $details->iframe !!}
                    </section>
                   	@endforeach
                    <!-- endcontent -->

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
                                @foreach($all as $a)

                                <div class="col-lg-4 col-sm-6 layout-item-wrap">
                                    <article class="property layout-item clearfix"> 
                                        <figure class="feature-image"> 
                                            <a class="clearfix zoom" href="#">
                                                <img data-action="zoom" src="{{url('/images/'.$a->urlimage1)}}" alt="Property Image">
                                            </a>                         
                                            <span class="btn btn-warning btn-sale">A vendre</span> 
                                        </figure>                     
                                        <div class="property-contents clearfix"> 
                                            <header class="property-header clearfix"> 
                                                <div class="pull-left"> 
                                                    <h6 class="entry-title"><a href="{{$a->slug}}">{{$a->nom}}</a></h6> 
                                                    <span class="property-location"><i class="fa fa-map-marker"></i>{{$a->cite.','.$a->pays}}</span> 
                                                </div>   
                                                </header>                           
                                                <button class="btn btn-default btn-price pull-right" data-hover="Détails">
                                                    <strong>{{$a->prix}}</strong>
                                                </button>                
                                            <div class="property-meta clearfix"> 
                                                <span><i class="fa fa-arrows-alt"></i> {{$a->surface}}</span> 
                                                <span><i class="fa fa-bed"></i> {{$a->ch}}</span> 
                                                <span><i class="fa fa-bathtub"></i> {{$a->sdb}}</span> 
                                                <span><i class="fa fa-cab"></i> {{$a->garage}}</span> 
                                            </div>                         
                                            <div class="contents clearfix"> 
                                                <p>{{$a->description}}</p> 
                                            </div>                         
                                        </div>                     
                                    </article>                 
                                </div>

                                @endforeach
                                <!-- end section products -->
                                 
                            </div>         
                            <ul id="pagination" class="text-center clearfix"> 
                                <li class="disabled">
                                    <a href="#">Précedent</a>
                                </li>             
                                <li>
                                    <a href="#">2</a>
                                </li>             
                                <li>
                                    <a href="#">3</a>
                                </li>             
                                <li>
                                    <a href="#">4</a>
                                </li>             
                                <li>
                                    <a href="#">Suivant</a>
                                </li>             
                            </ul>         
                        </div>     
</section>
                </div>
                 <div class="col-lg-4 col-md-5"> 
                    <div id="property-sidebar"> 
                        <section class="property-meta-wrapper common text-center bg-info"> 
                            <h2 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                                ESPACES PUBLICITES</h2> 
                            <p class="wow slideInRight" style="visibility: hidden; animation-name: none;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br> 
                                    labore et dolore magna aliquan ut enim ad minim veniam.</p> 
                        </section>                         
                        <section class="property-meta-wrapper common text-center bg-info"> 
                            <h2 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                                ESPACES PUBLICITES</h2> 
                            <p class="wow slideInRight" style="visibility: hidden; animation-name: none;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br> 
                                    labore et dolore magna aliquan ut enim ad minim veniam.</p> 
                        </section> 
                         <section class="widget property-taxonomies clearfix"> 
                            <p>
                              <button class="btn btn-info"><i class="fa fa-share-alt" aria-hidden="true"></i> Partager</button><br/>
                            </p> 
                            <p>
                              <button class="btn btn-success"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> contacter l'agence</button><br/>
                            </p>
                            <p>
                              <button class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i> je veux acheter ce produit</button><br/>
                            </p>
                            <p>
                              <button class="btn btn-primary" onclick="putFavorisJS()"><i class="fa fa-star" aria-hidden="true"></i> Favoris</button><br/>
                            </p>                           
                        </section>              
                        </section>                        
                        <section class="widget recent-properties clearfix"> 
                            <h5 class="title">Récents</h5> 
                            <div class="property clearfix"> 
                                <a href="#" class="feature-image zoom">
                                    <img data-action="zoom" src="{{link_img('assets/images/property/1.jpg')}}" alt="Property Image">
                                </a>                                 
                                <div class="property-contents"> 
                                    <h6 class="entry-title"><a href="single-property.html">Maison familiale luxe</a></h6> 
                                    <span class="btn-price">$389.000</span> 
                                    <div class="property-meta clearfix"> 
                                        <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> 
                                        <span><i class="fa fa-bed"></i> 3 Beds</span> 
                                        <span><i class="fa fa-bathtub"></i> 3 Baths</span> 
                                        <span><i class="fa fa-cab"></i> Yes</span> 
                                    </div>                                     
                                </div>                                 
                            </div>                             
                            <div class="property clearfix"> 
                                <a href="#" class="feature-image zoom">
                                    <img data-action="zoom" src="{{link_img('assets/images/property/2.jpg')}}" alt="Property Image">
                                </a>                                 
                                <div class="property-contents"> 
                                    <h6 class="entry-title"><a href="single-property.html">Maison familiale luxe</a></h6> 
                                    <span class="btn-price">$389.000</span> 
                                    <div class="property-meta clearfix"> 
                                        <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> 
                                        <span><i class="fa fa-bed"></i> 3 Beds</span> 
                                        <span><i class="fa fa-bathtub"></i> 3 Baths</span> 
                                        <span><i class="fa fa-cab"></i> Yes</span> 
                                    </div>                                     
                                </div>                                 
                            </div>                             
                            <div class="property clearfix"> 
                                <a href="#" class="feature-image zoom">
                                    <img data-action="zoom" src="{{link_img('assets/images/property/3.jpg')}}" alt="Property Image">
                                </a>                                 
                                <div class="property-contents"> 
                                    <h6 class="entry-title"><a href="single-property.html">Maison familiale luxe</a></h6> 
                                    <span class="btn-price">$389.000</span> 
                                    <div class="property-meta clearfix"> 
                                        <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span> 
                                        <span><i class="fa fa-bed"></i> 3 Beds</span> 
                                        <span><i class="fa fa-bathtub"></i> 3 Baths</span> 
                                        <span><i class="fa fa-cab"></i> Yes</span> 
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
                    @for($a=1,$i=0;$i<count($listblog);$i++)
                    <div class='col-md-4 col-sm-6 layout-item-wrap mix a{{$a}}'><article class="blog-post clearfix layout-item">
                        <figure class="feature-image">
                            <a href="single.html" class="clearfix zoom"><img data-action="zoom" src="{{url('images/'.$listblog[$i]->urlimage1)}}" alt="..."></a>
                            <time class="updated btn btn-warning" datetime="2017-02-01T13:58Z">{{date('j F')}}</time>
                        </figure>
                        <div class="post-contents clearfix">
                            <h5 class="entry-title"><a href="{{url('blog/detail/'.$listblog[$i]->slug)}}">{{$listblog[$i]->titre}}</a></h5>
                            <div class="contents clearfix">
                                {!!$listblog[$i]->contenu!!}
                            </div>
                            <footer class="post-footer post-meta clearfix">
                                <span class="author">Poster par <a href="#"> Admin</a>  </span>
                                <span>Comment <a href="#"> 23</a> </span>
                                <a href="{{url('blog/detail/'.$listblog[$i]->slug)}}" class="more">Continuer la lecture <i class="fa fa-angle-double-right"></i></a>
                            </footer>
                        </div>
                    </article>
                    </div>
                    @endfor
            </div>
            </div>
            {{$listblog->links()}}
        </div>
</div>

@include('front.footer')