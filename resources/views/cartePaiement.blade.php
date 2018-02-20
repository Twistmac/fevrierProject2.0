<?php affichageHeader(); ?>
<div id="site-header-top"></div>
<div id="property-single"></div>
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
                            <span class="aquo">&gt;</span> Paiement du droit d'inscription
                        </div>
                    </div>
                    <div>

                    <div class="panel panel-default" id="panelPaiement">
                        <div class="panel-body">
                            <div class="row" style="padding-top: 25px; padding-bottom: 25px">
                                <h3 class="col-lg-offset-4 col-lg-6 ">Paiement par carte bancaire</h3>
                            </div>

                            <script src="https://js.stripe.com/v3/"></script>

                            <form class="form-horizontal" action="/payer" method="post" id="payment-form">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <div class="row">
                                    <div class="col-lg-offset-1 col-lg-2">
                                        <label class="control-label " for="prix">Prix droit d'inscription(euros)  </label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control  col-lg-6"  id="prix" value="{{ Session::get("infoCompte")->DROITINSCRIPTION }}" disabled>
                                    </div>
                                    <label class="control-label col-lg-1" for="devise" >Devise de paiement</label>
                                    <div class="col-lg-2">
                                        <select name="devise" class="form-control">
                                            <option value="usd">Usd</option>
                                            <option value="eur">Euro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 15px; padding-bottom: 10px">
                                    <div class="col-lg-offset-1 col-lg-2">
                                        <label for="card-element">Votre carte de debit</label>
                                    </div>
                                    <div id="card-element" class="col-lg-6"></div>
                                </div>
                                <div class="row" style="padding-top: 15px; padding-bottom: 10px">
                                    <div id="card-errors" role="alert" class="col-lg-offset-3" style="color: red"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-offset-8 col-sm-4">
                                        <button type="submit" class="btn btn-success">Payer</button>
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

@include("footer")
<script src="{{ URL::asset('js/stripeFunction.js') }}"></script>
