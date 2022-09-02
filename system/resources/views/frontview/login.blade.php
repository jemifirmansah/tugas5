<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/price-range.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/animate.css" rel="stylesheet">
	<link href="{{url('public')}}/assets/css/main.css" rel="stylesheet">
	<link href="{{url('public')}}/assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{url('public')}}/assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('public')}}/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('public')}}/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('public')}}/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{url('public')}}/assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="home"><img src="{{url('public')}}/assets/images/home/logo.png" alt="" /></a>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="home">Home</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="form"><!--form-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<div class="login-form"><!--login form-->
							<h2>Login to your account</h2>
							<form action="Beranda">
								<input type="email" placeholder="Email Address" />
								<input type="password" placeholder="Password" />
								<span>
									<input type="checkbox" class="checkbox"> 
									Keep me signed in
								</span>
								<button type="submit" class="btn btn-default">Login</button>
							</form>
						</div><!--/login form-->
					</div>
					<div class="col-sm-1">
						<h2 class="or">OR</h2>
					</div>
					<div class="col-sm-4">
						<div class="signup-form"><!--sign up form-->
							<h2>New User Signup!</h2>
							<form action="home">
								<input type="text" placeholder="Name"/>
								<input type="email" placeholder="Email Address"/>
								<input type="password" placeholder="Password"/>
								<button type="submit" class="btn btn-default">Signup</button>
							</form>
						</div><!--/sign up form-->
					</div>
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{url('public')}}/assets/js/jquery.js"></script>
	<script src="{{url('public')}}/assets/js/price-range.js"></script>
    <script src="{{url('public')}}/assets/js/jquery.scrollUp.min.js"></script>
	<script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/assets/js/jquery.prettyPhoto.js"></script>
    <script src="{{url('public')}}/assets/js/main.js"></script>
</body>
</html>