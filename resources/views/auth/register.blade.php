@extends('layouts.template_login_register')

<div class="container login_register_container" id="container">
    <div class="login_register_form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h1 class='log_reg_header_h1'>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social .log_reg_header_a"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social .log_reg_header_a"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social .log_reg_header_a"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <span class=".log_reg_header_span">or use your email for registration</span>

            <input id="name" type="text" class="login_register_input @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback .log_reg_header_span" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="email" type="email" class="login_register_input @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback .log_reg_header_span" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" type="password" class="login_register_input @error('password') is-invalid @enderror"
                name="password" placeholder="Password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback .log_reg_header_span" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password-confirm" type="password" class="login_register_input" name="password_confirmation"
                placeholder="Confirm Password" required autocomplete="new-password">

            <button class="sign-up-btn">Sign Up</button>
        </form>
    </div>
    {{-- Login --}}
    <div class="login_register_form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1 class='log_reg_header_h1'>Log in</h1>
            <div class="social-container">
                <a href="#" class="social .log_reg_header_a"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social .log_reg_header_a"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social .log_reg_header_a"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <span class=".log_reg_header_span">or use your account</span>

            <input id="email" type="email" class="login_register_input @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback .log_reg_header_span" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" type="password" class="login_register_input @error('password') is-invalid @enderror"
                name="password" placeholder="Password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback .log_reg_header_span" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="form-check mt-3 mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember"> {{ __('Remember Me') }} </label>
            </div>

            <button class="sign-in-btn">Sign In</button>

            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </form>
    </div>

    {{-- Messages --}}
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1 class='log_reg_header_h1'>Already have account?</h1>
                <p class="log_reg_info">Log in your account and Buy new release sport shoes today!</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1 class='log_reg_header_h1'>Don't have an account?</h1>
                <p class="log_reg_info">Sign Up your details and experience shopping to your favorite sport shoes</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>