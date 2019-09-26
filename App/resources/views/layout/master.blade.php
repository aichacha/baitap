<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<style type="text/css">
     
</style>
<body>
<div>
	<div class="header">Header</div>
	<div class="navbar">
		<ul>
			<li>1</li>
			<li>1</li>
			<li>1</li>
			<li>1</li>
		</ul>
	</div>

	<div class="container">
		<div class="content">
			<div>@yield('table_name') table</div>
		<div>
			@yield('table')
		</div>
		<div class="Footer">Footer</div>
	</div>
	@yield('custom')
</div>
</body>
</html>