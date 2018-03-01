@php
    affichageHeader();
@endphp

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- End of nav bar -->

        <div id="slider-area">
            <div class="main-slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                    <div class="slider"><img src="{{link_img('assets/images/slider/1.jpg')}}" alt="Slide"></div>
                    <div class="slider"><img src="{{link_img('assets/images/slider/2.jpg')}}" alt="Slide"></div>
                    <div class="slider"><img src="{{link_img('assets/images/slider/3.jpg')}}" alt="Slide"></div>
                </div>
              
            </div>
        <!-- property area -->
            @foreach($contenus as $content)
            <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-md-7">
                      <section class="property-meta-wrapper common text-center bg-info">
                        <div class="entry-title">
                            <h3 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                                    {!! $content->titre1 !!}
                            </h3>
                        </div>
                          </br>
                          <div class="property-single-metax" >
                             {!! $content->paragraphe1 !!}
                          </div>
                      </section>
                      <section class="property-meta-wrapper common text-center bg-info">
                        <div class="entry-title">
                            <h3 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                              ESPACES PUBLICITES
                            </h3>
                        </div>
                        </br>
                        <div class="property-single-metax-center" >
                            <p class="wow slideInRight" style="visibility: hidden; animation-name: none;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
                                    labore et dolore magna aliquan ut enim ad minim veniam.</p>
                            <a class="btn" href="#">
                                <img src="{{link_img('assets/images/iso-btn.png')}}" alt="ISO Button">
                            </a>
                            <a class="btn" href="#">
                                <img src="{{link_img('assets/images/playstore-btn.png')}}" alt="Play Store Button">
                            </a>
                        </div>
                      </section>
                      <section class="property-video common text-center bg-info">
                          <div class="entry-title">
                              <h3 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                                {!! $content->titre2 !!}
                              </h3>
                          </div>
                          <div class="property-single-metax">
                                  {!! $content->parapgraphe2 !!}
                          </div>
                          <br>
                          <iframe src="{{ $content->iframe }}" allowfullscreen=""></iframe>
                      </section>
                      <section class="property-meta-wrapper common text-center bg-info">
                        <div class="entry-title">
                          <h3 class="title wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                                  {!! $content->titre3 !!}
                          </h3>
                        </div>
                        <br>
                          <div class="row">
                              <div class="col-md-3 col-xs-6">
                                  <div class="feature clearfix">
                                      <i class="icon"><img src="{{link_img('assets/images/features/1.png')}}" alt="Feature Icon"></i>
                                      <h6 class="">Etape 1</h6>
                                      <p> {!! $content->etape1 !!} </p>
                                  </div>
                              </div>
                              <div class="col-md-3 col-xs-6">
                                  <div class="feature clearfix">
                                      <i class="icon"><img src="{{link_img('assets/images/features/2.png')}}" alt="Feature Icon"></i>
                                      <h6 class="">Etape 2</h6>
                                      <p> {!! $content->etape2 !!} </p>
                                  </div>
                              </div>
                              <div class="col-md-3 col-xs-6">
                                  <div class="feature clearfix">
                                      <i class="icon"><img src="{{link_img('assets/images/features/3.png')}}" alt="Feature Icon"></i>
                                      <h6 class="">Etape 3</h6>
                                      <p> {!! $content->etape3 !!} </p>
                                  </div>
                              </div>
                              <div class="col-md-3 col-xs-6">
                                  <div class="feature clearfix">
                                      <i class="icon"><img src="{{link_img('assets/images/features/4.png')}}" alt="Feature Icon"></i>
                                      <h6 class="">Etape 4</h6>
                                      <p> {!! $content->etape4 !!} </p>
                                  </div>
                              </div>
                          </div>
                          <div style="text-align:justify">
                              <p> {!! $content->description1 !!} </p>
                              <p> {!! $content->description2 !!} </p>
                              <p> {!! $content->description3 !!} </p>
                              <p> {!! $content->description4 !!} </p>
                          </div>
                      </section>
                      @endforeach
                      <!-- end content -->
                  </div>

                  <!-- side bar -->
                  <div class="col-lg-4 col-md-5">
                      <div id="property-sidebar">
                          <section class="property-meta-wrapper common text-center bg-info">
                                <div class="col-md-12">
                                    <div class="content-box-header">
                                      <a href="#" class="btn btn-primary btn-lg" role="button" title="Lien"> Agences partenaires locales</a>
                                    </div>
                                    <p>
                                      <div class="panel-title">Espaces publicitaires</div>
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

                  <!-- LISTE PRODUIT -->
                  <div class="container">
                    <header class="section-header text-center">
                        <div class="container">
                          <h3 class="pull-left">Derniers produits enregistrés </h3>
                          <div class="pull-right">
                            <div class="property-sorting pull-left">
                                <label for="property-sort-dropdown"> Trier par:   </label>
                                <select name="property-sort-dropdown" id="property-sort-dropdown">
                                    <option value="">Default Order</option>
                                    <option value="by_date">By date</option>
                                    <option value="by_price">By price</option>
                                </select>
                              </div>
                            <p class="pull-left layout-view">
                              Vue:
                                <i class="fa fa-th selected" data-layout="4"></i>
                                <i class="fa fa-list-ul" data-layout="12"></i>
                            </p>
                          </div>
                        </div>
                    </header>
                  </div>
                  <div class="row">
                    <!-- <div class="col-lg-8 col-md-7"> -->
                      <div class="row" id="txtHint">
                        @foreach($produits as $produit)
                        <div class="col-lg-4 col-sm-6 layout-item-wrap">
                            <article class="property layout-item clearfix">
                                <figure class="feature-image">
                                    <a class="clearfix zoom" href="single-property.html">
                                        <img data-action="zoom" src="{{url('/images/'.$produit->urlimage1)}}" alt="..." width="600" height="450">
                                    </a>
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
                                    <!-- <div class="author-box clearfix">
                                    </div> -->
                                </div>
                            </article>
                        </div>
                        @endforeach
                      </div>
                    <!-- </div> -->
                  </div>
                  <section class="property-meta-wrapper common text-center bg-info">
                     <h2 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                             ESPACES PUBLICITES
                     </h2>
                     <p class="wow slideInRight" style="visibility: hidden; animation-name: none;">
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
                                 labore et dolore magna aliquan ut enim ad minim veniam.
                     </p>
                     <a class="btn" href="#">
                         <img src="{{link_img('assets/images/iso-btn.png')}}" alt="ISO Button">
                     </a>
                     <a class="btn" href="#">
                         <img src="{{link_img('assets/images/playstore-btn.png')}}" alt="Play Store Button">
                     </a></br></br>
                   </section>

                   <!-- ARTICLE ENREGISTREES -->
                   <div class="container">
                     <header class="section-header text-center">
                         <div class="container">
                           <h3 class="pull-left">Derniers Artiles enregistrés </h3>
                           <div class="pull-right">
                             <div class="property-sorting pull-left">
                                 <label for="property-sort-dropdown"> Trier par:   </label>
                                 <select name="property-sort-dropdown" id="property-sort-dropdown">
                                     <option value="">Default Order</option>
                                     <option value="by_date">By date</option>
                                     <option value="by_price">By price</option>
                                 </select>
                               </div>
                             <p class="pull-left layout-view">
                               Vue:
                                 <i class="fa fa-th selected" data-layout="4"></i>
                                 <i class="fa fa-list-ul" data-layout="12"></i>
                             </p>
                           </div>
                         </div>
                     </header>
                   </div>
                   <div class="row">
                     <!-- <div class="col-lg-8 col-md-7"> -->
                       <div class="row" id="txtHint">
                         @foreach($listesblog as $key => $listes)
                         <div class="col-lg-4 col-sm-6 layout-item-wrap mix a{{$key}}">
                             <article class="property layout-item clearfix">
                                 <figure class="feature-image">
                                     <a href="single.html" class="clearfix zoom">
                                       <img data-action="zoom" src="{{url('images/'.$listes->urlimage1)}}" alt="..." width="600" height="450">
                                     </a>
                                 </figure>
                                 <div class="property-contents clearfix">
                                     <header class="property-header clearfix">
                                         <div class="pull-left">
                                             <h5 class="entry-title"><a href="{{url('blog/detail/'.$listes->slug)}}">{{$listes->titre}}</a></h5>
                                             <div class="contents clearfix">
                                                  {!!$listes->contenu!!}
                                            </div>
                                         </div>
                                     </header>
                                         <a href="{{url('produit/'.$produit->slug)}}" class="btn btn-default btn-price pull-right" data-hover="Détails">
                                             <strong>{{$produit->prix}}</strong>
                                         </a>
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

    @include('front.footer-bar')
