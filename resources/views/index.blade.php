@extends('layouts.template_dashboard')

@section('contents')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            {{-- Hottest product introduction! --}}
            <h2 class="featurette-heading">Find Our Best Seller Jordan Shoes! </h2>
            <h2><span class="text-muted">Jump Higher with Jordan XXXI</span></h2>

            {{-- description to catch person to view the product --}}
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                tellus ac cursus commodo.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button" style='float:right'>View</a></p>
        </div>
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" src="images/shoes/air jordan banned.jpg" preserveAspectRatio="xMidYMid slice"
                focusable="false" role="img" aria-label="Placeholder: 500x500">
        </div>
    </div>
</div>
@endsection