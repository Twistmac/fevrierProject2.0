@include('admin.head')
<div id="main-content" class="main-content container-fluid">
                <!-- // page head -->
                <div id="page-content" class="page-content">
                    <div class="navbar navbar-page">
                        <!-- /navbar-inner -->
                    </div>
                    <!-- /navbar -->
                    <form>
                        <section>
                            <div class="page-header">
                                <h3>Informations <small>du Site</small></h3>
                            </div>
                            <div class="row-fluid margin-bottom40">
                                <div class="span7 well well-nice">
                                    <fieldset>
                                        <legend>Localisation MAP</legend>
                                        <div id="map" style="width:100%;height:400px"></div>
                                    </fieldset>
                                </div>

                                <div class="span5">
                                    <fieldset>

                                        <legend>
                                          Information<small>du site</small>
                                        </legend>
                                        <form action="" method="">
                                          <label for="identifiant">Identifiant</label>
                                          <input id="identifiant" class="input-block-level" type="text" name="identifiant">
                                          <label for="nomSite">Nom du site</label>
                                          <input id="nomSite" class="input-block-level" type="text" name="nomSite">
                                          <label for="titreSite">Titre du site</label>
                                          <input id="titreSite" class="input-block-level" type="text" name="titreSite">
                                          <label for="adresse">Adressse email</label>
                                          <input id="adresse" class="input-block-level" type="text" name="adresse">
                                          <label for="latitude">Latitude</label>
                                          <input id="latitude" class="input-block-level" type="text" name="latitude">
                                          <label for="longitude">Longitude</label>
                                          <input id="longitude" class="input-block-level" type="text" name="longitude">
                                          <input type="submit" class="btn btn-green" value="Sauvegarder"/>
                                        </form>

                                    </fieldset>
                                </div>
                            </div>

                        </section>
                    </form>
                </div>
</div>


@include('admin.foot')
