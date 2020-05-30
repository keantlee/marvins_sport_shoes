<!DOCTYPE html>
<html lang="en">
<head>
	@include('components.meta')
</head>
<body class="login_register_body">
	{{-- Header --}}
	@include("layouts.navbar")


	{{-- Main Contents --}}
	@yield("contents")

	{{-- Footer --}}
	@include("layouts.footer")
</body>
</html>