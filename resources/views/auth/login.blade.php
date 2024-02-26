<!DOCTYPE html>
<html lang="en">
<head>
	<title>Selamat Datang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset_login')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset_login')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset_login')}}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('asset_login')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset_login')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset_login')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('asset_login')}}/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				{{-- <div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('asset_login')}}/images/vote.png" alt="IMG">
				</div> --}}

				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					@csrf
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input">
						@error('name')                            
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
						<input class="input100" type="text" name="name" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
						
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						@error('password')                            
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
					</div>
					<a href="/register">Belum punya akun? Register disini</a>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{asset('asset_login')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset_login')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{asset('asset_login')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset_login')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset_login')}}/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('asset_login')}}/js/main.js"></script>

</body>
</html>