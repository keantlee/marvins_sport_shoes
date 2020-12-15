@extends('layouts.product_template')

@section('contents')
<div class="container container-product-card">
    <form action="">
        <nav class="navbar product-navbar mb-3 mt-3">
            <div class="dropdown">
                <button role="button" type="button" class="btn shadow-none sortby-btn" data-toggle="dropdown">
                    SortBy
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Best Selling <i class="far fa-angle-double-right"></i></a>
                    <a class="dropdown-item" href="#">Newest</a>
                    <a class="dropdown-item" href="#">Oldest</a>
                    <a class="dropdown-item" href="#">Price: Low-High</a>
                    <a class="dropdown-item" href="#">Price: Hight-Low</a>
                </div>
            </div>
        </nav>
    </form>
    <br/>

    <div class="product-row-cards mb-5">
        @php
        $i = 1;
        // let say that we have an 8 products on the database.
        for($i; $i<=8; $i++) { 
            echo '<div class="shoe-card">'; 
                echo '<div class="img-hover">';
                    echo '<img class="shoe-img" src="/images/shoes/air jordan 1 low.jpg" alt="shoes">';
                    echo '<div class="card-buttons">'; 
                        echo '<span>' ;
            // echo "<button class='button btn-details' onclick='window.location.href='kobe_shoes.html'>" ;
            // echo "<img src='/images/icons/eye.png' alt=''> </button>" ; //
                        echo '<button onclick="window.location.href=" class="button btn-details"> <img src="/images/icons/eye.png" alt=""> </button>'; 
                        echo '<form>';
                            echo '<button type="submit" class="button btn-price"><img src="/images/icons/shopping-cart (1).png" alt=""></button>'; 
                        echo '</form>'; 
                        echo '</span>'; 
                    echo '</div>'; 
                echo '</div>'; 
                echo '<div class="product-content">';
                    echo "<h3 class='title'>Mens's Designer Top</h3>" ; 
                    echo '<p class="price">$599.99</p>'; 
                echo '</div>';
                echo '<br/>';
            echo '</div>' ; } 
        @endphp 
    </div>
    <br/>
        {{-- <div class='product-row-cards mb-5'>
        <div class="shoe-card">
            <div class="img-hover">
                <img class="shoe-img" src="/images/shoes/air jordan 1 low.jpg" alt="shoes">
                <div class="card-buttons">
                    <span>
                        <button onclick="window.location.href='#'" class="button btn-details"><img src="/images/icons/eye.png" alt=""></button>
                        <form action="">
                            <button type="submit" class="button btn-price"><img src="/images/icons/shopping-cart (1).png" alt=""></button>
                        </form>
                    </span>
                </div>
            </div>
            <div class="product-content">
                <h3 class="title">Mens's Designer Top</h3>
                <p class="price">$599.99</p>
            </div>
        </div>
        <div class="shoe-card">
            <div class="img-hover">
                <img class="shoe-img" src="/images/shoes/Jordan jumpman 2020 pf.jpg" alt="shoes">
                <div class="card-buttons">
                    <span>
                        <button onclick="window.location.href='#'" class="button btn-details"><img src="/images/icons/eye.png" alt=""></button>
                        <form action="">
                            <button type="submit" class="button btn-price"><img src="/images/icons/shopping-cart (1).png" alt=""></button>
                        </form>
                    </span>
                </div>
            </div>
            <div class="product-content">
                <h3 class="title">Men's Designer Top</h3>
                <p class="price">$599.99</p>
            </div>
        </div>
        <div class="shoe-card">
            <div class="img-hover">
                <img class="shoe-img" src="/images/shoes/Jordan jumpman 2020 pf.jpg" alt="shoes">
                <div class="card-buttons">
                    <span>
                        <button onclick="window.location.href='#'" class="button btn-details"><img src="/images/icons/eye.png" alt=""></button>
                        <form action="">
                            <button type="submit" class="button btn-price"><img src="/images/icons/shopping-cart (1).png" alt=""></button>
                        </form>
                    </span>
                </div>
            </div>
            <div class="product-content">
                <h3 class="title">Men's Designer Top</h3>
                <p class="price">$599.99</p>
            </div>
        </div>
        <div class="shoe-card">
            <div class="img-hover">
                <img class="shoe-img" src="/images/shoes/Jordan jumpman 2020 pf.jpg" alt="shoes">
                <div class="card-buttons">
                    <span>
                        <button onclick="window.location.href='#'" class="button btn-details"><img src="/images/icons/eye.png" alt=""></button>
                        <form action="">
                            <button type="submit" class="button btn-price"><img src="/images/icons/shopping-cart (1).png" alt=""></button>
                        </form>
                    </span>
                </div>
            </div>
            <div class="product-content">
                <h3 class="title">Men's Designer Top</h3>
                <p class="price">$599.99</p>
            </div>
        </div>
    </div>
    <div class='product-row-cards mb-5'>
        <div class="shoe-card">
            <div class="img-hover">
                <img class="shoe-img" src="/images/shoes/air jordan 1 low.jpg" alt="shoes">
                <div class="card-buttons">
                    <span>
                        <button onclick="window.location.href='#'" class="button btn-details"><img src="/images/icons/eye.png" alt=""></button>
                        <form action="">
                            <button type="submit" class="button btn-price"><img src="/images/icons/shopping-cart (1).png" alt=""></button>
                        </form>
                    </span>
                </div>
            </div>
            <div class="product-content">
                <h3 class="title">Mens's Designer Top</h3>
                <p class="price">$599.99</p>
            </div>
        </div>
        <div class="shoe-card">
            <div class="img-hover">
                <img class="shoe-img" src="/images/shoes/Jordan jumpman 2020 pf.jpg" alt="shoes">
                <div class="card-buttons">
                    <span>
                        <button onclick="window.location.href='#'" class="button btn-details"><img src="/images/icons/eye.png" alt=""></button>
                        <form action="">
                            <button type="submit" class="button btn-price"><img src="/images/icons/shopping-cart (1).png" alt=""></button>
                        </form>
                    </span>
                </div>
            </div>
            <div class="product-content">
                <h3 class="title">Men's Designer Top</h3>
                <p class="price">$599.99</p>
            </div>
        </div>
        <div class="shoe-card">
            <div class="img-hover">
                <img class="shoe-img" src="/images/shoes/Jordan jumpman 2020 pf.jpg" alt="shoes">
                <div class="card-buttons">
                    <span>
                        <button onclick="window.location.href='#'" class="button btn-details"><img src="/images/icons/eye.png" alt=""></button>
                        <form action="">
                            <button type="submit" class="button btn-price"><img src="/images/icons/shopping-cart (1).png" alt=""></button>
                        </form>
                    </span>
                </div>
            </div>
            <div class="product-content">
                <h3 class="title">Men's Designer Top</h3>
                <p class="price">$599.99</p>
            </div>
        </div>
        <div class="shoe-card">
            <div class="img-hover">
                <img class="shoe-img" src="/images/shoes/Jordan jumpman 2020 pf.jpg" alt="shoes">
                <div class="card-buttons">
                    <span>
                        <button onclick="window.location.href='#'" class="button btn-details"><img src="/images/icons/eye.png" alt=""></button>
                        <form action="">
                            <button type="submit" class="button btn-price"><img src="/images/icons/shopping-cart (1).png" alt=""></button>
                        </form>
                    </span>
                </div>
            </div>
            <div class="product-content">
                <h3 class="title">Men's Designer Top</h3>
                <p class="price">$599.99</p>
            </div>
        </div>
    </div> --}} </div> 
@endsection