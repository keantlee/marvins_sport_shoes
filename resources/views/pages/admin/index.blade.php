@extends('layouts.admin_layouts.admin_dashboard_template')

@section('contents')
    {{-- header --}}
    @include('layouts.admin_layouts.header')

    <div class="welcome">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h2>Welcome to Dashboard</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-3">
            {{-- Others card --}}
            @include('components.admin_components.admin_dashboard.others_card')

            {{-- shipping status card --}}
            @include('components.admin_components.admin_dashboard.shipping_status_card')

            {{-- order status card --}}
            @include('components.admin_components.admin_dashboard.order_status_card')

            {{-- inventory history card --}}
            @include('components.admin_components.admin_dashboard.inventory_history_card')
        </div>
    </div>
@endsection