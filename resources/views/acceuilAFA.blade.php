@include("header")


<div class="main-slider-wrapper clearfix content corps">
    <div id="main-slider">
        <div class="slide">
            <img src="{!! asset('images/slider/1.jpg') !!}" alt="Slide">
        </div>
        <div class="slide">
            <img src="{!! asset('images/slider/2.jpg') !!}" alt="Slide">
        </div>
        <div class="slide">
            <img src="{!! asset('images/slider/3.jpg') !!}" alt="Slide">
        </div>
        <div class="slide">
            <img src="{!! asset('images/slider/4.jpg') !!}" alt="Slide">
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
                                    <a href="#" aria-controls="apartments" role="tab" data-toggle="tab" id="adv-search-tab1"><i class="fa fa-building"> &nbsp; Résidentiel </i></a>
                                </li>
                                <li role="presentation" data-toggle="tooltip" data-placement="top" title="Foncier">
                                    <a href="#" aria-controls="houses" role="tab" data-toggle="tab" id="adv-search-tab2"><i class="fa fa-home"> &nbsp; Foncier</i></a>
                                </li>
                                <li role="presentation" data-toggle="tooltip" data-placement="top" title="Industriel">
                                    <a href="#" aria-controls="commercials" role="tab" data-toggle="tab" id="adv-search-tab3"><i class="fa fa-industry"> &nbsp; Industriel</i></a>
                                </li>
                                <li role="presentation" data-toggle="tooltip" data-placement="top" title="Commercial">
                                    <a href="#" aria-controls="lands" role="tab" data-toggle="tab" id="adv-search-tab4"><i class="fa fa-tree"></i> &nbsp; Commercial</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-1 visible-lg">
                            <ul class="nav nav-tabs adv-search-tabs" role="tablist">
                                <li class="active">
                                    <a href="#apartments" aria-controls="lands" role="tab" id="adv-search-hide" data-toggle="collapse"><i class="fa fa-chevron-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div id="apartments" class="panel-collapse collapse in" aria-expanded="true">
                            <form action="#" id="adv-search-form" class="clearfix">
                                <h4 class="text-center">Résidentiel</h4>
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

                                    <b> $10</b>
                                    <input id="ex3" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000000" data-slider-step="5" data-slider-value="[250000,600000]"/>
                                    <b> $1.000.000</b>


                                    <b> 10m2</b>
                                    <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,715]"/>
                                    <b>1000m2</b>

                                </fieldset>

                                <fieldset>

                                    <b> 1 chbrs</b>
                                    <input id="ex4" type="text" class="span2" value="" data-slider-min="1" data-slider-max="30" data-slider-step="5" data-slider-value="[4,20]"/>
                                    <b>30 chbrs</b>

                                </fieldset>

                                <fieldset>
                                    <button type="submit" class="btn btn-default btn-lg text-center"> Rechercher </button>
                                    <label><input type="checkbox" value="">Suburbs voisins</label>
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
                        </div><!-- /.collapse -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin barre de recherche     -->


</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-7">
            <section class="property-meta-wrapper common text-center bg-info">
                <h3 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    COMMUNAUTE FRANCOPHONE</h3>
                <div class="property-single-metax">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis 									neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin 									massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque 										fermentum nisl purus, et iaculis lectus pharetra sit amet.
                    <p><br></p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur 									ac sagittis neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi s									ollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. 										P	ellentesque 										fermentum nisl purus, et iaculis lectus pharetra sit amet.
                </div>
            </section>
            <section class="property-meta-wrapper common text-center bg-info">
                <h2 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    ESPACES PUBLICITES</h2>
                <p class="wow slideInRight" style="visibility: hidden; animation-name: none;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
                    labore et dolore magna aliquan ut enim ad minim veniam.</p>
                <a class="btn" href="#">
                    <img src="{!! asset('images/iso-btn.png') !!}" alt="ISO Button">
                </a>
                <a class="btn" href="#">
                    <img src="{!! asset('images/playstore-btn.png') !!}" alt="Play Store Button">
                </a>
            </section>
            <section class="property-video common text-center">
                <h3 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    Comment fonctionne le site Investir en Australie </h3>
                <div class="property-single-metax">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis 									neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin 									massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque 										fermentum nisl purus, et iaculis lectus pharetra sit amet.
                </div>
                <br>
                <iframe src="https://player.vimeo.com/video/179659075" allowfullscreen=""></iframe>
            </section>
            <section class="property-meta-wrapper common text-center bg-info">
                <h2 class="title wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                    Notre Mission / Notre Vision</h2>
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="feature clearfix">
                            <i class="icon"><img src="{!! asset('images/features/1.png') !!}" alt="Feature Icon"></i>
                            <h6 class="entry-title">Etape 1</h6>
                            <p>Parmi tous les produits affichés sur le site. séléctionnez celui ou ceux qui vous interessent</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="feature clearfix">
                            <i class="icon"><img src="{!! asset('images/features/2.png') !!}" alt="Feature Icon"></i>
                            <h6 class="entry-title">Etape 2</h6>
                            <p>Obtenez de l'agence les informations que vous souhaitez sur le ou les biens séléctionnés</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="feature clearfix">
                            <i class="icon"><img src="{!! asset('images/features/3.png') !!}" alt="Feature Icon"></i>
                            <h6 class="entry-title">Etape 3</h6>
                            <p>Après avoir fait votre choix, faites connaitre votre décision d'achat à l'agence francophone australienne chargée de la vente</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="feature clearfix">
                            <i class="icon"><img src="{!! asset('images/features/4.png') !!}" alt="Feature Icon"></i>
                            <h6 class="entry-title">Etape 4</h6>
                            <p>l'agence phrancophone australienne se charge des formalités juridiquesde transfert de propriété</p>
                        </div>
                    </div>
                </div>
                <div class="text-left">
                    <p>
                        <label class="entry-title">Etape 1</label> : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet.</p>
                    <p>
                        <label class="entry-title">Etape 2</label> : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet.</p>
                    <p>
                        <label class="entry-title">Etape 3</label> : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet.</p>
                    <p>
                        <label class="entry-title">Etape 4</label> : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est. Aenean elementum, erat at aliquet hendrerit, elit nisl posuere tortor, id suscipit diam dui sed nisi. Morbi sollicitudin massa vel tortor consequat, eget semper nisl fringilla. Maecenas at hendrerit odio. Sed in mi eu quam suscipit bibendum quis at orci. Pellentesque fermentum nisl purus, et iaculis lectus pharetra sit amet.</p>
                </div>
                <div class="text-left">
                    <div>
                        <p>
                            - Apporter une réponse éfficace aux attentes des candidats français et francophone internationale vers l'Australie</br>
                            - Offrir un site professionnel convivial, facile d'utilisation et éfficace dans la recherche et la concrètisation de projet d'investissement en Australie</br>
                            - Etre à terme le site de référence par la communauté française et francophone internationale en matière d'investissement en Australie</br>
                        </p>
                    </div>
                </div>
            </section>
            <section id="home-property-for-rent-listing">
                <header class="section-header home-section-header text-center">
                    <h2 class="wow slideInLeft">les derniers produits enregistres</h2>
                </header>
                <div class="col-lg-6 layout-item-wrap col-sm-6">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="single-property.html">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">à vendre</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="single-property.html">Appartement moderne<br></a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i>&nbsp;Sydney, Australie</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 lits</span>
                                <span><i class="fa fa-bathtub"></i> 3 douche</span>
                                <span><i class="fa fa-cab"></i> Oui</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="#">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">à vendre</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="#"></a><a href="file:///E:/OKTOBONE/IEA/PROJET/2%20Int%C3%A9gration/IEA%20template/single-property.html">Appartement Moderne</a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i>  Sydney, Australie</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 lits</span>
                                <span><i class="fa fa-bathtub"></i> 3 douche</span>
                                <span><i class="fa fa-cab"></i> Oui</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed 										diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum 											dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="#">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">à louer</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="#"></a><a href="file:///E:/OKTOBONE/IEA/PROJET/2%20Int%C3%A9gration/IEA%20template/single-property.html">Appartement Moderne</a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i> 14  Sydney, Australie</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 lits</span>
                                <span><i class="fa fa-bathtub"></i> 3 douche</span>
                                <span><i class="fa fa-cab"></i> Oui</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="single-property.html">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">à vendre</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="#">
                                            <a href="file:///E:/OKTOBONE/IEA/PROJET/2%20Int%C3%A9gration/IEA%20template/single-property.html">Appartement Moderne</a>
                                        </a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i> 14  Sydney, Australie</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 lits</span>
                                <span><i class="fa fa-bathtub"></i> 3 douche</span>
                                <span><i class="fa fa-cab"></i> Oui</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="#">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">à louer</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="#">
                                            <a href="file:///E:/OKTOBONE/IEA/PROJET/2%20Int%C3%A9gration/IEA%20template/single-property.html">Appartement Moderne</a>
                                        </a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i> 14  Sydney, Australie</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 lits</span>
                                <span> <i class="fa fa-bathtub"></i> 3 douche</span>
                                <span><i class="fa fa-cab"></i> non</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="#">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">à louer</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="#">
                                            <a href="file:///E:/OKTOBONE/IEA/PROJET/2%20Int%C3%A9gration/IEA%20template/single-property.html">Appartement Moderne</a>
                                        </a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i>  Sydney, Australie</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 lits</span>
                                <span><i class="fa fa-bathtub"></i> 3 douche</span>
                                <span><i class="fa fa-cab"></i> Non</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="#">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">à vendre</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="#">
                                            <a href="file:///E:/OKTOBONE/IEA/PROJET/2%20Int%C3%A9gration/IEA%20template/single-property.html">Appartement Moderne</a>
                                        </a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i>  Sydney, Australie</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 lits</span>
                                <span><i class="fa fa-bathtub"></i> 3 douche</span>
                                <span><i class="fa fa-cab"></i> Oui</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="#">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">à vendre</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="#">
                                            <a href="file:///E:/OKTOBONE/IEA/PROJET/2%20Int%C3%A9gration/IEA%20template/single-property.html">Appartement Moderne</a>
                                        </a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i>  Sydney, Australie</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 lits</span>
                                <span><i class="fa fa-bathtub"></i> 3 douche</span>
                                <span><i class="fa fa-cab"></i> Non</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
            <section class="property-meta-wrapper common text-center bg-info">
                <h2 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                    ESPACES PUBLICITES</h2>
                <p class="wow slideInRight" style="visibility: hidden; animation-name: none;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
                    labore et dolore magna aliquan ut enim ad minim veniam.</p>
                <a class="btn" href="#">
                    <img src="{!! asset('images/iso-btn.png') !!}" alt="ISO Button">
                </a>
                <a class="btn" href="#">
                    <img src="{!! asset('images/playstore-btn.png') !!}" alt="Play Store Button">
                </a>
            </section>
            <section id="home-property-for-rent-listing">
                <header class="section-header home-section-header text-center">
                    <h2 class="wow slideInLeft">les derniers articles du blog</h2>
                </header>
                <div class="col-lg-6 layout-item-wrap col-sm-6">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="#">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">A vendre</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="#">Guaranteed modern home</a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 Beds</span>
                                <span><i class="fa fa-bathtub"></i> 3 Baths</span>
                                <span><i class="fa fa-cab"></i> Yes</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="#">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">A vendre</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="#">Guaranteed modern home</a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 Beds</span>
                                <span><i class="fa fa-bathtub"></i> 3 Baths</span>
                                <span><i class="fa fa-cab"></i> Yes</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed 										diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum 											dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="#">
                                <img data-action="zoom" src="assets/images/property/2.jpg" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">A vendre</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="#">Guaranteed modern home</a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 Beds</span>
                                <span><i class="fa fa-bathtub"></i> 3 Baths</span>
                                <span><i class="fa fa-cab"></i> Yes</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="single-property.html">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">A vendre</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="single-property.html">Guaranteed modern home</a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 Beds</span>
                                <span><i class="fa fa-bathtub"></i> 3 Baths</span>
                                <span><i class="fa fa-cab"></i> Yes</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="single-property.html">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">A vendre</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="single-property.html">Guaranteed modern home</a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 Beds</span>
                                <span><i class="fa fa-bathtub"></i> 3 Baths</span>
                                <span><i class="fa fa-cab"></i> Yes</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-sm-6 layout-item-wrap">
                    <article class="property layout-item clearfix">
                        <figure class="feature-image">
                            <a class="clearfix zoom" href="single-property.html">
                                <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
                            </a>
                            <span class="btn btn-warning btn-sale">A vendre</span>
                        </figure>
                        <div class="property-contents clearfix">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="single-property.html">Guaranteed modern home</a></h6>
                                    <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span>
                                </div>
                                <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000">
                                    <strong>$389.000</strong>
                                </button>
                            </header>
                            <div class="property-meta clearfix">
                                <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                <span><i class="fa fa-bed"></i> 3 Beds</span>
                                <span><i class="fa fa-bathtub"></i> 3 Baths</span>
                                <span><i class="fa fa-cab"></i> Yes</span>
                            </div>
                            <div class="contents clearfix">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                            </div>
                            <div class="author-box clearfix">
                                <a href="#" class="author-img">
                                    <img src="{!! asset('images/agents/1.jpg') !!}" alt="Agent Image">
                                </a>
                                <cite class="author-name">Personal Seller: <a href="#">Linda Garret</a></cite>
                                <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
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
                            <img src="assets/images/announcement-bg.jpg" class="img-rounded" alt="Cinque Terre" width="604" height="236">
                            <br /><br />
                        </div>
                    </div>
                </section>
                <section class="property-meta-wrapper common text-center bg-info">
                    <h2 class="title wow slideInLeft" style="visibility: hidden; animation-name: none;">
                        ESPACES PUBLICITES</h2>
                    <p class="wow slideInRight" style="visibility: hidden; animation-name: none;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
                        labore et dolore magna aliquan ut enim ad minim veniam.</p>
                </section>
                <section class="widget recent-properties clearfix">
                    <h5 class="title">Récents</h5>
                    <div class="property clearfix">
                        <a href="#" class="feature-image zoom">
                            <img data-action="zoom" src="{!! asset('images/property/1.jpg') !!}" alt="Property Image">
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
                            <img data-action="zoom" src="{!! asset('images/property/2.jpg') !!}" alt="Property Image">
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
                            <img data-action="zoom" src="{!! asset('images/property/3.jpg') !!}" alt="Property Image">
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
                return 'Current value: ' + value;
</div>

@include("footer")
