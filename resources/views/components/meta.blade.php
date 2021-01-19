{{-- TITLE PAGE --}}
<title>@yield("title")</title>


{{-- META TAGS --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- FAVICON --}}

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

{{-- CUSTOMIZE CSS --}}
<link rel="stylesheet" href="{{asset('/css/navbar.css')}}">
<link rel="stylesheet" href="{{asset('/css/carousel.css')}}">
<link rel="stylesheet" href="{{asset('/css/index_latest_features.css')}}">
<link rel="stylesheet" href="{{asset('/css/sidebar.css')}}">
<link rel="stylesheet" href="{{asset('/css/product_navbar.css')}}">
<link rel="stylesheet" href="{{asset('/css/product_card.css')}}">
<link rel="stylesheet" href="{{asset('/css/product_form.css')}}">
<link rel="stylesheet" href="{{asset('/css/product_view_details.css')}}">
<link rel="stylesheet" href="{{asset('/css/modal_cards.css')}}">
<link rel="stylesheet" href="{{asset('/css/services.css')}}">
<link rel="stylesheet" href="{{asset('/css/admin_dashboard.css')}}">
<link rel="stylesheet" href="{{asset('/css/admin_inventory_management_system.css')}}">
<link rel="stylesheet" href="{{asset('/css/admin_dashboard_navbar.css')}}">
<link rel="stylesheet" href="{{asset('/css/admin_dashboard_sidebar.css')}}">
<link rel="stylesheet" href="{{asset('/css/admin_dashboard_footer.css')}}">
<link rel="stylesheet" href="{{asset('/css/validation_style.css')}}">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="https://kit.fontawesome.com/7ad70736cf.js" crossorigin="anonymous"></script>

{{-- jQuery Validation library --}}
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.min.js"></script>

{{-- CUSTOMIZE JS --}}
<script src="{{asset('/js/sidebar.js')}}"></script>
<script src="{{asset('/js/tab_image_list.js')}}"></script>
<script src="{{asset('/js/quantity_button.js')}}"></script>
