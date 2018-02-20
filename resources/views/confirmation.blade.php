<?php affichageHeader(); ?>


<div id="site-header-top"></div>
<div id="property-single">
    <h1 class="page-title aligncenter">Agences Partenaires Locals</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="content">
                    <div role="main">
                        <div id="breadcrumbs" class="group font-size-14">
                            <div class="breadcrumb">
                                <a href="https://www.propertyhq.com.au/">Accueil</a>
                                <span class="aquo">&gt;</span> Agence Partenaire Local –  Créer un compte automatisé
                                <span class="aquo">&gt;</span> confirmation APL
                            </div>
                        </div>
                        <div id="entry" class="group">
                            <div id="entry" class="group">
                                <h4 class="page-title aligncenter">Agence Partenaire Local – Confirmation </h4>
                                <br>
                                <div class="hasfloat aligncenter">
                                    <b>Toute APL doit impérativement insérer sur son site un lien vers la page d'accueil du site IEA <a href="#">www.investirenaustralie.com.</a></b>
                                </div>
                                <div class="hasfloat aligncenter">
                                    <br>
                                    <label data-pg-collapsed>
                                        <input class="control-label" type="checkbox" value="">    &nbsp;    Je m'engage de disposer et de maintenir sur le site
                                        internet de l'APL un hyperlien le site IEA.<br><br>
                                    </label>
                                </b>
                            </div>
                            <div class="hasfloat">
                                <form class="zoowidget-form" method="post" action="verifieEmail" enctype="multipart/form-data">
                                    <fieldset>
                                        <ol>
                                            <div class="col-md-12">
                                              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                              <input type="hidden" name="type" value="APL"/>
                                              <input type="hidden" name="lang" value="{{ Session::get('lang') }}"/>
                                              <input type="hidden" name="idApl" value="{{ Session::get('idApl') }}"/>
                                              <input type="submit" class="pull-right btn btn-danger" value="Continuer" />
                                              <button type="button" class="pull-left btn btn-danger" data-toggle="modal" data-backdrop="false" data-target="#myModal">Retour</button>
                                             </div>
                                        </ol>
                                    </fieldset>
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
@include("footer")