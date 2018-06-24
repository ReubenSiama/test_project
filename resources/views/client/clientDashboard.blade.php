<?php
//mosaic
?>

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
        <!--begin:: Widgets/Profit Share-->
        <div class="row m-row--full-height">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="m-portlet m-portlet--full-height m-portlet--border-bottom-brand "
                     style="max-height: 165px; ">
                    <div class="m-portlet__body">
                        <div class="m-widget26">
                            <div class="m-widget26__number">
                                5
                                <small>
                                    Live Briefs
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
                                4
                                <small>
                                    Responses
                                </small>
                            </div>
                            <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                <canvas id="m_chart_quick_stats_2"></canvas>
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
                                4
                                <small>
                                    Shortlisted
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
                                4
                                <small>
                                    Accepted
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
                            Briefs
                        </h3>
                    </div>
                </div>

            </div>
            <div class="m-portlet__body">
                <!--begin: Selected Rows Group Action Form -->
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30 collapse"
                     id="m_datatable_group_action_form">
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                            <div class="m-form__group m-form__group--inline">
                                <div class="m-form__label m-form__label-no-wrap">
                                    <label class="m--font-bold m--font-danger-">
                                        Selected
                                        <span id="m_datatable_selected_number"></span>
                                        records:
                                    </label>
                                </div>
                                <div class="m-form__control">
                                    <div class="btn-toolbar">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-accent btn-sm dropdown-toggle"
                                                    data-toggle="dropdown">
                                                Update status
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">
                                                    Open
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Closed
                                                </a>
                                            </div>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;
                                        <button class="btn btn-sm btn-danger" type="button" id="m_datatable_check_all">
                                            Delete Checked
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Selected Rows Group Action Form -->
                <!--begin: Datatable -->
                <div class="m_datatable" id="view_briefs"></div>
                <!--end: Datatable -->
            </div>
        </div>

        <!--begin:: Widgets/User Progress -->
        <div class="m-portlet m-portlet--full-height ">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Recent Accepted Invites
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-right">
                            <div class="col-xl-12 col-md-9 col-sm-9 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-right">
                                    <div class="m-input-icon m-input-icon--left">
                                        <input type="text" class="form-control m-input" placeholder="Search..."
                                               id="liveBriefsSearch">
                                        <span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="m_widget4_tab1_content">
                        <div class="m-widget4 m-widget4--progress">
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="clientAssets/app/media/img/users/100_1.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
															<span class="m-widget4__title">
																Lisa White
															</span>
                                    <br>
                                    <span class="m-widget4__sub">
																Web Designer
															</span>
                                </div>
                                <div class="m-list-badge m-list-badge--light-bg">
                                    <div class="m-list-badge__items">
                                        <a href="#" class="m-list-badge__item success-badge">
                                            SEO
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Marketing
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Location: Ireland
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Budget: 10K
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Automotive
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Technology
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Language 1
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Language 2
                                        </a>
                                    </div>
                                </div>

                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       title="View Profile" data-toggle="modal" data-target="#profile1">
                                        <i class="la la-user"></i>
                                    </a>
                                </div>
                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       title="View Answers" data-toggle="modal" data-target="#answers1">
                                        <i class="la la-eye"></i>
                                    </a>
                                </div>
                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       data-toggle="modal" data-target="#confirmationAccept" title="Shortlist">
                                        <i class="flaticon-list"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_7.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
															<span class="m-widget4__title">
																Paul Blake
															</span>
                                    <br>
                                    <span class="m-widget4__sub">
																Project Manager
															</span>
                                </div>
                                <div class="m-list-badge m-list-badge--light-bg">
                                    <div class="m-list-badge__items">
                                        <a href="#" class="m-list-badge__item success-badge">
                                            SEO
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Marketing
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Location: Ireland
                                        </a>
                                        <a href="#" class="m-list-badge__item danger-badge">
                                            Budget: 10K
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Automotive
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Technology
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Language 1
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Language 2
                                        </a>
                                    </div>
                                </div>
                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       title="View Profile" data-toggle="modal" data-target="#profile1">
                                        <i class="la la-user"></i>
                                    </a>
                                </div>
                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       title="View Answers" data-toggle="modal" data-target="#answers1">
                                        <i class="la la-eye"></i>
                                    </a>
                                </div>

                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       data-toggle="modal" data-target="#confirmationAccept" title="Shortlist">
                                        <i class="flaticon-list"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_12.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
															<span class="m-widget4__title">
																Tom Smith
															</span>
                                    <br>
                                    <span class="m-widget4__sub">
																Product Designer
															</span>
                                </div>
                                <div class="m-list-badge m-list-badge--light-bg">
                                    <div class="m-list-badge__items">
                                        <a href="#" class="m-list-badge__item success-badge">
                                            SEO
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Marketing
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Location: Ireland
                                        </a>
                                        <a href="#" class="m-list-badge__item danger-badge">
                                            Budget: 10K
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Automotive
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Technology
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Language 1
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Language 2
                                        </a>
                                    </div>
                                </div>
                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       title="View Profile" data-toggle="modal" data-target="#profile1">
                                        <i class="la la-user"></i>
                                    </a>
                                </div>
                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       title="View Answers" data-toggle="modal" data-target="#answers1">
                                        <i class="la la-eye"></i>
                                    </a>
                                </div>

                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       data-toggle="modal" data-target="#confirmationAccept" title="Shortlist">
                                        <i class="flaticon-list"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_10.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
															<span class="m-widget4__title">
																Ian Reardon
															</span>
                                    <br>
                                    <span class="m-widget4__sub">
																Web Developer
															</span>
                                </div>
                                <div class="m-list-badge m-list-badge--light-bg">
                                    <div class="m-list-badge__items">
                                        <a href="#" class="m-list-badge__item success-badge">
                                            SEO
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Marketing
                                        </a>
                                        <a href="#" class="m-list-badge__item danger-badge">
                                            Location: Ireland
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Budget: 10K
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Automotive
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Technology
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Language 1
                                        </a>
                                        <a href="#" class="m-list-badge__item success-badge">
                                            Language 2
                                        </a>
                                    </div>
                                </div>
                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       title="View Profile" data-toggle="modal" data-target="#profile1">
                                        <i class="la la-user"></i>
                                    </a>
                                </div>
                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       title="View Answers" data-toggle="modal" data-target="#answers1">
                                        <i class="la la-eye"></i>
                                    </a>
                                </div>

                                <div class="m-widget4__ext" style="padding-right: 10px;">
                                    <a href="#"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                       data-toggle="modal" data-target="#confirmationAccept" title="Shortlist">
                                        <i class="flaticon-list"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="profile1" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document" style="max-width: 600px;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Agency Profile
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="m-card-profile">
                                            <div class="m-card-profile__title m--hide">
                                                Your Profile
                                            </div>
                                            <div class="m-card-profile__pic">
                                                <div class="m-card-profile__pic-wrapper">
                                                    <img src="assets/app/media/img/users/user4.jpg" alt=""/>
                                                </div>
                                            </div>
                                            <div class="m-card-profile__details">
												<span class="m-card-profile__name">
													Lisa White
												</span>
                                                <a href="" class="m-card-profile__email m-link">
                                                    lisa@gmail.com
                                                </a><br><a href="" class="m-card-profile__email m-link">
                                                    www.lisawhite.com
                                                </a>
                                            </div>
                                        </div>

                                        <div class="m-portlet__body">
                                            <div class="m-widget13">
                                                <div class="m-widget13__item">
												<span class="m-widget13__text m-widget13__text-bolder">
													Agency Bio:
												</span>
                                                    <span class="m-widget13__text">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</span>
                                                </div>
                                                <div class="m-widget13__item">
												<span class="m-widget13__text m-widget13__text-bolder">
													Contact Name
												</span>
                                                    <span class="m-widget13__text">
													Lisa White
												</span>
                                                </div>
                                                <div class="m-widget13__item">
												<span class="m-widget13__text m-widget13__text-bolder">
													Location
												</span>
                                                    <span class="m-widget13__text">
													Brazil
												</span>
                                                </div>
                                                <div class="m-widget13__item">
												<span class="m-widget13__text m-widget13__text-bolder">
													Budget Range:
												</span>
                                                    <span class="m-widget13__text m-widget13__text-bolder">
													€20,000 - €25,000
												</span>
                                                </div>
                                                <div class="m-widget13__item">
												<span class="m-widget13__text m-widget13__text-bolder">
													Services Offered:
												</span>
                                                    <span class="m-widget13__text">
													<ul>
													<li>SEO</li>
													<li>Paid Social</li>
													</ul>
												</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#answers1" data-dismiss="modal">
                                            View Answers
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#confirmationAccept" data-dismiss="modal">
                                            Shortlist Agency
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="answers1" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Answers Given
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="m-portlet__body">
                                            <div class="m-widget13">
                                                <div class="m-widget13__item">
												<span class="m-widget13__title m--align-right  m-widget13__text-bolder">
													Have you any prior experience to show?
												</span>
                                                    <span class="m-widget13__text  m--align-right">
													Yes I have
												</span>
                                                </div>
                                                <div class="m-widget13__item">
												<span class="m-widget13__title m--align-right  m-widget13__text-bolder">
													Where are you located?
												</span>
                                                    <span class="m-widget13__text  m--align-right">
													Brazil
												</span>
                                                </div>
                                                <div class="m-widget13__item">
												<span class="m-widget13__title m--align-right  m-widget13__text-bolder">
													List an SEO technique.
												</span>
                                                    <span class="m-widget13__text  m--align-right">
													Blog Writing
												</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#profile1" data-dismiss="modal">
                                            View Profile
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#confirmationAccept" data-dismiss="modal">
                                            Shortlist Agency
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="confirmationAccept" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md" role="document" style="text-align: center;">
                                <div class="modal-content">
                                    <div class="modal-body" style="margin: 0 auto;">
                                        <h5 style="text-align: center;">
                                            Shortlist Agency?
                                        </h5><br>
                                        <h6 style="text-align: center;">Are you sure you want to shortlist this
                                            agency?</h6>
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
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="profile1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" style="max-width: 600px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Agency Profile
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                Your Profile
                            </div>
                            <div class="m-card-profile__pic">
                                <div class="m-card-profile__pic-wrapper">
                                    <img src="assets/app/media/img/users/user4.jpg" alt=""/>
                                </div>
                            </div>
                            <div class="m-card-profile__details">
												<span class="m-card-profile__name">
													Lisa White
												</span>
                                <a href="" class="m-card-profile__email m-link">
                                    lisa@gmail.com
                                </a><br><a href="" class="m-card-profile__email m-link">
                                    www.lisawhite.com
                                </a>
                            </div>
                        </div>

                        <div class="m-portlet__body">
                            <div class="m-widget13">
                                <div class="m-widget13__item">
												<span class="m-widget13__text m-widget13__text-bolder">
													Agency Bio:
												</span>
                                    <span class="m-widget13__text">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</span>
                                </div>
                                <div class="m-widget13__item">
												<span class="m-widget13__text m-widget13__text-bolder">
													Contact Name:
												</span>
                                    <span class="m-widget13__text">
													Lisa White
												</span>
                                </div>
                                <div class="m-widget13__item">
												<span class="m-widget13__text m-widget13__text-bolder">
													Location:
												</span>
                                    <span class="m-widget13__text">
													Brazil
												</span>
                                </div>
                                <div class="m-widget13__item">
												<span class="m-widget13__text m-widget13__text-bolder">
													Budget Range:
												</span>
                                    <span class="m-widget13__text m-widget13__text-bolder">
													€20,000 - €25,000
												</span>
                                </div>
                                <div class="m-widget13__item">
												<span class="m-widget13__text m-widget13__text-bolder">
													Services Offered:
												</span>
                                    <span class="m-widget13__text">
													<ul>
													<li>SEO</li>
													<li>Paid Social</li>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="answers1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Answers Given
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="m-portlet__body">
                            <div class="m-widget13">
                                <div class="m-widget13__item">
												<span class="m-widget13__title m--align-right  m-widget13__text-bolder">
													Have you any prior experience to show?
												</span>
                                    <span class="m-widget13__text  m--align-center">
													Yes I have
												</span>
                                </div>
                                <div class="m-widget13__item">
												<span class="m-widget13__title m--align-right  m-widget13__text-bolder">
													Where are you located?
												</span>
                                    <span class="m-widget13__text  m--align-center">
													Brazil
												</span>
                                </div>
                                <div class="m-widget13__item">
												<span class="m-widget13__title m--align-right  m-widget13__text-bolder">
													List an SEO technique.
												</span>
                                    <span class="m-widget13__text  m--align-center">
													Blog Writing
												</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="matches" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="false">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Matched Agencies
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="m-portlet__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_widget4_tab1_content">
                                    <div class="m-widget4 m-widget4--progress">
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--pic">
                                                <img src="assets/app/media/img/users/100_1.jpg" alt="">
                                            </div>
                                            <div class="m-widget4__info">
															<span class="m-widget4__title">
																Lisa White </span>
                                                <br>
                                                <span class="m-widget4__sub">
																Web Designer
															</span>
                                            </div>
                                            <div class="m-widget4__progress">
                                                <div class="m-widget4__progress-wrapper">
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                             style="width: 92%;" aria-valuenow="25" aria-valuemin="0"
                                                             aria-valuemax="92"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget4__ext" style="padding-right: 10px;">
                                                <a href="#"
                                                   class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                                   title="View Profile" data-toggle="modal" data-target="#profile1">
                                                    <i class="la la-user"></i>
                                                </a>
                                            </div>
                                            <div class="m-widget4__ext" style="padding-right: 10px;">
                                                <a href="#"
                                                   class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--pill"
                                                   title="Invite">
                                                    Invite
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--pic">
                                                <img src="assets/app/media/img/users/100_12.jpg" alt="">
                                            </div>
                                            <div class="m-widget4__info">
															<span class="m-widget4__title">
																Tom Smith</span>

                                                <br>
                                                <span class="m-widget4__sub">
																Product Designer
															</span>
                                            </div>
                                            <div class="m-widget4__progress">
                                                <div class="m-widget4__progress-wrapper">
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                             style="width: 85%;" aria-valuenow="45" aria-valuemin="0"
                                                             aria-valuemax="85"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget4__ext" style="padding-right: 10px;">
                                                <a href="#"
                                                   class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                                   title="View Profile" data-toggle="modal" data-target="#profile1">
                                                    <i class="la la-user"></i>
                                                </a>
                                            </div>
                                            <div class="m-widget4__ext" style="padding-right: 10px;">
                                                <a href="#"
                                                   class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--pill"
                                                   title="Invite">
                                                    Invite
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--pic">
                                                <img src="assets/app/media/img/users/100_10.jpg" alt="">
                                            </div>
                                            <div class="m-widget4__info">
															<span class="m-widget4__title">
																Ian Reardon 
															</span>

                                                <br>
                                                <span class="m-widget4__sub">
																Web Developer
															</span>
                                            </div>
                                            <div class="m-widget4__progress">
                                                <div class="m-widget4__progress-wrapper">
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                             style="width: 63%;" aria-valuenow="65" aria-valuemin="0"
                                                             aria-valuemax="63"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget4__ext" style="padding-right: 10px;">
                                                <a href="#"
                                                   class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                                   title="View Profile" data-toggle="modal" data-target="#profile1">
                                                    <i class="la la-user"></i>
                                                </a>
                                            </div>
                                            <div class="m-widget4__ext" style="padding-right: 10px;">
                                                <a href="#"
                                                   class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--pill"
                                                   title="Invite">
                                                    Invite
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__img m-widget4__img--pic">
                                                <img src="assets/app/media/img/users/100_7.jpg" alt="">
                                            </div>
                                            <div class="m-widget4__info">
															<span class="m-widget4__title">
																Paul Blake
															</span>

                                                <br>
                                                <span class="m-widget4__sub">
																Project Manager
															</span>
                                            </div>
                                            <div class="m-widget4__progress">
                                                <div class="m-widget4__progress-wrapper">
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                             style="width: 30%;" aria-valuenow="50" aria-valuemin="0"
                                                             aria-valuemax="30"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget4__ext" style="padding-right: 10px;">
                                                <a href="#"
                                                   class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill"
                                                   title="View Profile" data-toggle="modal" data-target="#profile1">
                                                    <i class="la la-user"></i>
                                                </a>
                                            </div>
                                            <div class="m-widget4__ext" style="padding-right: 10px;">
                                                <a href="#"
                                                   class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--pill"
                                                   title="Invite">
                                                    Invite
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--end:: Widgets/User Progress -->
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
<script src="js/view-briefs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(window).on('load', function () {
        $('#matches').modal('show');
    });
</script>
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
