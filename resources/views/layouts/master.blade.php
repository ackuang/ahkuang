<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
	@include('layouts.header')
	<div class="container">
		@yield('content')
	</div>
	@include('layouts.script')
</body>
</html>