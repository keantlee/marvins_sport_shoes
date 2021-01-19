<!DOCTYPE html>
<html lang="en">
<head>
	@include('components.meta')
</head>
<body class="admin_dashboard_body">

    {{-- Content --}}
    @include("layouts.admin_layouts.admin_dashboard_content")
    <script src="{{asset('/js/product_ajax_crud_modal.js')}}"></script>
</body>
</html>