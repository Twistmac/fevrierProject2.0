@php affichageHeader() @endphp

<div class="main-slider-wrapper clearfix content corps">

        <div id="site-banner" class="text-center clearfix">
                <div class="container">
                    <h1 class="title wow slideInLeft">Favoris</h1>
                </div>
            </div>
    </div>


<div class="page-content">
    <div class="row">
      <div class="col-md-3">
       <div class="sidebar content-box" style="display: block;">
                <ul class="nav nav-side">
                    <!-- Main menu -->
                    <li class="current"><a href="{!! route('dashboard')  !!}"><i class="fa fa-tachometer" aria-hidden="true"></i> Tableau de bord</a></li>
                    <li><a href="{!! route('maj')  !!}"><i class="fa fa-pencil-square" aria-hidden="true"></i> Mise à jour Profil</a></li>
                    <li><a href="{!! route('favoris') !!}"><i class="fa fa-gratipay" aria-hidden="true"></i> Favoris</a></li>
                    <li><a href="{!! route('recherche-sauvegardees') !!}"><i class="fa fa-bookmark" aria-hidden="true"></i> Recherches sauvegardées</a></li>
                    <li><a href="encours-dachat.php"><i class="fa fa-tasks" aria-hidden="true"></i> Produits en cours d'achats</a></li>
                    <li><a href="achetees-precedemment.php"><i class="fa fa-money" aria-hidden="true"></i> Produits achetés précedemment</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="fa fa-comments-o" aria-hidden="true"></i> Messagerie
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="reception.php">Boite de réception</a></li>
                            <li><a href="redaction.php">Boite de rédaction</a></li>
                            <li><a href="archive.php">Boite des archives</a></li>
                        </ul>
                    </li>
                    <li><a href="accueil.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnexion</a></li>
                </ul>
             </div>
     </div>
        <div class="col-md-8">

            <div class="content-box-large">
              <div class="panel-heading">
                    <div class="panel-title">Informations du Membre</div>
                    <hr>
                    <!-- <div class="panel-options">
                      <a href="#" data-rel="collapse"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                      <a href="#" data-rel="reload"><i class="fa fa-cog" aria-hidden="true"></i></a>
                    </div> -->
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
                    <div class="panel-title">Listes des Favoris</div>
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
                                <th>Prix</th>
                                <th>Plus de détails</th>
                                <th>Supprimer de mes favoris</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($liste as $ligne)

                            <tr>
                                <td> </td>
                                <td class="center"> <img class="img-responsive" src="images/{!! $ligne->urlimage1 !!}" alt="jean Delacroix" width="60" height="45"> </td>
                                <td>{!! $ligne->nom !!}</td>
                                <td>{!! $ligne->description !!}</td>
                                <td>{!! $ligne->prix !!}</td>
                                <td class="center"><a href="{{url('/produit/'.$ligne->slug)}}" class="btn btn-info btn-xs"> Voir détails</a></td>
                                <td class="center"><button class="btn btn-warning btn-xs"> Supprimer</button></td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



@include("footer")
