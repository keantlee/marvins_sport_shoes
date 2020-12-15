<!DOCTYPE html>
<html lang="en">
<head>
	@include('components.meta')
</head>
<body>
    {{-- Header --}}
    @include("layouts.user_dashboard_navbar")

    {{-- Content --}}
    @yield("contents")

    {{-- Footer --}}
	@include("layouts.footer")
</body>
</html>