<?php
    affichageHeader();
?>
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
                    <li><a href="compteAFA.php"><i class="glyphicon glyphicon-home"></i> Tableau de bord</a></li>
                    <li class="current"><a href="majAFA.php"><i class="glyphicon glyphicon-calendar"></i> Mise à jour Profil</a></li>
                    <li><a href="encoursAFA.php"><i class="glyphicon glyphicon-stats"></i> Produit en cours de vente</a></li>
                    <li><a href="CPC-AFA.php"><i class="glyphicon glyphicon-list"></i> Commissions de Présentation de Clientèle à payer</a></li>
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
                            <form class="form-horizontal" role="form" method="post" action="{!! route('setBusinessDetail') !!}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Business Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nomBusiness" id="inputEmail3" value="{!! $nom !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Street Adress</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="adressBusiness" id="inputEmail3" value="{!! $adresse !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Suburb</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="paysBusiness" id="inputEmail3" value="{!! $pays !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">State</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="etatBusiness" id="inputEmail3" value="{!! $etat !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">PostCode</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="cdBusiness" id="inputEmail3" value="{!! $codepostal !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Business Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="emailBusiness" id="inputEmail3" value="{!! $email !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Business Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="telBusiness" id="inputEmail3" value="{!! $telephone !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">WebSite URL</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="siteBusiness" id="inputEmail3" value="{!! $site !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Business Logo</label>
                                    <div class="col-sm-10">
                                        <img src="storage/app/{!! $avatar !!}" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">File input</label>
                                    <div class="col-md-10">
                                        <input type="file" name="logo" class="btn btn-default" id="exampleInputFile1">
                                        <p class="help-block">
                                            some help text here.
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
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
                                        <input type="text" class="form-control" id="inputEmail3" value="{!! $reprNom !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Contact Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" value="{!! $reprEmail !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Contact Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" value="{!! $reprTelephone !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">save changes</button>
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
                                    <div class="col-md-7">
                                        <select class="form-control">
                                            <option>Australia Capital Territory</option>
                                            <option>North Territory</option>
                                            <option>South Australia</option>
                                            <option>Western Australia</option>
                                            <option>New South Wales</option>
                                            <option>Queensland</option>
                                            <option>Tasmania</option>
                                            <option>Victoria</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Language </label>
                                    <div class="col-md-7">
                                        <select class="form-control">
                                            <option>English</option>
                                            <option>French</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Range of operation of your present office </label>
                                    <div class="col-md-7">
                                        <select class="form-control">
                                            <option>10 km</option>
                                            <option>25 km</option>
                                            <option>50 km</option>
                                            <option>100 km</option>
                                            <option>250 km</option>
                                            <option>All over of the State of legal operation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
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
                                        <textarea class="form-control" value="Textarea" rows="8">      {!! $presentation !!}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
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
                                        <input type="text" class="form-control" id="inputEmail3" value="{!! $crmNom !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">CRM Provider Email </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" value="{!! $crmEmail !!}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
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