@include('admin.head')

<div id="main-container">
                <!-- // sidebar -->
                <div id="main-content" class="main-content container-fluid">
                    <div id="page-content" class="page-content tab-content overflow-y">
                        <div id="TabTop1" class="tab-pane padding-bottom30 active fade in">
                            <div class="page-header">
                                <h3>Profil administrateur</h3>
                            </div>
                            <div class="row-fluid">
                                <div class="grider">
                                    <div class="widget widget-simple">
                                        <div class="widget-header">
                                            <h4>Profil administrateur <small>Lire et modifier mon profil</small></h4>
                                        </div>
                                        <div class="widget-content">
                                            <div class="widget-body">
                                                <form id="accounForm" class="form-horizontal" method="" action="">
                                                    <div class="row-fluid">
                                                        <div class="span12">
                                                            <div class="control-group no-margin-bootom">
                                                                <label class="control-label label-left">
                                                                    <img src="{{link_img('admin/img/profil.png')}}" class="thumbnail" width="96" height="96"></br>

                                                                </label>
                                                                <button class="btn cancel">+ Upload image</button>
                                                                <div class="controls">
                                                                    <address> <h2>Administrateur User</h2></address>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row-fluid">
                                                        <div class="span12 form-dark">
                                                            <fieldset>
                                                                <legend>Modifier mon profil</legend>
                                                                <ul class="form-list label-left list-bordered dotted">
                                                                    <li class="section-form">
                                                                        <h4>Mes donnees personnelles</h4>
                                                                    </li>
                                                                    <li class="control-group">
                                                                        <label for="accountFirstName" class="control-label">Nom
                                                                            <span class="required">*</span>
                                                                        </label>
                                                                        <div class="controls">
                                                                            <input id="nom" class="span11" type="text" name="nom" value="">
                                                                        </div>
                                                                    </li>
                                                                    <li class="control-group">
                                                                        <label for="accountLastName" class="control-label">Prenom
                                                                            <span class="required">*</span>
                                                                        </label>
                                                                        <div class="controls">
                                                                            <input id="prenom" class="span11" type="text" name="prenom" value="">
                                                                        </div>
                                                                    </li>
                                                                    <li class="control-group">
                                                                        <label for="motDePasse" class="control-label">Mot de passe</label>
                                                                        <div class="controls">
                                                                            <input id="motDePasse" class="span11" type="text" name="motDePasse" value="">
                                                                        </div>
                                                                    </li>
                                                                    <li class="control-group">
                                                                        <label for="nouveauMotDePasse" class="control-label">Nouveau mot de passe</label>
                                                                        <div class="controls">
                                                                            <input id="nouveauMotDePasse" class="span11" type="text" name="nouveauMotDePasse" value="">
                                                                        </div>
                                                                    </li>
                                                                    <li class="control-group">
                                                                        <label for="confirmationMotDePasse" class="control-label">Confirmer mot de passe</label>
                                                                        <div class="controls">
                                                                            <input id="confirmationMotDePasse" class="span11" type="text" name="confirmationMotDePasse" value="">
                                                                        </div>
                                                                    </li>
                                                                    <li class="control-group">
                                                                        <label for="genre" class="control-label">Genre</label>
                                                                        <div class="controls">
                                                                            <input id="genre" type="hidden" name="genre" value="" />
                                                                            <div id="genreListe" class="btn-group change" data-toggle="buttons-radio" data-target="genre">
                                                                                <button type="button" class="btn" class-toggle="btn-green" name="btnHomme" value="homme">&nbsp; Homme &nbsp;</button>
                                                                                <button type="button" class="btn" class-toggle="btn-green" name="btnFemme" value="femme">Femme</button>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <!-- // form item -->
                                                                    <li class="section-form">
                                                                        <h4>Information sur la contact</h4>
                                                                    </li>
                                                                    <!-- // section form divider -->
                                                                    <li class="control-group">
                                                                        <label for="email" class="control-label">Email
                                                                            <span class="required">*</span>
                                                                        </label>
                                                                        <div class="controls">
                                                                            <div class="input-append block">
                                                                                <input id="email" class="span6" type="text" name="email" value="">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- // form item -->
                                                                    <li class="control-group">
                                                                        <label for="telephone" class="control-label">Telephone
                                                                            <span class="required">*</span>
                                                                        </label>
                                                                        <div class="controls controls-row">
                                                                            <input id="telephone" class="span6" type="text" name="telephone" value="">
                                                                        </div>
                                                                    </li>
                                                                    <!-- // form item -->
                                                                </ul>
                                                            </fieldset>
                                                          
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn btn-blue">Valider</button>
                                                                <button class="btn cancel">Annuler</button>
                                                            </div>
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
                </div>
            </div>

            @include('admin.foot')
