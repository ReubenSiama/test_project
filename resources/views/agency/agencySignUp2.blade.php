@include('layouts.head')
<style>
			
			.select2-container--default .select2-selection--single .select2-selection__rendered {
				
				text-align: left;
				display: table!important;
        table-layout: fixed!important;
			}
			.m-form.m-form--fit .m-form__content, .m-form.m-form--fit .m-form__heading, .m-form.m-form--fit .m-form__group {
				padding-left: 0px!important;
				padding-right: 0px!important;
			}
		</style>
	</head>
	<!-- end::Head -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(agencyAssets/app/media/img//bg/bg-3.jpg);">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__contanier" style="text-align: center; padding: 0% 10%;">
								<img src="agencyAssets/logos/briefmatch_logo_blue@2x.png" width="75%" style="margin: 0 auto; display: block;">
						<br><br><br><br>
							<div style="margin-bottom: 20px; text-align: center;">
								<h3>
									Tell us about your agency:
								</h3>
							</div>
							<form class="m-form m-form--fit" action="/aboutAgency" method="POST">
								{{ csrf_field() }}
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Contact name" name="contactName" required>
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Job Title" name="contactJob" required>
								</div>
								
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Website" name="website" required>
								</div>
								<div class="form-group m-form__group">
									<select class="form-control m-select2" id="matchLocation" name="matchLocation[]" multiple="multiple">
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
								<select class="form-control m-select2" id="matchIndustry" name="industry[]" multiple="multiple" required>
													<option value="automotive">
														Automotive
													</option>
													<option value="b2b">
														Business to Business
													</option>
													<option value="consumerPackagedGoods">
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
													<option value="mediaEntertainment">
														Media & Entertainment
													</option>
													<option value="retail">
														Retail
													</option>
													<option value="technology">
														Technology
													</option>
													<option value="travel">
														Travel
													</option>
											</select>
								</div>
								<div class="form-group m-form__group">
									<select class="form-control m_select2_3" id="matchServices" name="services[]" multiple="multiple">
											
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
								<div class="m-form__actions m-form__actions">
										<div class="row">
											<div class="col-lg-12 ml-lg-auto">
												<button type="submit" class="btn btn-primary" style="display: block; margin: 0 auto;">
													Next
												</button>
											</div>
										</div>
									</div>
							</form>
						</div>
					</div>
			</div>
		</div>
		<!-- end:: Page -->   
	    		    
    	<!--begin::Base Scripts -->
		@include('layouts.baseScripts')
		<!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
		<script src="js/form-controls.js" type="text/javascript"></script>
		<script src="js/select2.js" type="text/javascript"></script>
		<script src="js/ion-range-slider.js" type="text/javascript"></script>
<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>