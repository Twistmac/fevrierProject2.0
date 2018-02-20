@include("header")
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
                    <li class="current"><a href="compteAFA.php"><i class="glyphicon glyphicon-home"></i> Tableau de bord</a></li>
                    <li><a href="majAFA.php"><i class="glyphicon glyphicon-calendar"></i> Mise à jour Profil</a></li>
                    <li><a href="encoursAFA.php"><i class="glyphicon glyphicon-list"></i> Produits en cours de vente</a></li>
                    <li><a href="CPC-AFA.php"><i class="glyphicon glyphicon-stats"></i> Commission de présentation de clientèle à payer</a></li>
                    <li><a href="vendusAFA.php"><i class="glyphicon glyphicon-record"></i> Produit vendus précedement</a></li>
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
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Déconnexion</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-8">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Business Details</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Business Name</label>
								    <div class="col-sm-10">
								      <p><h5>{!! $nom !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Street Adress</label>
								    <div class="col-sm-10">
								      <p><h5>{!! $adresse !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Suburb</label>
								    <div class="col-sm-10">
								       <p><h5>{!! $pays !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">State</label>
								    <div class="col-sm-10">
								       <p><h5>{!! $etat !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">PostCode</label>
								    <div class="col-sm-10">
								       <p><h5>{!! $codepostal !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Business Email</label>
								    <div class="col-sm-10">
								       <p><h5>{!! $email !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Business Phone</label>
								    <div class="col-sm-10">
								       <p><h5>{!! $telephone !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">WebSite URL</label>
								    <div class="col-sm-10">
								       <p><h5>{!! $site !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Business Logo</label>
								    <div class="col-sm-10">
								        <img src="{!! $avatar !!}" class="img-rounded" alt="Cinque Terre" width="304" height="236">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
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
                                
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
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
                                
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="content-box-large box-with-header">
                                 <div class="alert alert-danger">
                                  <strong>Alerte!</strong> Notifie d'une alerte ou d'un rappel
                                </div>
                            </div>
                        </div>
                    </div>
		  		</div>


		  		<div class="col-md-8">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Contact Details</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Contact Name</label>
								    <div class="col-sm-10">
								      <p><h5>{!! $reprNom !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Contact Email</label>
								    <div class="col-sm-10">
								      <p><h5>{!! $reprEmail !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Contact Mobile</label>
								    <div class="col-sm-10">
								       <p><h5>{!! $reprTelephone !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>

	  				<div class="col-md-8">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Operability</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">State of legal operation of your present office </label>
								    <div class="col-sm-10">
								      <p><h5>{!! $state !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Language </label>
								    <div class="col-sm-10">
								      <p><h5>{!! $language !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Range of operation of your present office </label>
								    <div class="col-sm-10">
								      <p><h5>{!! $operabilite !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>

	  				<div class="col-md-8">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Presentation of the Agency</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Presentation </label>
								    <div class="col-sm-10">
								      <p><h5>{!! $presentation !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>

	  				<div class="col-md-8">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">CRM Provider</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">CRM Provider Name </label>
								    <div class="col-sm-10">
								      <p><h5>{!! $crmNom !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">CRM Provider Email </label>
								    <div class="col-sm-10">
								      <p><h5>{!! $crmEmail !!}</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>


		  	</div>
		  </div>
		</div>
    </div>
@include("footer")