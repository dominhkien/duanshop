@extends('layout.client')
@section('title')
    Home
@endsection
@section('content')
    <!-- PRODUCT SECTION START -->
<div class="product-section section pt-120 pb-120">
    <div class="container">
       
        <div class="row justify-content-between">
            <!-- Isotop Product Filter -->
            <div class="isotope-product-filter col-auto">
                <button class="active" data-filter="*">all</button>
                <button data-filter=".chair">chair</button>
                <button data-filter=".ptable">table</button>
                <button data-filter=".home-decor">home decor</button>
                <button data-filter=".lighting">lighting</button>
            </div>
            <!-- Product Filter Toggle -->
            <div class="col-auto">
                <button class="product-filter-toggle">filter</button>
            </div>
        </div>
        
        <!-- Product Filter Wrapper -->
        <div class="row">
            <div class="col-12">
                <div class="product-filter-wrapper">
                    <div class="row">
                        <!-- Product Filter -->
                        <div class="product-filter col-lg-3 col-md-6 col-12 mb-30">
                            <h5>Sort by</h5>
                            <ul class="sort-by">
                                <li><a href="#">Price: Low to High</a></li>
                                <li><a href="#">Price: High to Low</a></li>
                            </ul>
                        </div>
                        <!-- Product Filter -->
                        
                        <!-- Product Filter -->
                        
                        <!-- Product Filter -->
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="isotope-grid row">
            <!-- Product Item Start -->
            @foreach ($product as $item)
            <div class="isotope-item chair home-decor col-xl-3 col-lg-4 col-md-6 col-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="{{route('detail.index',$item->id)}}"><img src="{{asset('storage/'. $item->anh)}}" alt=""/></a>
                        <!-- Wishlist Button -->
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-bs-toggle="modal"  data-bs-target="#quickViewModal" title="Quick View"><i class="pe-7s-look"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="pe-7s-cart"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="{{route('detail.index',$item->id)}}">{{$item->ten}}</a></h5>
                        <!-- Price Ratting -->
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Product Item End -->
            
        </div>
         
        <div class="row">
            <div class="text-center col-xs-12 mt-30">
                <a href="#" class="btn load-more-product">load more</a>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT SECTION END -->
@endsection