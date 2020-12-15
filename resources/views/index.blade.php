@extends('layouts.template')

@section('contents')
    {{-- 
        1.) Use ForEach condition to get data in productController.php
        2.) show at least 3 images, feature heading and product description
    --}}
    <div class="container mt-5">
        @php
            $i = 1;
            for($i; $i<=3; $i++)
            {
                echo '<div class="row">';
                    echo '<div class="col-md-7">';
                        echo '<h2 class="first-feature-heading"> Insert feature heading here...</h2>';
                        echo '<h2><span class="second-feature-heading"> Insert second feature heading here...</span></h2>';
                        echo '<p class="describe-product"> Insert product description here...</p>';
                        echo '<p><a href="#" class="btn btn-lg btn-primary" role="button" style="float:right">View</a></p>';
                    echo '</div>';
                    echo '<div class="col-md-5">';
                        echo  '<img class="index-shoe-img img-fluid mx-auto" src="/images/shoes/air jordan banned.jpg" preserveAspectRatio="xMidYMid slice"
                        focusable="false" role="img" aria-label="Placeholder: 500x500">';
                    echo '</div>';
                echo '</div>';
                echo '<hr>';
                echo '</br>';
            }
        @endphp
        @include('pages.service')
    </div>
@endsection