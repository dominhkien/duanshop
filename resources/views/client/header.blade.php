
<!-- Body main wrapper start -->
<div class="wrapper">

<!-- START HEADER SECTION -->
<header class="header-section section sticker">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <!-- logo -->
                <div class="header-logo">
                    <a href="{{route('client.index')}}"><img src="{{ asset('client/img/logo.png')}}" alt="main logo"></a>
                </div>
            </div>
            <div class="col-auto d-flex">
                <!-- header-search & total-cart -->
                <nav class="main-menu">
                    <ul>
                        <li><a href="{{route('client.index')}}">Home</a>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <!-- header-search & total-cart -->
                <div class="header-option-btns d-flex">
                    
                    <!-- header-search -->
                    <div class="header-search">
                        <button class="search-toggle"><i class="pe-7s-search"></i></button>
                        <div class="header-search-form">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><i class="fa fa-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- header Account -->
                    <div class="header-account">
                        <ul>
                            <li><a style="cursor: pointer;" class="account-toggle"><i class="pe-7s-config"></i></a>
                                <ul class="account-menu">
                                    
                                    @if (Auth::check())
                                    <li><a href="{{route('myaccount.create')}}">My Account</a></li>
                                    <li><a href="{{route('logout')}}">Logkout</a></li>
                                    @else
                                    <li><a href="{{route('login.index')}}">Log in</a></li>
                                    @endif
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Header Cart -->
                    <div class="header-cart">
                        <!-- Cart Toggle -->
                        <a class="cart-toggle" href="#">
                            <i class="pe-7s-cart"></i>
                        </a>
                        <!-- Mini Cart Brief -->
                        
                    </div>
                    
                    
                    
                </div>
            </div>
            <div class="mobile-menu"></div>
        </div>
    </div>
</header>
<!-- END HEADER SECTION -->