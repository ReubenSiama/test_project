@include('layouts.head')

		<!--begin::Page Vendors -->
		
		<!--end::Page Vendors -->
	</head>
	<!-- end::Head -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(assets/app/media/img//bg/bg-3.jpg);">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__contanier" style="text-align: center; padding: 0% 10%;">
								<img src="agencyAssets/logos/briefmatch_logo_blue@2x.png" width="75%">
						
						<br><br>
							<div class="m-login__head">
								<br>
								<h3 class="m-login__title">
									Client Sign Up
								</h3>
								<div class="m-login__desc">
									Enter your details to create your account:
								</div><br>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Company name" name="companyName">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off" data-toggle="m-tooltip" data-placement="right" title="We’ll notify you when you when agencies express interest">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password" name="password">
								</div>
								<div class="m-login__form-sub">
									<label class="m-checkbox m-checkbox--focus">
										<input type="checkbox" name="agree">
										I Agree the
										<a href="#" class="m-link m-link--focus" style="color: #00d3df;">
											terms and conditions
										</a>
										.
										<span></span>
									</label>
									<span class="m-form__help"></span>
								</div>
								<div class="m-form__actions m-form__actions">
										<div class="row">
											<div class="col-lg-12 ml-lg-auto">
												<a href="client-setup.php">
												<button type="button" class="btn btn-primary">
													Sign Up
												</button></a>
													
												<button type="reset" class="btn btn-secondary">
													Cancel
												</button>
											</div>
										</div>
									</div>
							</form>
					</div>
				</div>
			</div>
		</div>
		<!-- begin:: Page -->
		<!-- end:: Page -->   
	    		    
    	<!--begin::Base Scripts -->
		@include('layouts.baseScripts')
		<!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
		<script src="js/login.js" type="text/javascript"></script>
<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>