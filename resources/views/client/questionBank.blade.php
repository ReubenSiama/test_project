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
						
								<!--begin:: Widgets/User Progress -->
									<div class="m-content">
						<div class="row">
							<div class="col-xl-3 col-lg-4">
								<div class="m-portlet  ">
									<div class="m-portlet__body">
										<div class="m-card-profile">
											<div class="m-card-profile__title m--hide">
												Your Profile
											</div>
											<div class="m-card-profile__pic">
												<div class="m-card-profile__pic-wrapper">
													<img src="assets/logos/splink.png" alt=""/>
												</div>
											</div>
											<div class="m-card-profile__details">
												<span class="m-card-profile__name">
													{{ Auth::user()->name }}
												</span>
												<a href="" class="m-card-profile__email m-link">
													{{ Auth::user()->email }}
												</a>
												<a href="" class="m-card-profile__email m-link">
													085 123 4567
												</a>
												<a href="" class="m-card-profile__email m-link">
													{{ Auth::user()->CompanyInfo->website }}
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8">
								<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">Question Bank</h3>
											</div>
										</div>
									</div>
											<form class="m-form m-form--fit m-form--label-align-right">
												<div class="m-portlet__body">
													<div class="form-group m-form__group row">
														<label class="col-form-label col-lg-4 col-sm-12">
															Add questions:
														</label>
														<div class="col-lg-7 col-md-7 col-sm-12"style="width: 100%!important">
											<select class="form-control m-select2" id="questionBank" multiple name="param" style="width: 100%!important">
												<option></option>
													<option value="Q1">
														Have you any examples of past experience?
													</option>
													<option value="Q2">
														Are you available for face-to-face meetings?
													</option>
											</select>
											<span class="m-form__help">
												Choose from our preset questions or create your own. Selected questions will be available when creating a brief.
											</span>
										</div>
													</div>
												</div>
												<div class="m-portlet__foot m-portlet__foot--fit">
													<div class="m-form__actions">
														<div class="row">
															<div class="col-4"></div>
															<div class="col-7">
																<button type="reset" class="btn btn-danger m-btn m-btn--air m-btn--custom">
																	Save changes
																</button>
																&nbsp;&nbsp;
																<button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
																	Cancel
																</button>
															</div>
														</div>
													</div>
												</div>
											</form>
								</div>
							</div>
						</div>
					</div>
								<!--end:: Widgets/User Progress -->
								
						<!--End::Main Portlet-->
					</div>
</div></div>
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
		<script src="js/select2.js" type="text/javascript"></script>
<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
