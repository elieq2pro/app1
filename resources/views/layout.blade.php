<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Q2Pro')</title>
	<style type="text/css">
		.active a {
			color: red;
			text-decoration: none;
		}
	</style>
</head>
<body>
	@include('partials.nav')
	@yield('content')
</body>
</html>