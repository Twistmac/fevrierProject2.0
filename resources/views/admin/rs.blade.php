@include('admin.head')
<div id="main-content" class="main-content container-fluid">
                <!-- // page head -->
                <div id="page-content" class="page-content">
                    <div class="navbar navbar-page">
                        <!-- /navbar-inner -->
                    </div>
                    <!-- /navbar -->
                        <section>
                            <div class="page-header">
                                <!-- Message de notification -->
                                @include('admin.notification')
                                <!-- end notification -->
                                <h3>Réseaux Sociaux <small>. Social Media</small></h3>
                            </div>
                            <div class="row-fluid margin-bottom40">
                                <div class="span7 well well-nice">
                                    <fieldset>
                                        <legend>Liens Réseaux sociaux et noms des fonts correspondants</legend>
                                        <form method="post" action="{{route('admin.social.media')}}">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <label for="urlFacebook"><i class="fontello-icon-facebook-2" aria-hidden="true"></i> Facebook <a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a><a class="fontello-icon-back-in-time" href="#" style="float:right;margin-bottom: 5px">Reset</a></label>
                                            <input id="urlFacebook" class="input-block-level span8" type="text" name="facebook" value="{{social('facebook.value')}}">&nbsp;&nbsp;
                                            <span class="add-on"><i class="fontello-icon-facebook-2"></i></span>
                                            <input class="span3" type="text" name="font-facebook" value="fa fa-facebook" />
                                            
                                            <label for="urlTwitter"><i class="fontello-icon-twitter-2" aria-hidden="true"></i> Twitter <a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a> <a class="fontello-icon-back-in-time" href="#" style="float:right;margin-bottom: 5px">Reset</a></label>
                                            <input id="urlTwitter" class="input-block-level span8" type="text" name="twitter" value="{{social('twitter.value')}}">&nbsp;&nbsp;
                                            <span class="add-on"><i class="fontello-icon-twitter-2"></i></span>
                                            <input class="span3" type="text" name="font-twitter" value="fa fa-twitter" />

                                            <label for="urlGoogle"><i class="fontello-icon-googleplus-rect-1" aria-hidden="true"></i> Google+ <a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a> <a class="fontello-icon-back-in-time" href="#" style="float:right;margin-bottom: 5px">Reset</a></label>
                                            <input id="urlGoogle" class="input-block-level span8" type="text" name="googleplus">&nbsp;&nbsp;
                                            <span class="add-on"><i class="fontello-icon-googleplus-rect-1"></i></span>
                                            <input class="span3" type="text" name="font-googleplus" value="fa fa-google-plus" />

                                            <label for="urlLinkedin"><i class="fontello-icon-linkedin-2" aria-hidden="true"></i> Linkedin<a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a> <a class="fontello-icon-back-in-time" href="#" style="float:right;margin-bottom: 5px">Reset</a></label>
                                            <input id="urlLinkedin" class="input-block-level span8" type="text" name="linkedin">&nbsp;&nbsp;
                                            <span class="add-on"><i class="fontello-icon-linkedin-2"></i></span>
                                            <input class="span3" type="text" name="font-linkedin" value="fa fa-linkedin" />

                                            <label for="urlTumlr"><i class=" fontello-icon-tumblr" aria-hidden="true"></i> Tumblr<a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a> <a class="fontello-icon-back-in-time" href="#" style="float:right;margin-bottom: 5px">Reset</a></label>
                                            <input id="urlTumblr" class="input-block-level span8" type="text" name="tumblr">&nbsp;&nbsp;
                                            <span class="add-on"><i class="fontello-icon-tumblr"></i></span>
                                            <input class="span3" type="text" name="font-tumblr" value="fa fa-tumblr" />

                                            <label for="urlYoutube"><i class="fontello-icon-youtube" aria-hidden="true"></i> Youtube<a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a> <a class="fontello-icon-back-in-time" href="#" style="float:right;margin-bottom: 5px">Reset</a></label>
                                            <input id="urlLinkedin" class="input-block-level span8" type="text" name="youtube">&nbsp;&nbsp;
                                            <span class="add-on"><i class="fontello-icon-youtube"></i></span>
                                            <input class="span3" type="text" name="font-youtube" value="fa fa-youtube" />

                                            <label for="urlTumlr"><i class="fontello-icon-pinterest" aria-hidden="true"></i> Pinterest<a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a> <a class="fontello-icon-back-in-time" href="#" style="float:right;margin-bottom: 5px">Reset</a></label>
                                            <input id="urlLinkedin" class="input-block-level span8" type="text" name="pinterest">&nbsp;&nbsp;
                                            <span class="add-on"><i class="fontello-icon-pinterest"></i></span>
                                            <input class="span3" type="text" name="font-pinterest" value="fa fa-pinterest" />

                                            <label for="urlTumlr"><i class="fontello-icon-vimeo-1" aria-hidden="true"></i> Vimeo<a class="fontello-icon-trash-1" href="#" style="float:right;margin-bottom: 5px">Supprimer</a> <a class="fontello-icon-back-in-time" href="#" style="float:right;margin-bottom: 5px">Reset</a></label>
                                            <input id="urlLinkedin" class="input-block-level span8" type="text" name="vimeo">&nbsp;&nbsp;
                                            <span class="add-on"><i class="fontello-icon-vimeo-1"></i></span>
                                            <input class="span3" type="text" name="font-vimeo" value="fa fa-vimeo" />

                                            <hr class="margin-xxx">

                                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                            <button type="reset" class="btn btn-default">Annuler</button>
                                        </form>
                                    </fieldset>
                                </div>

                                <div class="span5">
                                    <fieldset>

                                        <legend>
                                          Information<small>du site</small>
                                        </legend>
                                              <label for="">Icône du Réseau Social</label>
                                              <input id="nomReseauSocial" class="input-block-level" type="text" name="nomReseauSocial">  
                                              <label for="">Nom du Réseau social</label>
                                              <input id="nomReseauSocial" class="input-block-level" type="text" name="nomReseauSocial">
                                              <label for="">Url du Réseau social</label>
                                              <input id="urlReseauSocial" class="input-block-level" type="text" name="urlReseauSocial">

                                              <a class="btn btn-primary" href="javascript:void(0);"> + Ajouter</a>

                                    </fieldset>
                                </div>
                            </div>

                        </section>
                </div>
</div>
@include('admin.foot')
