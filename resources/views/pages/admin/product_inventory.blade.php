@extends('layouts.admin_layouts.admin_dashboard_template')

@section('contents')
    {{-- header --}}
    @include('layouts.admin_layouts.header')

    {{-- crud panel card--}}
    @include('pages.admin.crud.inventory_management_panel')

    {{-- invetory history card --}}
    @include('layouts.admin_layouts.inventory_history_card')
@endsection