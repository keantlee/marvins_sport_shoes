<!DOCTYPE html>
<html lang="en">
<head>
	@include('components.meta')
</head>
<body>
	{{-- Header --}}
    @include("layouts.navbar")

    {{-- carousel --}}
    {{-- @include("components.dashboard_carousel") --}}

	{{-- Main Contents --}}
	@yield("contents")

	{{-- Footer --}}
	@include("layouts.footer")
</body>
</html>