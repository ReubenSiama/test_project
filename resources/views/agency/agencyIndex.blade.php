<?php
//mosaic
?>

@include('layouts.agency.head')

<!--begin::Page Vendors -->
<style type="text/css">
    svg {
        width: 100px;
        display: block;
        margin: 0 auto;
        padding-bottom: 30px;
    }

    .path {
        stroke-dasharray: 1000;
        stroke-dashoffset: 0;

    &
    .circle {
        -webkit-animation: dash .9s ease-in-out;
        animation: dash .9s ease-in-out;
    }

    &
    .line {
        stroke-dashoffset: 1000;
        -webkit-animation: dash .9s .35s ease-in-out forwards;
        animation: dash .9s .35s ease-in-out forwards;
    }

    &
    .check {
        stroke-dashoffset: -100;
        -webkit-animation: dash-check .9s .35s ease-in-out forwards;
        animation: dash-check .9s .35s ease-in-out forwards;
    }

    }

    @-webkit-keyframes dash {
        0% {
            stroke-dashoffset: 1000;
        }
        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes dash {
        0% {
            stroke-dashoffset: 1000;
        }
        100% {
            stroke-dashoffset: 0;
        }
    }

    @-webkit-keyframes dash-check {
        0% {
            stroke-dashoffset: -100;
        }
        100% {
            stroke-dashoffset: 900;
        }
    }

    @keyframes dash-check {
        0% {
            stroke-dashoffset: -100;
        }
        100% {
            stroke-dashoffset: 900;
        }
    }
</style>
<!--end::Page Vendors -->
</head>
<!-- end::Head -->
<!-- end::Body -->
@include('layouts.agency.header')
<!-- BEGIN: Left Aside -->
@include('layouts.agency.left-menu')
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Dashboard
                </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="row m-row--full-height">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="m-portlet m-portlet--full-height m-portlet--border-bottom-brand "
                     style="max-height: 165px; ">
                    <div class="m-portlet__body">
                        <div class="m-widget26">
                            <div class="m-widget26__number">
                                57
                                <small>
                                    Briefs Received
                                </small>
                            </div>
                            <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                <canvas id="m_chart_quick_stats_1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m--space-30"></div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="m-portlet m-portlet--full-height m-portlet--border-bottom-danger "
                     style="max-height: 165px; ">
                    <div class="m-portlet__body">
                        <div class="m-widget26">
                            <div class="m-widget26__number">
                                7
                                <small>
                                    Briefs Pending
                                </small>
                            </div>
                            <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                <canvas id="m_chart_quick_stats_1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m--space-30"></div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="m-portlet m-portlet--full-height m-portlet--border-bottom-warning "
                     style="max-height: 165px; ">
                    <div class="m-portlet__body">
                        <div class="m-widget26">
                            <div class="m-widget26__number">
                                30
                                <small>
                                    Responded
                                </small>
                            </div>
                            <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                <canvas id="m_chart_quick_stats_2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="m-portlet m-portlet--full-height m-portlet--border-bottom-success "
                     style="max-height: 165px; ">
                    <div class="m-portlet__body">
                        <div class="m-widget26">
                            <div class="m-widget26__number">
                                20
                                <small>
                                    Shortlisted
                                </small>
                            </div>
                            <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                <canvas id="m_chart_quick_stats_3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            List of Pending Briefs
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin: Datatable -->
                <div class="m_datatable" id="invitations"></div>
                <!--end: Datatable -->
                <!--begin: Brief Details Modal -->
                <div class="modal fade" id="brief" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">
												&times;
												</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="m-card-profile">
                                    <div class="m-card-profile__pic">
                                        <div class="m-card-profile__pic-wrapper">
                                            <img src="agencyAssets/app/media/img/users/user2.jpg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="m-card-profile__details">
													<span class="m-card-profile__name">
													Microsoft
													</span>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="m-widget13">
                                        <div class="m-widget13__item">
															<span
                                                                class="m-widget13__text m--align-left m-widget13__text-bolder">
															Brief Title
															</span>
                                            <span class="m-widget13__text">
															SEO Work
															</span>
                                        </div>
                                        <div class="m-widget13__item">
															<span
                                                                class="m-widget13__text m--align-left m-widget13__text-bolder">
																Budget:
															</span>
                                            <span class="m-widget13__text">
																€20,000 - €25,000
															</span>
                                        </div>
                                        <div class="m-widget13__item">
												<span class="m-widget13__text m--align-left m-widget13__text-bolder">
													Brief Description:
												</span>
                                            <span class="m-widget13__text">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</span>
                                        </div>
                                        <div class="m-widget13__item">
												<span class="m-widget13__text m--align-left m-widget13__text-bolder">
													Services Required:
												</span>
                                            <span class="m-widget13__text">
													<ul>
													<li>SEO</li>
													<li>Paid Social</li>
													</ul>
												</span>
                                        </div>
                                        <div class="m-widget13__item">
												<span class="m-widget13__text m--align-left m-widget13__text-bolder">
													Client Location:
												</span>
                                            <span class="m-widget13__text">
													Co.Dublin, Ireland
												</span>
                                        </div>
                                        <div class="m-widget13__item">
												<span class="m-widget13__text m--align-left m-widget13__text-bolder">
													Target Market:
												</span>
                                            <span class="m-widget13__text">
													
												</span>
                                        </div>
                                        <div class="m-widget13__item">
												<span class="m-widget13__text m--align-left m-widget13__text-bolder">
													Questions:
												</span>
                                            <span class="m-widget13__text">
													<ul>
													<li>Have you any prior experience to show?</li>
													<li>Where are you located?</li>
													<li>List an SEO technique.</li>
													</ul>
												</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <a href="#" data-toggle="modal" data-target="#questions">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                                        Answer Questions
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="questions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Questions
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                                </button>
                            </div>
                            <form class="m-form m-form--fit m-form--label-align-left">
                                <div class="modal-body">
                                    <div class="m-portlet__body">
                                        <div class="form-group m-form__group row">
                                            <label for="answer1" class="col-6 col-form-label">
                                                Do you have experience viewable?
                                            </label>
                                            <div class="col-6">
                                                <textarea class="form-control m-input" name="answer1"
                                                          style="height: 100px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="answer2" class="col-6 col-form-label">
                                                Where are you located?
                                            </label>
                                            <div class="col-6">
                                                <textarea class="form-control m-input" name="answer2"
                                                          style="height: 100px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="answer3" class="col-6 col-form-label">
                                                List a later SEO technique
                                            </label>
                                            <div class="col-6">
                                                <textarea class="form-control m-input" name="answer3"
                                                          style="height: 100px;"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" data-dismiss="modal" class="btn btn-primary"
                                            data-toggle="modal" data-target="#confirmation">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="confirmation" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document" style="text-align: center;">
                        <div class="modal-content">
                            <div class="modal-body" style="margin: 0 auto;">
                                <h5 style="text-align: center;">
                                    Thank You!
                                </h5><br>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                    <circle class="path circle" fill="none" stroke="#00d9e2" stroke-width="6"
                                            stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                    <polyline class="path check" fill="none" stroke="#00d9e2" stroke-width="6"
                                              stroke-linecap="round" stroke-miterlimit="10"
                                              points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                </svg>
                                <h6 style="text-align: center;">Your questions have been submitted for review. You will
                                    be notified if the client chooses you for shortlisting.</h6>
                            </div>
                            <div class="modal-footer" style="margin: 0 auto;">
                                <button type="button" class="btn btn-brand" data-dismiss="modal">
                                    OK
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="refusal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document" style="text-align: center;">
                        <div class="modal-content">
                            <div class="modal-body" style="margin: 0 auto;">
                                <h5 style="text-align: center;">
                                    Reject Brief?
                                </h5><br>
                                <h6 style="text-align: center;">Are you sure you want to reject this brief?</h6>
                            </div>
                            <div class="modal-footer" style="margin: 0 auto;">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    Yes
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Datatable -->
            </div>
        </div>
        <!--End::Main Portlet-->
    </div>
</div>
</div>
<!-- end:: Body -->
<!-- begin::Footer -->
@include('layouts.agency.footer')
<!-- end::Footer -->

<!-- end:: Page -->
<!-- begin::Quick Sidebar -->
@include('layouts.agency.quick-sidebar');
<!-- end::Quick Sidebar -->

<!--begin::Base Scripts -->
@include('layouts.agency.base-scripts');
<!--end::Base Scripts -->
<!--begin::Page Vendors -->

<!--end::Page Vendors -->
<!--begin::Page Snippets -->

<script src="js/view-briefs.js" type="text/javascript"></script>

<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
