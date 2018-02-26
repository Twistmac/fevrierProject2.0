<?php affichageHeader(); ?>
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
		  	<div class="row">
		  		<div class="col-md-8">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Information du Membre</div>

					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
                                <form method="post" enctype="multipart/form-data" action="{!! url('mise-a-jour') !!}" class="form-horizontal"  role="form">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Type de Membre</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputEmail3" value="Particulier">
                                    </div>
                                  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Nom du Membre</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="nom" id="inputEmail3" value="{!! $nom !!}">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Prénom du Membre</label>
								    <div class="col-sm-10">
								       <input type="text" name="prenom" class="form-control" id="inputEmail3" value="{!! $prenom !!}">
								    </div>
								  </div>
                                  <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Sexe </label>
                                      <div class="col-md-7">
                                                <select class="form-control">
                                                    <option>Homme</option>
                                                    <option>Femme</option>
                                                </select>
                                    </div>
                                  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Adresse Email</label>
								    <div class="col-sm-10">
								        <input type="text" name="email" class="form-control" id="inputEmail3" value="{!! $email !!}">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Contact Mobile</label>
								    <div class="col-sm-10">
								       <input type="text" name="contact" class="form-control" id="inputEmail3" value="{!! $telephone !!}">
								    </div>
								  </div>

								  <div class="form-group">
								    <label class="col-sm-2 control-label">Avatar</label>
								    <div class="col-sm-10">
								        <img src="storage/app/{!! $avatar !!}" class="img-rounded" alt="Cinque Terre" width="304" height="236">
								    </div>
								  </div>
                                  <div class="form-group">
                                        <label class="col-md-2 control-label">File input</label>
                                        <div class="col-md-10">
                                        <input type="file" name="image" class="btn btn-default" id="exampleInputFile1">
                                        <p class="help-block">
                                            some help text here.
                                        </p>
                                      </div>
                                   </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">Modifier</button>
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>

		  		<div class="col-md-4">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>

								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">

					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>

								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">

					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  		</div>

		  	</div>
		  </div>
		</div>
    </div>
@include("footer")