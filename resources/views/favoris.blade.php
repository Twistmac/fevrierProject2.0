@php affichageHeader() @endphp

<div class="property-single">
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
</div>


<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="{!! route('dashboard')  !!}"><i class="glyphicon glyphicon-home"></i> Tableau de bord</a></li>
                    <li class="current"><a href="{!! route('maj')  !!}"><i class="glyphicon glyphicon-calendar"></i> Mise à jour Profil</a></li>
                    <li><a href="{!! route('favoris') !!}"><i class="glyphicon glyphicon-stats"></i> Favoris</a></li>
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
                    <li><a href="{!! route('deconnection') !!}"><i class="glyphicon glyphicon-tasks"></i> Deconnexion</a></li>
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
                        <img src="storage/app/{!! $avatar !!}" class="img-rounded" alt="Cinque Terre" width="304" height="236">
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