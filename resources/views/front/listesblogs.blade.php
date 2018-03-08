<<<<<<< HEAD
<?php affichageHeader(); ?>
=======


<div class="main-slider-wrapper clearfix content corps">
    
        <div id="site-banner" class="text-center clearfix">
                <div class="container">
                    <h1 class="title wow slideInLeft">Blogs</h1>
                    <ol class="breadcrumb wow slideInRight">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li class="active">Blog</li>
                    </ol>
                </div>
            </div>
    </div>         
        <div id="blog-listing" class="grid-style"> 
            <header class="section-header text-center"> 
                <div class="container"> 
                    <h2 class="pull-left">Blog</h2> 
                    <div class="pull-right"> 
                        <div class="property-sorting pull-left"> 
                            <label for="property-sort-dropdown"> Trier par:   </label>                             
                            <select name="property-sort-dropdown" id="property-sort-dropdown"> 
                                <option value="croissant">Croissant </option>                                 
                                <option value="décroissant">Décroissant</option>                                 
                            </select>
                        </div>                         
                        <p class="pull-left layout-view"> Vue: <i class="fa fa-th-large selected" data-layout="6"></i> <i class="fa fa-list-ul" data-layout="12"></i> </p> 
                    </div>                     
                </div>                 
            </header>  


            <div class="container">
                <div class="col-lg-9 col-md-8">
                    <div class="row"> 
                        <div id="filter-container">

                        	@foreach($listesblog as $lists)
                            <div class="col-md-6 layout-item-wrap mix a1">
                                <article class="blog-post clearfix layout-item"> 
                                    <figure class="feature-image"> 
                                        <a href="#" class="clearfix zoom">
                                            <img data-action="zoom" src="{{url('/images/'.$lists->urlimage1)}}" alt="Blog Image">
                                        </a>                                         
                                        <time class="updated btn btn-warning" datetime="2017-02-01T13:58Z">{{date('j F')}}</time>            
                                    </figure>                                     
                                    <div class="post-contents clearfix">
                                        <h4 class="entry-title"><a href="{{url('blog/detail/'.$lists->slug)}}">{{$lists->titre}}</a></h4> 
                                        <div class="contents clearfix"> 
                                            {!! $lists->contenu !!}
                                        </div>                                         
                                        <footer class="post-footer post-meta clearfix"> 
                                            <span class="author">Posté par <a href="#"> Admin</a> </span> 
                                            <span>Comment <a href="#"> 23</a> </span> 
                                            <a href="{{url('blog/detail/'.$lists->slug)}}" class="more">Continuer la lecture <i class="fa fa-angle-double-right"></i></a> 
                                        </footer>
                                    </div>                                     
                                </article>
                            </div>
                            @endforeach
                            
                        </div>                         
                    </div>                     
                    {{$listesblog->links()}}   
                </div>
                <div class="col-lg-3 col-md-4"> 
                    <div id="property-sidebar"> 
                        <section class="property-meta-wrapper common text-center bg-info"> 
                            <div class="col-md-12">
                            <div class="content-box-header">
                                <div class="panel-title">Espaces publicitaires</div>
                            </div>
                             <p>
                              <a href="APL.php" class="btn btn-success btn-sm"> Agences Partenaires Locales </a><br/>
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
                                    <img data-action="zoom" src="assets/images/property/1.jpg" alt="Property Image">
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
                                    <img data-action="zoom" src="assets/images/property/2.jpg" alt="Property Image">
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
                                    <img data-action="zoom" src="assets/images/property/3.jpg" alt="Property Image">
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

@include('front.footer')