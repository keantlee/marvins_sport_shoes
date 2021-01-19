@extends('layouts.admin_layouts.admin_dashboard_template')

@section('contents')
    {{-- header --}}
    @include('layouts.admin_layouts.header')

    <div class="container mt-5 mb-5">
        {{-- product details card --}}
        @include('components.admin_components.inventory_management_system.product_details_card')

        {{-- suggestion product card --}}
        @include('layouts.admin_layouts.suggestion_product_card')
    </div>
@endsection