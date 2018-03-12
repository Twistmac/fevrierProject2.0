@include('admin.head')

<div id="main-content" class="main-content container-fluid">
            <div id="page-content" class="page-content tab-content overflow-y">
                <div id="TabTop1" class="tab-pane padding-bottom30 active fade in">
                    <div class="page-header">
                        <h3><i class="aweso-icon-list-alt opaci35"></i> Vendeurs <small>.informations</small></h3>
                    </div>
                    <div class="row-fluid">
                        <div class="span8 grider">
                            <div class="widget widget-simple">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-user"></i> Profile <small>Vendeurs</small></h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="accounForm" class="form-horizontal" method="" action="" >
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <div class="control-group no-margin-bootom">
                                                        <label class="control-label label-left"> <img src="{{link_img('admin/img/profil.png')}}" class="thumbnail" width="96" height="96"> </label>
                                                        <div class="controls">
                                                            <address>
                                                            <h2>Michael Berger</h2>
                                                            <strong>Type of business</strong>  <strong><a href="#">Builder</a></strong><br>
                                                            <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">michael.berger@shopgate.com</a><br>
                                                            <abbr title="Work Phone">phone:</abbr> (123) 456-7890
                                                            </address>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span12 form-dark">
                                                    <fieldset>
                                                        <legend>informations <small>Détails</small></legend>
                                                        <ul class="form-list label-left list-bordered dotted">
                                                            <li class="section-form">
                                                                <h4>Business Details</h4>
                                                            </li>
                                                            <!-- // section form divider -->

                                                            <li class="control-group">
                                                                <label for="accountPrefix" class="control-label">Business Name: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <strong>Oktobone Technology</strong>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountFirstName" class="control-label">Street Adress: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <strong>Logement 264 Cité Ambohipo - 101 Antananarivo</strong>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountFirstName" class="control-label">Suburb: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <strong>Ambohipo</strong>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountFirstName" class="control-label">States: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <strong>Madagascar</strong>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountFirstName" class="control-label">PostCode: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <strong>101</strong>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountFirstName" class="control-label">Business E-mail: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <strong>contact@oktobone.com</strong>
                                                                </div>
                                                            </li>

                                                            <li class="control-group">
                                                                <label for="accountFirstName" class="control-label">Business Phone: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <strong>+261 34 68 403 79</strong>
                                                                </div>
                                                            </li>

                                                            <li class="control-group">
                                                                <label for="accountFirstName" class="control-label">Website URL: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <a href="mailto:#">www.oktobone.com</a><br>
                                                                </div>
                                                            </li>


                                                            <li class="section-form">
                                                                <h4>Business Logo</h4>
                                                            </li>
                                                            <!-- // section form divider -->

                                                            <li class="control-group">
                                                                <label for="accountPrefix" class="control-label">Business logo: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    Photo
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="section-form">
                                                                <h4>Contact Détails</h4>
                                                            </li>
                                                            <!-- // section form divider -->

                                                            <li class="control-group">
                                                                <label for="accountPrefix" class="control-label">Contact Name: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    -
                                                                </div>
                                                            </li>

                                                            <li class="control-group">
                                                                <label for="accountPrefix" class="control-label">Contact Email: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    -
                                                                </div>
                                                            </li>

                                                            <li class="control-group">
                                                                <label for="accountPrefix" class="control-label">Contact Mobile: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    -
                                                                </div>
                                                            </li>

                                                            <li class="section-form">
                                                                <h4>CRM provider</h4>
                                                            </li>
                                                            <!-- // section form divider -->

                                                            <li class="control-group">
                                                                <label for="accountPrefix" class="control-label">CRM provider name: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    -
                                                                </div>
                                                            </li>

                                                            <li class="control-group">
                                                                <label for="accountPrefix" class="control-label">CRM provider Email: <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    -
                                                                </div>
                                                            </li>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget -->

                        </div>
                        <!-- // Column -->

                        <div class="span4 grider">
                            <div class="widget widget-simple widget-notes">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-edit"></i> OBSERVATION</h4>
                                    <div class="widget-tool"><a class="btn btn-green btn-small btn-glyph" href="javascript:void(0);"> show all</a></div>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="formNotes" class="form-dark">
                                            <fieldset>
                                                <label for="accountNotes">Note Text:</label>
                                                <textarea id="accountNotes" class="input-block-level" rows="4"></textarea>
                                            </fieldset>
                                            <!-- // fieldset Input -->

                                            <button class="btn btn-yellow btn-block">Add Observation</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-list-alt"></i> Observation récent </h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <ol class="widget-list list-dotted">
                                            <li class="media"> <span class="pull-left"><span class="item-icon fontello-icon-pin-1"></span></span>
                                                <div class="media-body"> <span class="date">10:30 AM</span> <span class="quick-menu-icon pull-right"> <a class="edit fontello-icon-edit"></a> <a class="state fontello-icon-archive"></a> <a class="state fontello-icon-trash-1"></a> </span>
                                                    <p class="note">Pellentesque malesuada nulla nunc nunc facilisi Donec tellus nec Donec et. Pellentesque metus dolor neque consequat scelerisque.</p>
                                                </div>
                                            </li>
                                            <li class="media"> <span class="pull-left"><span class="item-icon fontello-icon-pin-1"></span></span>
                                                <div class="media-body"> <span class="date">09-09-2012 02:30 PM</span> <span class="quick-menu-icon pull-right"> <a class="edit fontello-icon-edit"></a> <a class="state fontello-icon-archive"></a> <a class="state fontello-icon-trash-1"></a> </span>
                                                    <p class="note">Pellentesque malesuada nulla nunc nunc facilisi Donec tellus nec Donec et. Pellentesque metus dolor neque consequat scelerisque.</p>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget -->

                        </div>
                        <!-- // Column -->

                    </div>
                    <!-- // Example row -->
                </div>
                <!-- // Example TAB 1 -->


                <!-- // Example TAB 2 -->

                <div id="TabTop3" class="tab-pane fade">
                    <div class="page-header">
                        <h3><i class="aweso-icon-list-alt opaci35"></i> Text <small>here</small></h3>
                    </div>
                    <div class="row-fluid">
                        <div class="span6 grider-item">
                        </div>

                        <div class="span6 grider-item">
                        </div>
                    </div>
                    <!-- // Example row -->

                    <div class="row-fluid">
                        <div class="span12">
                        </div>
                    </div>
                    <!-- // Example row -->

                    <div class="row-fluid">
                        <div class="span12">
                        </div>
                    </div>
                    <!-- // Example row -->

                 </div>
                <!-- // Example TAB 3 -->

            </div>
            <!-- // page content -->

        </div>
        <!-- // main-content -->

    </div>

@include('admin.foot')
