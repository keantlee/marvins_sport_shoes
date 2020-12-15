<!-- navBar -->
<div class="">
    <nav class="navbar navbar-expand navbar-light fixed-top bg-light">
        <a class="navbar-brand" href=" {{ route('home') }}">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02"
            aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href=" {{ route('home') }} "> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> Browse Products </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="{{ route('jordan-shoe')}}"> Air Jordan Shoes </a>
                        <a class="dropdown-item" href="kobe_shoes.html"> Kobe Sport Shoes </a>
                        <a class="dropdown-item" href="Nike_shoes.html"> Nike Sport Shoes </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services"> Services </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact"> Contact Us </a>
                </li>
            </ul>
        </div>
            <a class="nav-link sign-in-link" href="#Sign-in">Sign-In</a> / <a class="nav-link sign-up-link" href="#Sign-up">Sign-Up</a>
    </nav>
</div>