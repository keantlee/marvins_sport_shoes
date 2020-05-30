@extends('layouts.template')

@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EMAIL VERIFICATION') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Your email verification has been verify successfully!') }}
                    </div>
                    @endif

                    {{ __('You may now continue your shopping our dear customer.') }}
                    <br>
                    <br>
                    <a class="btn btn-primary" href="{{ url('/') }}">Go Shopping!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection