 @foreach($requete as $requetes)
                            <div class="col-md-6 layout-item-wrap">
                                <article class="property layout-item clearfix"> 
                                    <figure class="feature-image"> 
                                        <a class="clearfix zoom" href="#">
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
                            {{ $requete->links() }}
                            <!-- end pagination -->   
