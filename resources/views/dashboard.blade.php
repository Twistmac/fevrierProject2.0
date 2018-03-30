<?php affichageHeader(); ?>
<div class="main-slider-wrapper clearfix content corps">

        <div id="site-banner" class="text-center clearfix">
                <div class="container">
                    <h1 class="title wow slideInLeft">Tableau de bord</h1>
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
		  	<div class="row">
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
			  					<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-3 control-label">Type de Membre</label>
								    <div class="col-sm-9">
								      <p><span>{!! $type !!}</span></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-3 control-label">Nom du Membre</label>
								    <div class="col-sm-9">
								      <p><span>{!! $nom !!}</span></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-3 control-label">Prénom du Membre</label>
								    <div class="col-sm-9">
								       <p><span>{!! $prenom !!}</span></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-3 control-label">Adresse Email</label>
								    <div class="col-sm-9">
								       <p><span>{!! $email !!}</span></p>
								    </div>
								  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Sexe</label>
                    <div class="col-sm-9">
                       <p><span>Homme</span></p>
                    </div>
                  </div>
								  <div class="form-group">
								    <label class="col-sm-3 control-label">Contact Mobile</label>
								    <div class="col-sm-9">
								       <p><span> {!! $telephone !!}</span></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-3 control-label">Avatar</label>
								    <div class="col-sm-9">
								        <img src="storage/app/{!! $avatar !!}" class="img-rounded" alt="Cinque Terre" width="304" height="236">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-3 col-sm-9">
								      <button type="submit" class="btn btn-primary" onclick="window.location.href='{!! route('maj') !!}' ">Modifier les informations</button>
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>

		  		<div class="col-md-4">
		  			<div class="row">
                        <div class="col-md-12 panel-success">
                            <div class="content-box-header panel-heading">
                                <div class="panel-title ">Notifications</div>

                                <!-- <div class="panel-options">
                                  <a href="#" data-rel="collapse"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                  <a href="#" data-rel="reload"><i class="fa fa-cog" aria-hidden="true"></i></a>
                                </div> -->
                            </div>
                            <div class="content-box-large box-with-header">
                                <div class="alert alert-success">
                                  <strong>Succes!</strong> Notifie d'une action positive
                                </div>
                            </div>
                        </div>
                    </div>
		  			<div class="row">
                        <div class="col-md-12 panel-danger">
                            <div class="content-box-header panel-heading">
                                <div class="panel-title ">Notifications</div>

                                <!-- <div class="panel-options">
                                  <a href="#" data-rel="collapse"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                  <a href="#" data-rel="reload"><i class="fa fa-cog" aria-hidden="true"></i></a>
                                </div> -->
                            </div>
                            <div class="content-box-large box-with-header">
                                 <div class="alert alert-danger">
                                  <strong>Alerte!</strong> Notifie d'une alerte ou d'un rappel
                                </div>
                            </div>
                        </div>
                    </div>
		  		</div>


		  	</div>
		  </div>
		</div>
    </div>
@include("footer")
