<!DOCTYPE html>
<html>
<head>
	<title>LARAVEL</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}">
</head>
<body>
	<div id="main">
		<div id="header"></div>
		<div id="content">
			@yield('content')
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>