<!--

-->

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SIG-SIND - Sistema de gestão de sindicatos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Baxster Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="{{URL::asset('public/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{URL::asset('public/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link rel="icon" href="favicon.ico" type="image/x-icon" >
<!-- font-awesome icons -->
<link href="{{URL::asset('public/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!-- js -->
<script src="{{URL::asset('public/js/jquery-1.11.1.min.js')}}"></script>
<!-- //js -->
</head> 
<body class="login-bg">
        <div class="login-body-top"><br></div>
		<div class="login-body">            
			<div class="login-heading">
				<h1>Login</h1>
			</div>
			<div class="login-info">
				<form  role="form" method="POST" action="{{ route('login') }}">
				{!! csrf_field() !!}
					<input type="text" class="user" name="email" placeholder="Email"  value="{{ old('email') }}" required autofocus>

					@if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif	

					<input type="password" name="password" class="lock" placeholder="Senha">

					@if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif


					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" name="remember" {{ old('remember') ? 'checked' : '' }}>
									<label for="brand1"><span></span>Manter-me conectardo</label>
								</li>
							</ul>
						</div>
						<div class="forgot">
							<a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Entrar">
				</form>
			</div>
		</div>
</body>
</html>
