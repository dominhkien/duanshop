
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
                        <li><a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home one</a></li>
                                <li><a href="index-2.html">Home two</a></li>
                                <li><a href="index-3.html">Home three</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">shop</a></li>
                                <li><a href="product-details.html">product details</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="cart.html">cart</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                                <li><a href="login.html">login</a></li>
                                <li><a href="register.html">register</a></li>
                                <li><a href="wishlist.html">wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">blog</a></li>
                                <li><a href="blog-details.html">blog details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
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
                            <li><a href="#" class="account-toggle"><i class="pe-7s-config"></i></a>
                                <ul class="account-menu">
                                    <li><a href="login.html">Log in</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="wishlist.html">Wish list</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Header Cart -->
                    <div class="header-cart">
                        <!-- Cart Toggle -->
                        <a class="cart-toggle" href="#">
                            <i class="pe-7s-cart"></i>
                            <span>2</span>
                        </a>
                        <!-- Mini Cart Brief -->
                        <div class="mini-cart-brief text-left">
                            <!-- Cart Products -->
                            <div class="all-cart-product clearfix">
                                <div class="single-cart clearfix">
                                    <div class="cart-image">
                                        <a href="product-details.html"><img src="img/product/cart-1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-info">
                                        <h5><a href="product-details.html">Le Parc Minotti Chair</a></h5>
                                        <p>1 x £9.00</p>
                                        <a href="#" class="cart-delete" title="Remove this item"><i class="pe-7s-trash"></i></a>
                                    </div>
                                </div>
                                <div class="single-cart clearfix">
                                    <div class="cart-image">
                                        <a href="product-details.html"><img src="img/product/cart-2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-info">
                                        <h5><a href="product-details.html">DSR Eiffel chair</a></h5>
                                        <p>1 x £9.00</p>
                                        <a href="#" class="cart-delete" title="Remove this item"><i class="pe-7s-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Cart Total -->
                            <div class="cart-totals">
                                <h5>Total <span>£12.00</span></h5>
                            </div>
                            <!-- Cart Button -->
                            <div class="cart-bottom  clearfix">
                                <a href="checkout.html">Check out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu"></div>
        </div>
    </div>
</header>
<!-- END HEADER SECTION -->