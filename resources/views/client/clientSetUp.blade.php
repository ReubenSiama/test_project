@include('layouts.client.head')

<!--begin::Page Vendors -->
<style>

    .select2-container--default .select2-selection--multiple .select2-selection__rendered .select2-search__field {
        width: 100% !important;
    }
</style>
<!--end::Page Vendors -->
</head>
<!-- end::Head -->
<!-- end::Body -->
<!-- BEGIN: Left Aside -->
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="m-portlet m-portlet--full-height">
            <!--begin: Portlet Head-->
            <img src="clientAssets/logos/briefmatch_logo_blue@2x.png" style="padding: 50px;margin: 0 auto; display: block;">
            <!--end: Portlet Head-->
            <!--begin: Form Wizard-->
            <div class="m-wizard m-wizard--2 m-wizard--success" id="m_wizard">
                <!--begin: Message container -->
                <div class="m-portlet__padding-x">
                    <!-- Here you can put a message or alert -->
                </div>
                <!--end: Message container -->
                <!--begin: Form Wizard Head -->
                <div class="m-wizard__head m-portlet__padding-x">
                    <!--begin: Form Wizard Progress -->
                    <div class="m-wizard__progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end: Form Wizard Progress -->
                    <!--begin: Form Wizard Nav -->
                    <div class="m-wizard__nav">
                        <div class="m-wizard__steps">
                            <div class="m-wizard__step m-wizard__step--done" data-wizard-target="#m_wizard_form_step_0">
                                <div class="m-wizard__step-number">
													<span>
														<i class="fa  flaticon-placeholder"></i>
													</span>
                                </div>
                                <div class="m-wizard__step-info">
                                    <div class="m-wizard__step-title">
                                        1. Sign Up
                                    </div>
                                </div>
                            </div>
                            <div class="m-wizard__step m-wizard__step--current"
                                 data-wizard-target="#m_wizard_form_step_1">
                                <a href="#" class="m-wizard__step-number">
													<span>
														<i class="fa  flaticon-layers"></i>
													</span>
                                </a>
                                <div class="m-wizard__step-info">
                                    <div class="m-wizard__step-title">
                                        2. Company Info
                                    </div>
                                </div>
                            </div>
                            <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_2">
                                <a href="#" class="m-wizard__step-number">
													<span>
														<i class="fa  flaticon-layers"></i>
													</span>
                                </a>
                                <div class="m-wizard__step-info">
                                    <div class="m-wizard__step-title">
                                        3. Services Needed
                                    </div>
                                </div>
                            </div>
                            <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_3">
                                <a href="#" class="m-wizard__step-number">
													<span>
														<i class="fa  flaticon-layers"></i>
													</span>
                                </a>
                                <div class="m-wizard__step-info">
                                    <div class="m-wizard__step-title">
                                        4. Tell Us More
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Form Wizard Nav -->
                </div>
                <!--end: Form Wizard Head -->
                <!--begin: Form Wizard Form-->
                <div class="m-wizard__form">
                    <!--
1) Use m-form--label-align-left class to alight the form input lables to the right
2) Use m-form--state class to highlight input control borders on form validation
-->
                    <form class="m-form m-form--label-align-left- m-form--state-" id="m_form" action="index.php">
                        <!--begin: Form Body -->
                        <div class="m-portlet__body">
                            <div class="m-wizard__form-step" id="m_wizard_form_step_0">
                                <div class="row">
                                    <div class="col-xl-6 offset-xl-3">
                                        <div class="m-form__heading">
                                            <h3 class="m-form__heading-title">
                                                Your sign up details
                                            </h3>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" name="company" width="70%"
                                                   value="splink" disabled/>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="email" name="email" width="70%"
                                                   value="info@splink.com" disabled/>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="password" name="password"
                                                   width="70%" value="password" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Form Wizard Step 1-->
                            <div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
                                <div class="row">
                                    <div class="col-xl-6 offset-xl-3">
                                        <div class="m-form__heading">
                                            <h3 class="m-form__heading-title">
                                                Tell us about your company
                                            </h3>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" placeholder="Contact name"
                                                   name="contactName" width="70%">
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" placeholder="Job Title"
                                                   name="jobTitle" width="70%">
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" placeholder="Website"
                                                   name="website" width="70%">
                                        </div>
                                        <div class="form-group m-form__group">
                                            <select class="form-control m-select2" id="location" name="param"
                                                    multiple="multiple">
                                                <option value="Any">
                                                    Worldwide
                                                </option>
                                                <optgroup label="Europe">
                                                    <option value="Ireland">
                                                        Ireland
                                                    </option>
                                                    <option value="UK">
                                                        UK
                                                    </option>
                                                    <option value="Germany">
                                                        Germany
                                                    </option>
                                                    <option value="France">
                                                        France
                                                    </option>
                                                    <option value="Poland">
                                                        Poland
                                                    </option>
                                                    <option value="Spain">
                                                        Spain
                                                    </option>
                                                </optgroup>
                                                <optgroup label="North America">
                                                    <option value="UK">
                                                        USA
                                                    </option>
                                                    <option value="Canada">
                                                        Canada
                                                    </option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <select class="form-control m-select2" id="industry" name="param"
                                                    width="70%">
                                                <option value="">
                                                    What industry are you in?
                                                </option>
                                                <option value="automotive">
                                                    Automotive
                                                </option>
                                                <option value="b2b">
                                                    Business to Business
                                                </option>
                                                <option value="consumer_packaged_goods">
                                                    Consumer Packaged Goods
                                                </option>
                                                <option value="education">
                                                    Education
                                                </option>
                                                <option value="finance">
                                                    Finance
                                                </option>
                                                <option value="healthcare">
                                                    Healthcare
                                                </option>
                                                <option value="media_entertainment">
                                                    Media & Entertainment
                                                </option>
                                                <option value="technology">
                                                    Technology
                                                </option>
                                                <option value="travel">
                                                    Travel
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Form Wizard Step 1-->
                            <!--begin: Form Wizard Step 2-->
                            <div class="m-wizard__form-step" id="m_wizard_form_step_2">
                                <div class="row">
                                    <div class="col-xl-6 offset-xl-3">
                                        <div class="m-form__section m-form__section--first">
                                            <div class="m-form__heading">
                                                <h3 class="m-form__heading-title">
                                                    What type of agencies would you like to work with?
                                                </h3>
                                            </div>
                                            <div class="form-group m-form__group">
                                                <label class="select2-container--default">What’s your average monthly
                                                    budget?</label><br><br>
                                                <div class="m-ion-range-slider">
                                                    <input type="hidden" id="m_slider_3" width="100%"/>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group">
                                                <label style="text-align: center;" class="select2-container--default">Looking
                                                    for an agency within:</label><br/>
                                                <select class="form-control m-select2" id="location-search" name="param"
                                                        multiple="multiple" style="width: 100%;">
                                                    <option value="Any">
                                                        Worldwide
                                                    </option>
                                                    <optgroup label="Europe">
                                                        <option value="Ireland">
                                                            Ireland
                                                        </option>
                                                        <option value="UK">
                                                            UK
                                                        </option>
                                                        <option value="Germany">
                                                            Germany
                                                        </option>
                                                        <option value="France">
                                                            France
                                                        </option>
                                                        <option value="Poland">
                                                            Poland
                                                        </option>
                                                        <option value="Spain">
                                                            Spain
                                                        </option>
                                                    </optgroup>
                                                    <optgroup label="North America">
                                                        <option value="UK">
                                                            USA
                                                        </option>
                                                        <option value="Canada">
                                                            Canada
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group m-form__group">
                                                <label style="text-align: center;">What services are you looking
                                                    for?</label><br/>
                                                <select class="form-control m_select2_3" id="matchServices"
                                                        name="services" multiple="multiple" style="width: 100%;">
                                                    <optgroup label="Strategy">
                                                        <option value="insightsPlanning">
                                                            Insights & Planning
                                                        </option>
                                                        <option value="brandStrategy">
                                                            Brand Strategy
                                                        </option>
                                                        <option value="communicationsStrategy">
                                                            Communications Strategy
                                                        </option>
                                                        <option value="dataAnalytics">
                                                            Data & Analytics Consultancy
                                                        </option>
                                                        <option value="marketResearch">
                                                            Market Research
                                                        </option>
                                                        <option value="crm">
                                                            Customer Relationship Management
                                                        </option>
                                                        <option value="publicRelations">
                                                            Public Relations
                                                        </option>
                                                    </optgroup>

                                                    <optgroup label="Digital">

                                                        <option value="ppc">
                                                            PPC Strategy
                                                        </option>
                                                        <option value="seo">
                                                            SEO Strategy
                                                        </option>
                                                        <option value="displayStrategy">
                                                            Display Strategy
                                                        </option>
                                                        <option value="videoStrategy">
                                                            Video Strategy
                                                        </option>
                                                        <option value="socialStrategy">
                                                            Social Strategy
                                                        </option>
                                                        <option value="ecommerceStrategy">
                                                            eCommerce Strategy
                                                        </option>
                                                        <option value="digitalContent">
                                                            Digital Content
                                                        </option>
                                                    </optgroup>

                                                    <optgroup label="Marketing">

                                                        <option value="copywriting">
                                                            Copywriting
                                                        </option>
                                                        <option value="branding">
                                                            Branding
                                                        </option>
                                                        <option value="creativeStrategy">
                                                            Creative Strategy
                                                        </option>
                                                        <option value="promoMarketing">
                                                            Promotional Marketing
                                                        </option>
                                                        <option value="experimentalMarketing">
                                                            Experiential Marketing
                                                        </option>
                                                        <option value="influencerMarketing">
                                                            Influencer Marketing
                                                        </option>
                                                        <option value="shopperMarketing">
                                                            Shopper Marketing
                                                        </option>
                                                        <option value="outHome">
                                                            Out of Home
                                                        </option>
                                                        <option value="tv">
                                                            TV
                                                        </option>

                                                    </optgroup>

                                                    <optgroup label="Development">

                                                        <option value="webDevelopment">
                                                            Web Development
                                                        </option>
                                                        <option value="appDevelopment">
                                                            App Development
                                                        </option>
                                                        <option value="ux">
                                                            UX Design
                                                        </option>
                                                        <option value="videoProduction">
                                                            Video Production
                                                        </option>

                                                    </optgroup>

                                                </select>
                                            </div>
                                            <div class="form-group m-form__group">
                                                <label style="text-align: center;">What languages do you need support
                                                    with?</label><br/>
                                                <select class="form-control m_select2_3" id="matchLanguages"
                                                        name="services" multiple="multiple" style="width: 100%;">

                                                    <option value="1">
                                                        Language 1 (TBC)
                                                    </option>
                                                    <option value="2">
                                                        Language 2 (TBC)
                                                    </option>
                                                    <option value="3">
                                                        Language 3 (TBC)
                                                    </option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Form Wizard Step 2-->
                            <!--begin: Form Wizard Step 3-->
                            <div class="m-wizard__form-step" id="m_wizard_form_step_3">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2">
                                        <h4 class="text-center">My business has a:</h4>
                                        <div class="row" style="margin-bottom: 70px;">
                                            <div class="col-lg-3"><h5 style="padding-top: 5%">Conservative Growth
                                                    Strategy</h5></div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group">
                                                    <div class="m-ion-range-slider trans">
                                                        <input type="hidden" id="growth" width="100%"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3"><h5 style="padding-top: 5%">High Growth Strategy</h5>
                                            </div>
                                        </div>

                                        <h4 class="text-center">My business is:</h4>
                                        <div class="row" style="margin-bottom: 70px;">
                                            <div class="col-lg-3"><h5 style="padding-top: 5%">Established in the
                                                    Market</h5></div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group">
                                                    <div class="m-ion-range-slider trans">
                                                        <input type="hidden" id="market" width="100%"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3"><h5 style="padding-top: 5%">New to the Market</h5>
                                            </div>
                                        </div>

                                        <h4 class="text-center">My market is:</h4>
                                        <div class="row" style="margin-bottom: 70px;">
                                            <div class="col-lg-3"><h5 style="padding-top: 5%">Low Competition</h5></div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group">
                                                    <div class="m-ion-range-slider trans">
                                                        <input type="hidden" id="competition" width="100%"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3"><h5 style="padding-top: 5%">High Competition</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Form Wizard Step 3-->
                        </div>
                        <!--end: Form Body -->
                        <!--begin: Form Actions -->
                        <div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
                            <div class="m-form__actions">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-3 m--align-left">
                                        <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon"
                                           data-wizard-action="prev">
															<span>
																<i class="la la-arrow-left"></i>
																&nbsp;&nbsp;
																<span>
																	Back
																</span>
															</span>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 m--align-right">
                                        <a href="index.php" class="btn btn-success m-btn m-btn--custom m-btn--icon"
                                           data-wizard-action="submit">
															<span>
																<i class="la la-check"></i>
																&nbsp;&nbsp;
																<span>
																	Submit
																</span>
															</span>
                                        </a>
                                        <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon"
                                           data-wizard-action="next">
															<span>
																<span>
																	Save & Continue
																</span>
																&nbsp;&nbsp;
																<i class="la la-arrow-right"></i>
															</span>
                                        </a>
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>
                            </div>
                        </div>
                        <!--end: Form Actions -->
                    </form>
                </div>
                <!--end: Form Wizard Form-->
            </div>
            <!--end: Form Wizard-->
        </div>
        <!--End::Main Portlet-->
    </div>
</div>
</div>

<!-- end:: Body -->
<!--begin::Base Scripts -->
@include('layouts.client.baseScripts')
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<script src="js/login.js" type="text/javascript"></script>
<script src="js/select2.js" type="text/javascript"></script>
<script src="js/ion-range-slider.js" type="text/javascript"></script>
<script src="js/form-controls.js" type="text/javascript"></script>
<script src="js/wizard.js" type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Snippets -->
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>