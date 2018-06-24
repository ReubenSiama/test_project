<?php
//mosaic
?>

@include('layouts.client.head')

		<!--begin::Page Vendors -->
		
		<!--end::Page Vendors -->
	</head>
	<!-- end::Head -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(agencyAssets/app/media/img//bg/bg-3.jpg);">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__contanier" style="text-align: center; padding: 0% 20%;">
						<div class="m-login__logo">
							<a href="#">
								<img src="agencyAssets/logos/briefmatch_logo_blue@2x.png" width="70%">
							</a>
						</div><br><br>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Sign In
								</h3><br>
							</div>
							<form class="m-login__form m-form" action="/login" method="POST" id="loginForm">
								{{ csrf_field() }}
								<div class="form-group m-form__group">
									<input class="form-control m-input"   type="text" placeholder="Email" name="email" required>
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" required>
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--focus">
											<input type="checkbox" name="remember">
											Remember me
											<span></span>
										</label>
									</div>
									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">
											Forget Password ?
										</a>
									</div>
								</div><br>
								<input type="hidden" name="type" id="type">
								<div class="m-login__form-action">
									<button onclick="beforeLogin('Client')" type="button" class="btn btn-primary" style="margin-top: 20px;">
										Sign In As Client
									</button>
									<button onclick="beforeLogin('Agency')" type="button"  class="btn btn-primary" style="margin-top: 20px;">
										Sign In As Agency
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Forgotten Password ?
								</h3><br>
								<div class="m-login__desc">
									Enter your email to reset your password:
								</div>
							</div><br>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-primary" style="margin-top: 20px;">
										Request
									</button>
									&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn btn-primary" style="margin-top: 20px;">
										Cancel
									</button>
								</div>
							</form>
						</div><br><br>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>
							&nbsp;&nbsp;
							<a href="/" class="m-link m-link--dark m-login__account-link">
								Sign Up
							</a>
						</div>
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
		<script>
			function beforeLogin(arg){
				document.getElementById('type').value = arg;
				var form = document.getElementById('loginForm');
				form.submit();
			}
			@if(session('error'))
				alert("{{ session('error') }}");
			@endif
		</script>
	</body>
	<!-- end::Body -->
</html>
