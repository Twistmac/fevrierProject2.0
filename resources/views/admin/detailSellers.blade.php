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
                                                                <h4>Personal data</h4>
                                                            </li>
                                                            <!-- // section form divider -->

                                                            <li class="control-group">
                                                                <label for="accountPrefix" class="control-label">Prefix</label>
                                                                <div class="controls">
                                                                    <input id="accountPrefix" class="span6" type="text" value="" name="accountPrefix">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountFirstName" class="control-label">First Name <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="accountFirstName" class="span11" type="text" name="accountFirstName" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountLastName" class="control-label">Last Name <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="accountLastName" class="span11" type="text" name="accountLastName" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountSuffix" class="control-label">Suffix</label>
                                                                <div class="controls">
                                                                    <input id="accountSuffix" class="span6" type="text" name="accountSuffix" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountMiddleName" class="control-label">Middle Name / Initial</label>
                                                                <div class="controls">
                                                                    <input id="accountMiddleName" class="span11" type="text" name="accountMiddleName" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountGender" class="control-label">Gender</label>
                                                                <div class="controls">
                                                                    <input id="accountGenderInput" type="hidden" name="accountGender" value="" />
                                                                    <div id="accountGender" class="btn-group change" data-toggle="buttons-radio" data-target="accountGenderInput">
                                                                        <button type="button" class="btn" class-toggle="btn-green" name="accountGender" value="male">&nbsp; Male &nbsp;</button>
                                                                        <button type="button" class="btn" class-toggle="btn-green" name="accountGender" value="female">Female</button>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountDob" class="control-label">Date Of Birth <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="accountDob" class="span6" type="text" name="accountDob" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="section-form">
                                                                <h4>Contact info</h4>
                                                            </li>
                                                            <!-- // section form divider -->

                                                            <li class="control-group">
                                                                <label for="accountEmail" class="control-label">Email <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <div class="input-append block">
                                                                        <input id="accountEmail" class="span6" type="text" name="accountEmail" value="">
                                                                        <a class="btn fontello-icon-edit" type="button" href="gestionMessageNouveau.html">écrire un email</a> </div>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountPhoneNumber" class="control-label">Phone <span class="required">*</span></label>
                                                                <div class="controls controls-row">
                                                                    <input id="accountPhoneNumber" class="span6 maskPhone margin-right5" type="text" name="accountPhoneNumber" value="">
                                                                    <select id="accountPhoneType" class="selectpicker" data-style="btn-info" name="accountPhoneType">
                                                                        <option value="1">Work</option>
                                                                        <option value="2">Home</option>
                                                                        <option value="3">Next</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountFaxNumber" class="control-label">Fax</label>
                                                                <div class="controls controls-row">
                                                                    <input id="accountFaxNumber" class="span6 maskPhone margin-right5" type="text" name="accountFaxNumber" value="">
                                                                    <select id="accountFaxType" class="selectpicker" data-style="btn-info" name="accountFaxType">
                                                                        <option value="1">Work</option>
                                                                        <option value="2">Home</option>
                                                                        <option value="3">Next</option>
                                                                    </select>
                                                                    <a class="btn btn-glyph fontello-icon-plus-1" href="javascript:void(0);"></a> </div>
                                                            </li>
                                                            <!-- // form item -->

                                                        </ul>
                                                    </fieldset>
                                                    <fieldset>
                                                        <legend class="section-form">Address <a class="btn btn-mini fontello-icon-plus-1 pull-right margin-0s" href="javascript:void(0);">Add Address</a> </legend>
                                                        <ul class="form-list label-left list-bordered dotted">
                                                            <li class="control-group">
                                                                <label for="accountAddressStreet" class="control-label">Address <span class="required">*</span></label>
                                                                <div class="controls controls-row">
                                                                    <input id="accountAddressStreet" class="span6 margin-right5" type="text" value="" name="accountAddressStreet">
                                                                    <select id="accountAddressDestinationType" class="selectpicker" data-style="btn-info" name="accountAddressType">
                                                                        <option value="1">Work</option>
                                                                        <option value="2">Home</option>
                                                                        <option value="3">Next</option>
                                                                    </select>
                                                                </div>
                                                                <div class="controls margin-s0">
                                                                    <input id="accountAddressDestination" class="span6" type="text" value="" name="accountAddressDestination">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountAddressCity" class="control-label">City <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="accountAddressCity" class="span6" type="text" value="" name="accountAddressCity">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountAddressState" class="control-label">State <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <select id="accountAddressState" class="span6" name="accountAddressState">
                                                                        <option value="" selected="selected">Select a State</option>
                                                                        <option value="AL">Alabama</option>
                                                                        <option value="AK">Alaska</option>
                                                                        <option value="AZ">Arizona</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountAddressZip" class="control-label">Zip / Postal code <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="accountAddressZip" class="span6 maskZipcode" type="text" value="" name="accountAddressZip">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountAddressCountry" class="control-label">Country <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="accountAddressCountryData" type="hidden" value="" name="accountAddressCountry">
                                                                    <select id="accountAddressCountry" class="span6" name="accountAddressCountry">
                                                                        <option value=""></option>
                                                                        <option value="United States">United States</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                        </ul>
                                                    </fieldset>
                                                    <!-- // fieldset Input -->
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-blue">Submit & Validate</button>
                                                        <button class="btn cancel">Cancel</button>
                                                    </div>
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
                                    <h4><i class="fontello-icon-edit"></i> Notes</h4>
                                    <div class="widget-tool"><a class="btn btn-green btn-small btn-glyph" href="javascript:void(0);"> show all</a></div>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="formNotes" class="form-dark">
                                            <fieldset>
                                                <label for="accountTaxVat" class="control-label"> Title</label>
                                                <input id="accountTaxVat" class="input-block-level" type="text">
                                                <label for="accountNotes">Note Text:</label>
                                                <textarea id="accountNotes" class="input-block-level" rows="4"></textarea>
                                            </fieldset>
                                            <!-- // fieldset Input -->

                                            <button class="btn btn-yellow btn-block">Add a note</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-list-alt"></i> Last Note for Account </h4>
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
                                            <li class="media"> <span class="pull-left"><span class="item-icon fontello-icon-pin-1"></span></span>
                                                <div class="media-body"> <span class="date">08-15-2012 11:50 AM</span> <span class="quick-menu-icon pull-right"> <a class="edit fontello-icon-edit"></a> <a class="state fontello-icon-archive"></a> <a class="state fontello-icon-trash-1"></a> </span>
                                                    <p class="note">Pellentesque malesuada nulla nunc nunc facilisi Donec tellus nec Donec et. Pellentesque metus dolor neque consequat scelerisque.</p>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget -->

                            <div class="widget widget-simple">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-wrench-2"></i> Next setting for Account </h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="formNextAccountSettings" class="form-condensed">
                                            <fieldset>
                                                <ul class="form-list">
                                                    <li class="control-group">
                                                        <label for="accountForce" class="control-label">Force account - select date (from - to)</label>
                                                        <div class="controls">
                                                            <input id="accountForce" class="input-block-level margin-00" type="text" name="accountForce" value="">
                                                            <span class="help-block">Bootstrap daterangepicker</span> </div>
                                                    </li>
                                                    <!-- // form item -->

                                                    <li class="control-group">
                                                        <label for="accountWebsite_id" class="control-label">Associate to Website</label>
                                                        <div class="controls">
                                                            <select id="accountWebsite_id" class="selecttwo-full" name="account[website_id]">
                                                                <option value="">Please Select</option>
                                                                <option selected="selected" value="0">Admin</option>
                                                                <option value="1">Main Website</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <!-- // form item -->

                                                    <li class="control-group">
                                                        <label for="accountCreated_in" class="control-label">Created From</label>
                                                        <div class="controls">
                                                            <input id="accountCreated_in" class="input-block-level" type="text" name="account[created_in]" value="Admin" disabled="disabled">
                                                        </div>
                                                    </li>
                                                    <!-- // form item -->

                                                    <li class="control-group">
                                                        <label for="accountGroup" class="control-label">Customer Group</label>
                                                        <div class="controls">
                                                            <input id="accountGroup" class="" type="text" name="accountGroup" />
                                                            <label for="disableGroup_change" class="checkbox margin-top5">
                                                                <input id="disableGroup_change" class="checkbox" type="checkbox" value="1" name="account[disableGroup_change]">
                                                                Disable Automatic Group Change</label>
                                                        </div>
                                                    </li>
                                                    <!-- // form item -->

                                                </ul>
                                            </fieldset>
                                            <!-- // fieldset Input -->
                                        </form>
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
