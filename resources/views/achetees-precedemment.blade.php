<?php affichageHeader(); ?>
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
        

    <div class="page-content">
        <div class="row">
          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="{!! route('dashboard') !!}"><i class="glyphicon glyphicon-home"></i> Tableau de bord</a></li>
                    <li><a href="{!! route('maj') !!}"><i class="glyphicon glyphicon-calendar"></i> Mise à jour Profil</a></li>
                    <li class="current"><a href="{!! route('favoris') !!}"><i class="glyphicon glyphicon-stats"></i> Favoris</a></li>
                    <li><a href="{!! route('recherche-sauvegardees') !!}"><i class="glyphicon glyphicon-list"></i> Recherches sauvegardées</a></li>
                    <li><a href="{!! route('encours_dachat') !!}"><i class="glyphicon glyphicon-record"></i> Produits en cours d'achats</a></li>
                    <li><a href="{!! route('achatPrec') !!}"><i class="glyphicon glyphicon-pencil"></i> Produits achetés précedemment</a></li>
                    <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Messagerie
                            <span class="caret pull-right"></span>
                        </a>
                        <!-- Sub menu -->
                        <ul>
                            <li><a href="reception.php">Boite de réception</a></li>
                            <li><a href="redaction.php">Boite de rédaction</a></li>
                            <li><a href="archive.php">Boite des archives</a></li>
                        </ul>
                    </li>
                    <li><a href="accueil.php"><i class="glyphicon glyphicon-tasks"></i> Deconnexion</a></li>
                </ul>
             </div>
          </div>
          <div class="col-md-10">

            <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title">Information du compte</div>
                            
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">

                        <div class="col-sm-5">
                               <img src="{!! $avatar !!}" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                         </div>
                         <br/>
                            {!! $nom !!}
                            <br /><br />
                            {!! $type !!}<br/><br/>
                            {!! $email !!}<br/><br/>
                            Homme<br/><br/>
                            {!! $telephone !!}
                            <br /><br />
                        </div>
             </div>

             <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">  Produits achetés précedemment </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Image produits</th>
                              <th>Nom produits</th>
                              <th>Description</th>
                              <th>Statut</th>
                              <th>Propriétés du produit</th>
                              <th>Prix</th>
                              <th>Date de l'achat</th>
                              <th>Voir le Produit</th>
                              <th>Agences Partenaires en liaison</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td class="center"> <img class="img-responsive" src="assets/images/blog/4.jpg" alt="jean Delacroix" width="60" height="45"> </td>
                              <td>Guaranteed Modern Home</td>
                              <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse placerat, lacus at pulvinar pharetra, sem metus pulvinar leo, ut adipiscing velit ipsum vel dui. Nam volutpat lacinia viverra. Proin tristique tortor sit amet viverra scelerisque. Vivamus convallis varius massa id dictum. Sed facilisis massa turpis, ut dictum leo laoreet nec.</td>
                              <th><h5><span class="label label-primary">Contrat signé et produit acheté</span></h5></th>
                              <th> 3060m2, 3 Beds, 3 Baths, Garage:Yes</th>
                              <td>$4000</td>
                              <td class="center"> 08 Sept, 2017 </td>
                              <td class="center"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-backdrop="false" data-target="#myModal">Détails produits</button></td>
                              <td>...</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td class="center"> <img class="img-responsive" src="assets/images/blog/4.jpg" alt="jean Delacroix" width="60" height="45"> </td>
                              <td>Guaranteed Modern Home</td>
                              <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse placerat, lacus at pulvinar pharetra, sem metus pulvinar leo, ut adipiscing velit ipsum vel dui. Nam volutpat lacinia viverra. Proin tristique tortor sit amet viverra scelerisque. Vivamus convallis varius massa id dictum. Sed facilisis massa turpis, ut dictum leo laoreet nec.</td>
                              <th><h5><span class="label label-primary">Contrat signé et produit acheté</span></h5></th>
                              <th> 3060m2, 3 Beds, 3 Baths, Garage:Yes</th>
                              <td>$4000</td>
                               <td class="center"> 07 Sept, 2017 </td>
                              <td class="center"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-backdrop="false" data-target="#myModal">Détails produits</button></td>
                              <td>...</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td class="center"> <img class="img-responsive" src="assets/images/blog/4.jpg" alt="jean Delacroix" width="60" height="45"> </td>
                              <td>Guaranteed Modern Home</td>
                              <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse placerat, lacus at pulvinar pharetra, sem metus pulvinar leo, ut adipiscing velit ipsum vel dui. Nam volutpat lacinia viverra. Proin tristique tortor sit amet viverra scelerisque. Vivamus convallis varius massa id dictum. Sed facilisis massa turpis, ut dictum leo laoreet nec.</td>
                              <th><h5><span class="label label-primary">Contrat signé et produit acheté</span></h5></th>
                              <th> 3060m2, 3 Beds, 3 Baths, Garage:Yes</th>
                              <td>$4000</td>
                               <td class="center"> 06 Sept, 2017 </td>
                              <td class="center"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-backdrop="false" data-target="#myModal">Détails produits</button></td>
                              <td>...</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
          </div>
        </div>
    </div>



</div>
@include("footer")