@include('front.header')
 <div id="site-banner" class="text-center clearfix" style="padding-top: 250px">
            <div class="container">
                <h1 class="title wow slideInLeft">Blog</h1>
                <ol class="breadcrumb wow slideInRight">
                    <li><a href="accueil.php">Accueil</a></li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div> 
 <div class="container">
                <div class="col-sm-8"> 
                	@foreach($collection as $collections)
                    <article class="blog-post single-post"> 
                        <figure class="feature-image"> 
                            <img data-action="zoom" src="{{url('/images/'.$collections->urlimage1)}}" alt="Blog Image"> 
                        </figure>                         
                        <div class="post-footer post-meta clearfix">
                            <time class="updated btn btn-warning" datetime="2017-02-01T13:58Z">
                                <p>{{date('j F')}}</p>
                            </time>                             
                            <h4 class="entry-title">{{$collections->titre}}</h4> 
                            <span class="author">Publié par&nbsp;<a href="#">Admin</a> </span> 
                            <span>Commentaire<a href="#" style="font-size: inherit; background-color: rgb(255, 255, 255);">&nbsp;23</a><span style="float: none;">&nbsp;</span></span>
                        </div>                         
                        <div class="contents clearfix"> 
                            {!! $collections->contenu !!}                                                          
                        </div>                         
                        <footer class="post-footer post-footer-meta clearfix"> 
                            <div class="tags pull-left">
                                <span>Tags:</span> 
                                {!! $collections->tag !!}
                            </div>                             
                            <nav class="social-share">
                                <span>Partagé:</span> 
                                <ul class="social-icons clearfix"> 
                                    <li>
                                        <a href="https://twitter.com/intent/tweet/?url={{Request::url()}}&text={{$collections->titre}}&via=investirenaustralie.com" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>                                     
                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>                                     
                                    <li>
                                        <a href="https://pinterest.com/pin/create/button/?url={{Request::url()}}&media={{url('/images/'.$collections->urlimage1)}}&description={{$collections->titre}}" target="_blank"><i class="fa fa-pinterest"></i></a>
                                    </li>                                     
                                    <li>
                                        <a href="https://plus.google.com/share?url={{Request::url()}}&hl=fr"><i class="fa fa-google"></i></a>
                                    </li>                                     
                                </ul>
                            </nav>                             
                        </footer>                         
                    </article>  
                    @endforeach                   
                    <section id="comments"> 
                        <h4 id="comments-title">Commentaires</h4> 
                        <ol class="commentlist"> 
                            <li class="comment even thread-even depth-1"> 
                                <article class="clearfix"> 
                                    <a class="author-img" href="#"> 
                                        <img src="{{link_img('assets/images/avatar.jpg')}}" alt="Author">
                                    </a>                                     
                                    <div class="comment-detail-wrap"> 
                                        <div class="comment-meta clearfix"> 
                                            <h5 class="author"> <cite class="fn"> <cite class="fn"> <a href="#" rel="external nofollow" class="url">Gloria Richards</a> </cite> </cite> </h5> 
                                            <time datetime="2013-08-01T19:22:45+00:00"> 
                                                August 1, 2013 at 7:22 pm
											</time>                                             
                                        </div>                                         
                                        <div class="comment-body"> 
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p> 
                                            <a rel="nofollow" class="comment-reply-link btn btn-default btn-3d" href="#" data-hover="Reply">Repondre</a> 
                                        </div>                                         
                                    </div>
                                </article>    
                                <!-- .children -->                                 
                            </li>
                            <!-- #comment-## -->                             
                            <li> 
                                <article class="clearfix"> 
                                    <a class="author-img" href="#"> 
                                        <img src="{{link_img('assets/images/avatar.jpg')}}" alt="Author">
                                    </a>                                     
                                    <div class="comment-detail-wrap"> 
                                        <div class="comment-meta clearfix"> 
                                            <h5 class="author"> <cite class="fn"> <cite class="fn"> <a href="#" rel="external nofollow" class="url">Gloria Richards</a> </cite> </cite> </h5> 
                                            <time datetime="2013-08-01T19:22:45+00:00"> 
                                                August 1, 2013 at 7:22 pm
</time>                                             
                                        </div>                                         
                                        <div class="comment-body"> 
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p> 
                                            <a rel="nofollow" class="comment-reply-link btn btn-default btn-3d" href="#" data-hover="Reply">Repondre</a> 
                                        </div>                                         
                                    </div>                                     
                                </article>                                 
                                <!-- end of comment -->                                 
                            </li>
                            <!-- #comment-## -->                             
                            <!-- #comment-## -->                             
                        </ol>                         
                        <div id="respond" class="comment-respond contact-form"> 
                            <h4 id="reply-title" class="comment-reply-title">Laissez un commentaire</h4> 
                            <form action="#" method="post" id="commentform" class="comment-form"> 
                                <p class="form-author common">
                        			<input id="author" name="name" type="email" placeholder="Votre Nom*" aria-required="true" required="required">
                    			</p>
                                 <p class="form-author common">
                         			<input id="author" name="name" type="email" placeholder="Votre email *" aria-required="true" required="required">
                    			</p>
                                <p class="form-comment"><textarea id="comment" name="comment" placeholder="Commentaire" cols="45" rows="8" aria-required="true" required="required"></textarea></p> 
                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit-btn btn btn-default btn-lg" value="Poster un Commentaire"></p> 
                            </form>                             
                        </div>
                        <!-- #respond -->                         
                    </section>                     
                </div>
                <div class="col-lg-4 col-md-4"> 
                    <div id="property-sidebar"> 
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

@include('front.footer')