@include('layouts.client.head')

<!--begin::Page Vendors -->

<!--end::Page Vendors -->
</head>
<!-- end::Head -->
<!-- end::Body -->
@include('layouts.client.header')
<!-- BEGIN: Left Aside -->
@include('layouts.client.left-menu')
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <!-- END: Subheader -->
    <div class="m-content">
        <!--Begin::Main Portlet-->
        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Create A Brief
                        </h3>

                    </div>
                </div>
            </div>
            <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30"
                 role="alert">
                <div class="m-alert__icon">
                    <i class="flaticon-exclamation m--font-brand" style="font-size: 1.4rem;"></i>
                </div>
                <div class="m-alert__text">
                    The invited agencies will see this and can choose to accept the full brief.
                </div>
            </div>
            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right" id="m_form_1">
                <div class="m-portlet__body">
                    <div class="m-form__content">
                        <div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert" id="m_form_1_msg">
                            <div class="m-alert__icon">
                                <i class="la la-warning"></i>
                            </div>
                            <div class="m-alert__text">
                                Oh snap! Change a few things up and try submitting again.
                            </div>
                            <div class="m-alert__close">
                                <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">

                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-4 col-sm-12">
                            Name your Brief *
                        </label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input" name="title" placeholder="Name your brief">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-4 col-sm-12">
                            Brief Details *
                        </label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <textarea class="form-control m-input" name="details" placeholder="Enter details"
                                      style="height: 150px;"></textarea>
                            <span class="m-form__help">
												Please enter your briefs details
											</span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-4 col-sm-12">
                            Amount offered (per month)
                        </label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <div class="m-ion-range-slider">
                                <input type="hidden" id="m_slider_3"/>
                            </div>
                            <div class="m-form__help">
                                The broader the range, the more invites accepted.
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-4 col-sm-12">
                            Services Needed
                        </label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <select class="form-control" id="matchServices" name="services" multiple="multiple"
                                    style="width: 100%">

                                <option value="paidSearch">
                                    Paid Search
                                </option>
                                <option value="seo">
                                    SEO
                                </option>
                                <option value="displayProgrammaticAdvertising">
                                    Display & Programmatic Advertising
                                </option>
                                <option value="analytics">
                                    Analytics
                                </option>
                                <option value="videoAdvertising">
                                    Video Advertising
                                </option>
                                <option value="paidSocial">
                                    Paid Social
                                </option>
                                <option value="amazon">
                                    Amazon
                                </option>
                                <option value="contentMarketing">
                                    Content Marketing
                                </option>
                                <option value="emailMarketing">
                                    Email Marketing
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-4 col-sm-12">
                            Agency Questions
                        </label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                <input type="checkbox">
                                How many years experience have you?
                                <span></span>
                            </label><br>
                            <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                <input type="checkbox">
                                What do you like about this brief?
                                <span></span>
                            </label><br>
                            <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                <input type="checkbox">
                                Are you available for face-to-face meetings?
                                <span></span>
                            </label><br>
                            <div id="m_repeater_2">
                                <div data-repeater-list="">
                                    <div data-repeater-item class="m--margin-bottom-10 row">
                                        <div class="input-group col-md-9">
                                            <input type="text" class="form-control form-control-danger"
                                                   placeholder="Enter another question">
                                            <div class="input-group-append">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" data-repeater-delete=""
                                               class="btn btn-danger m-btn m-btn--icon m-btn--icon-only">
                                                <i class="la la-remove"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div data-repeater-create="" class="btn btn btn-warning m-btn m-btn--icon">
																<span>
																	<i class="la la-plus"></i>
																	<span>
																		Add Another Question
																	</span>
																</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-4 col-sm-12">
                            Upload Attachment
                        </label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <div class="m-dropzone dropzone m-dropzone--primary" action="inc/api/dropzone/upload.php"
                                 id="m-dropzone-two">
                                <div class="m-dropzone__msg dz-message needsclick">
                                    <h3 class="m-dropzone__msg-title">
                                        Drop files here or click to upload.
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">
                        <div class="row">
                            <div class="col-lg-8 ml-lg-auto">
                                <a href="#" data-toggle="modal" data-target="#loader">
                                    <button type="button" id="createBrief" class="btn btn-primary">
                                        Create A Brief
                                    </button>
                                </a>
                                <button type="reset" class="btn btn-secondary">
                                    Cancel
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="loader" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true" style="vertical-align: middle;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="m-loader m-loader--brand"
                                             style="width: 100%; display: inline-block;"></div>
                                    </div>
                                    <div class="modal-body" align="center">
                                        Working to find the best matches for you...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Portlet-->


        <!--End::Main Portlet-->
    </div>
</div>
</div>
<!-- end:: Body -->
<!-- begin::Footer -->
@include('layouts.client.footer')
<!-- end::Footer -->

<!-- end:: Page -->
<!-- begin::Quick Sidebar -->
@include('layouts.client.quick-sidebar')
<!-- end::Quick Sidebar -->

<!--begin::Base Scripts -->
@include('layouts.client.base-scripts')
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<!--end::Page Vendors -->
<!--begin::Page Snippets -->
<script src="js/form-controls.js" type="text/javascript"></script>
<script src="js/ion-range-slider.js" type="text/javascript"></script>
<script src="js/select2.js" type="text/javascript"></script>
<script src="js/form-repeater.js" type="text/javascript"></script>
<script type="text/javascript">
    $('#createBrief').click(function () {
        setTimeout(function () {
            window.location.href = 'invite-agencies.php';
        }, 10000);
    });
</script>
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
