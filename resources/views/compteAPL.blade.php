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
                    <li class="current"><a href="compteAPL.blade.php"><i class="glyphicon glyphicon-home"></i> Tableau de bord</a></li>
                    <li><a href="majAFA.php"><i class="glyphicon glyphicon-calendar"></i> Mise à jour Profil</a></li>
                    <li><a href="liaison-exclusive.php"><i class="glyphicon glyphicon-list"></i> Clients en liaison exclusive</a></li>
                    <li><a href="encoursAFA.php"><i class="glyphicon glyphicon-stats"></i> Produit en cours de vente</a></li>
                    <li><a href="vendusAFA.php"><i class="glyphicon glyphicon-record"></i> Produit vendu précedement</a></li>
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
                    <li><a href="accueil.php"><i class="glyphicon glyphicon-tasks"></i> Déconnexion</a></li>
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
								      <p><h5>My Business Name</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Street Adress</label>
								    <div class="col-sm-10">
								      <p><h5>My Street Adress</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Suburb</label>
								    <div class="col-sm-10">
								       <p><h5>My Suburb</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">State</label>
								    <div class="col-sm-10">
								       <p><h5>My State</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">PostCode</label>
								    <div class="col-sm-10">
								       <p><h5>My PostCode</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Business Email</label>
								    <div class="col-sm-10">
								       <p><h5>My Business Email</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Business Phone</label>
								    <div class="col-sm-10">
								       <p><h5>My Business Phone</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">WebSite URL</label>
								    <div class="col-sm-10">
								       <p><h5>My WebSite URL</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Business Logo</label>
								    <div class="col-sm-10">
								        <img src="assets/images/blog/4.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">See Details</button>
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
								      <p><h5>My Contact Name</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Contact Email</label>
								    <div class="col-sm-10">
								      <p><h5>My Contact Email</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Contact Mobile</label>
								    <div class="col-sm-10">
								       <p><h5>My Contact Mobile</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">See Details</button>
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
								      <p><h5>Australia Capital Territory</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Language </label>
								    <div class="col-sm-10">
								      <p><h5>English</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Range of operation of your present office </label>
								    <div class="col-sm-10">
								      <p><h5>10 km</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">See Details</button>
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
								      <p><h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">See Details</button>
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
								      <p><h5>My CRM Provider Name</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">CRM Provider Email </label>
								    <div class="col-sm-10">
								      <p><h5>My CRM Provider</h5></p>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">See Details</button>
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