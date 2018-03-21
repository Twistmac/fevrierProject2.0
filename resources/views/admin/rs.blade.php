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
                                <h3>Réseaux Sociaux <small>.rs</small></h3>
                            </div>
                            <div class="row-fluid margin-bottom40">
                                <div class="span7 well well-nice">
                                    <fieldset>
                                        <legend>Liens Réseaux sociaux</legend>
                                        <form action="" method="">
                                            <label for="urlFacebook"><i class="fontello-icon-facebook-2" aria-hidden="true"></i> Facebook <a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a> </label>
                                            <input id="urlFacebook" class="input-block-level" type="text" name="facebook">

                                            <label for="urlTwitter">Twitter <a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a> </label>
                                            <input id="urlTwitter" class="input-block-level" type="text" name="twitter">
                                            <label for="urlGoogle">Google+ <a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a> </label>
                                            <input id="urlGoogle" class="input-block-level" type="text" name="google-plus">
                                            <label for="urlLinkedin">Linkedin<a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a> </label>
                                            <input id="urlLinkedin" class="input-block-level" type="text" name="linkedin">
                                            <hr class="margin-xxx">
                                    </fieldset>
                                </div>

                                <div class="span5">
                                    <fieldset>

                                        <legend>
                                          Information<small>du site</small>
                                        </legend>
                                              <label for="">Nom du reseau social</label>
                                              <input id="nomReseauSocial" class="input-block-level" type="text" name="nomReseauSocial">
                                              <label for="">Url du reseau social</label>
                                              <input id="urlReseauSocial" class="input-block-level" type="text" name="urlReseauSocial">

                                              <a class="btn btn-primary" href="javascript:void(0);"> + Ajouter</a>

                                    </fieldset>
                                </div>
                            </div>

                        </section>
                    </form>
                </div>
</div>
@include('admin.foot')
