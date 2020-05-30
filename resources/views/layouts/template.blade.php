<!DOCTYPE html>
<html lang="en">
<head>
	@include('components.meta')
</head>
<body>
	{{-- Header --}}
	@include("layouts.navbar")


	{{-- Main Contents --}}
	@yield("contents")

	{{-- Footer --}}
	@include("layouts.footer")
</body>
</html>