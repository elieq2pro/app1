<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Q2Pro')</title>
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
	<script type="text/javascript" src="{{mix('/js/app.js')}}" defer></script>
</head>
<body>
	@include('partials.nav')
	@include('partials.session-status')
	@yield('content')
</body>
</html>