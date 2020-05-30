<div class="">
    <nav class="navbar navbar-expand navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href={{ url('/') }}>LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02"
            aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href={{ url('/') }}> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> Browse Products </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="#"> Air Jordan Shoes </a>
                        <a class="dropdown-item" href="#"> Kobe Sport Shoes </a>
                        <a class="dropdown-item" href="#"> Nike Sport Shoes </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Services </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Contact Us </a>
                </li>
                {{-- Admin and User Should be on right side --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><b>ADMIN</b></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="#"> Products </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link login_register_nav" href="{{ route('register') }}">Login / Register</a>
                </li>
                {{-- <li class="nav-item">
                    @if (Route::has('login'))
                        @auth
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    @endif
                        @endauth
                    @endif
                </li> --}}
            </ul>
        </div>
    </nav>
</div>