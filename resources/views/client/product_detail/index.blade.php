@extends('layout.client')

@section('title')
    Product Detail
@endsection
@section('content')
    <!-- PAGE SECTION START -->
    <div class="page-section section pt-120 pb-120">
        <div class="container">
            <div class="row mb-40">
                <!-- Single Product Images -->
                <div class="col-md-5 col-sm-6 col-xs-12 mb-40">
                    <!-- Tab panes -->
                    <div class="tab-content mb-10">
                        <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                            <img src="{{ asset('storage/'.$product->anh) }}" alt="Ảnh sản phẩm" />
                        </div>
                    </div>
                    
                    <!-- Single Product Thumbnail Slider -->
                </div>
                <!-- Single Product Details -->

                <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                    <div class="product-details section">
                        <!-- Title -->
                        <h1 class="title">{{ $product->ten }}</h1>
                        <!-- Price Ratting -->
                        <div class="price-ratting section">
                            <!-- Price -->
                            <span class="price float-start"><span class="new">$ {{ $product->gia }}</span></span>
                            <!-- Ratting -->
                        </div>
                        <!-- Short Description -->
                        <div class="short-desc section">
                            <h5 class="pd-sub-title">Quick Overview</h5>
                            <p>{{ $product->mo_ta }}</p>
                        </div>
                        <!-- Product Size -->

                        <div class="product-size section">

                            <h5 class="pd-sub-title">Select Size</h5>
                            @foreach ($variant_product as $item)
                                <button class="btn-size" data-size="{{ $item->id_kc }}">{{ $item->kich_co }}</button>
                            @endforeach
                        </div>
                        <div class="quantity section ">
                            <h5 class="pd-sub-title">Quantity</h5>
                            @foreach ($variant_product as $key => $item)
                                <div style="display: none; margin-bottom: 15px; " class=" quantity-size" data-quantity="{{ $item->id_kc }}" >
                                    <input disabled type="text" value="{{ $item->so_luong }}">
                                </div>
                            @endforeach

                        </div>

                        <!-- Product Color -->
                        <!-- Quantity Cart -->
                        <div class="quantity-cart section mt-3">
                            <div class="product-quantity">
                                <input type="text" value="0">
                            </div>
                            <button class="add-to-cart">add to cart</button>
                        </div>
                        <!-- Usefull Link -->
                        
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- Nav tabs -->
                <div class="col-xs-12">
                    <ul class="pro-info-tab-list section nav">
                        
                        <li><a href="#reviews" data-bs-toggle="tab">Reviews</a></li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content col-xs-12">
                   
                    
                    <div class="pro-info-tab tab-pane" id="reviews">
                        <a href="#">Be the first to write your review!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->

    <!-- PRODUCT SECTION START -->
    <div class="product-section section pb-120">
        <div class="container">
            <div class="row">
                <div class="section-title text-center col-xs-12 mb-60">
                    <h2>related products</h2>
                </div>
            </div>
            <div class="row">
                <div class="product-slider product-slider-4">
                    <!-- Product Item Start -->
                    @foreach ($variant_img as $item)
                    <div class="col-xs-12">
                        <div class="product-item text-center">
                            <div class="product-img">
                                <a class="image" href="product-details.html"><img src="{{ asset('storage/'.$item->anh) }}"
                                        alt="" /></a>
                                <div class="action-btn fix">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        title="Quick View"><i class="pe-7s-look"></i>Quick view</a>
                                    <a href="#" title="Add to Cart"><i class="pe-7s-cart"></i>add to cart</a>
                                </div>
                            </div>
                            <div class="product-info text-left">
                                <h5 class="title"><a href="product-details.html">{{$item->ten}}</a></h5>
                                <div class="price-ratting fix">
                                    {{-- <span class="price float-start"><span class="new">{{$item->gia}}</span></span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <!-- Product Item End -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT SECTION END -->
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const listButton = document.querySelectorAll('.btn-size');
            const listQuantity = document.querySelectorAll('.quantity-size');

            listButton.forEach(item => {
                const id = item.dataset.size;

                item.addEventListener('click', () => {
                    // Đặt lại màu của tất cả các nút về màu ban đầu
                    listButton.forEach(btn => btn.style.backgroundColor = '');

                    // Thay đổi màu của nút được nhấp thành màu đen
                    item.style.backgroundColor = 'black';

                    listQuantity.forEach(qty => {
                        const idQuantity = qty.dataset.quantity;

                        if (idQuantity != id) {
                            qty.style.display = 'none';
                        } else {
                            qty.style.display = 'block';
                        }
                    });
                });
            });
        });
    </script>
@endpush
<style>
    .btn-size {
        /* Thêm các kiểu cho nút ở đây nếu cần */
        transition: background-color 0.3s;
    }
</style>
