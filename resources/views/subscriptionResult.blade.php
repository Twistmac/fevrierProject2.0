@php
    affichageHeader();
@endphp
<div class="main-slider-wrapper clearfix content corps ">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="content">
                        <div role="main">
                            <div id="breadcrumbs" class="group font-size-14">
                            </div>
                        <div>
                        <h3 class="page-title aligncenter"><?php echo $titre; ?></h3>
                        <div class="row contentInscription">
                            <div class="container" style="margin-bottom: 450px;">
                                <div class="panel panel-default col-md-offset-3 col-md-6 col-md-offset-3">
                                    <div class="panel-body">
                                        <div class="row">
                                          <div class="col-sm-12 col-lg-2 col-md-2">
                                               <img src="<?php echo $image; ?>" class="img-responsive" alt="">
                                          </div>
                                          <div class="col-sm-12 col-lg-10 col-md-10">
                                            <?php echo $message; ?>
                                          </div>
                                        </div>
                                        <?php if($next == true){ ?>
                                        <div class="container">
                                          <div class="row">
                                              <h4>Mode de paiement du droit d'inscription</h4>
                                          </div>
                                          <form class="form-horizontal" action="/paiementLoadInterface" method="post">
                                              <div class="form-group">
                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                <label class="control-label col-sm-2" for="modePaiement">Votre mode de paiement : </label>
                                                <div class="col-sm-10">
                                                    <select name="modePaiement" size="1">
                                                      <option value="1">Paypal</option>
                                                      <option value="2">Carte de crédit</option>
                                                    </select>
                                                </div>
                                              </div>
                                              <button type="submit" class="btn btn-default">Continuer</button>
                                          </form>
                                        </div>
                                        <?php } ?>
                                      </div>
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