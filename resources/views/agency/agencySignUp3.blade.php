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
								<img src="agencyAssets/logos/briefmatch_logo_blue@2x.png" width="70%" style="margin: 0 auto; display: block;">
						<br><br><br><br>
							<div class="m-login__head" style="margin-bottom: 30px;">
								
								<h3>
									What type of clients would you like to work with?
								</h3>
							</div>
							<form class="m-login__form m-form" action="/client_types" method="POST">
								{{ csrf_field() }}
								<div class="form-group m-form__group">
									<label class="select2-container--default">Select the budgets you want to work with:</label>
								<div class="m-ion-range-slider">
												<input name="budget" type="hidden" id="m_slider_3"/>
											</div>
								</div>
								<div class="form-group m-form__group">
									<label class="select2-container--default">Can work with clients in: </label><br/> 
								<div class="m-ion-range-slider">
												<input name="kmRange" type="hidden" id="distance"/>
											</div>
								</div>
								<div class="form-group m-form__group">
									<label class="select2-container--default">Languages supported?</label><br/> 
									<select class="form-control m_select2_3" id="matchLanguages" name="services[]" multiple="multiple">
											
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
								<div class="m-form__actions m-form__actions">
										<div class="row">
											<div class="col-lg-12 ml-lg-auto">
												<button type="submit" class="btn btn-primary">
													Complete Setup
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
		<script src="js/dashboard.js" type="text/javascript"></script>
		<script src="js/view-briefs.js" type="text/javascript"></script>
		<script src="js/login.js" type="text/javascript"></script>
		<script src="js/select2.js" type="text/javascript"></script>
		<script src="js/ion-range-slider.js" type="text/javascript"></script>
		<script src="js/form-controls.js" type="text/javascript"></script>
<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>