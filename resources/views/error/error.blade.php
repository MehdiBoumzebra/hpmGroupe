<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Hpm groupe 404 page not found </title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="{{asset('404/css/font-awesome.min.css')}}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('404/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div id="notfound">
		<div class="notfound-bg">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		<div class="notfound">
			<div class="notfound-404">
				<h1>{{ $error }}</h1>
			</div>
			<h2>Page Not Found</h2>
			<p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
			<a href="{{ route('home', app()->getLocale() ) }}">Homepage</a>
			<div class="notfound-social">
				<a href="https://www.facebook.com/HPM-Maroc-Horizon-Project-Management-Maroc-114855735241406/" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://www.linkedin.com/company/horizon-project-management---hpm-maroc" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
