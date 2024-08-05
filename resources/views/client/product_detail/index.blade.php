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
                            <img src="{{ asset('storage/' . $product->anh) }}" alt="Ảnh sản phẩm" />
                        </div>
                    </div>
                </div>
                <!-- Single Product Details -->
                <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                    <div class="product-details section">
                        <!-- Title -->
                        <h1 class="title">{{ $product->ten }}</h1>
                        <!-- Price Rating -->
                        <div class="price-ratting section">
                            <!-- Price -->
                            <span class="price float-start"><span class="new">{{ number_format($product->gia) }}
                                    VND</span></span>
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
                        <!-- Quantity -->
                        <div class="quantity section">
                            <h5 class="pd-sub-title">Quantity</h5>
                            @foreach ($variant_product as $item)
                                <div class="quantity-size" data-quantity="{{ $item->id_kc }}"
                                    style="display: none; margin-bottom: 15px;">
                                    <input type="text" value="{{ $item->so_luong }}" disabled>
                                </div>
                            @endforeach
                        </div>
                        <div class="quantity-cart section mt-3">
                            <div>
                                <button class="decrease-quantity">-</button>
                                <input type="text" id="quantity-input" value="0">
                                <button class="increase-quantity">+</button>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reviews Tab -->
            <div class="row">
                <div class="col-xs-12">
                    <ul class="pro-info-tab-list section nav">
                        <li><a href="#reviews" data-bs-toggle="tab">Reviews</a></li>
                    </ul>
                </div>
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
                    <h2>Related Products</h2>
                </div>
            </div>
            <div class="row">
                <div class="product-slider product-slider-4">
                    <!-- Product Item Start -->
                    @foreach ($variant_img as $item)
                        <div class="col-xs-12">
                            <div class="product-item text-center">
                                <div class="product-img">
                                    <a class="image" href="{{ route('detail.index', $item->id) }}"><img
                                            src="{{ asset('storage/' . $item->anh) }}" alt="" /></a>
                                    <div class="action-btn fix">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            title="Quick View"><i class="pe-7s-look"></i>Quick View</a>
                                        <a href="#" title="Add to Cart"><i class="pe-7s-cart"></i>Add to Cart</a>
                                    </div>
                                </div>
                                <div class="product-info text-left">
                                    <h5 class="title"><a
                                            href="{{ route('detail.index', $item->id) }}">{{ $item->ten }}</a></h5>
                                    <div class="price-ratting fix">
                                        <span class="price float-center"><span
                                                class="new">{{ number_format($item->gia) }} VND</span></span>
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
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Error!',
                    text: '{{ session('error') }}',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif
@endsection
<style>
    .btn-size.active {
        background-color: #007bff; /* Change to desired color */
        color: white;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let selectedSize = null;
        const quantityInput = document.getElementById('quantity-input');
        const quantitySections = document.querySelectorAll('.quantity-size');
        const sizeButtons = document.querySelectorAll('.btn-size');

        sizeButtons.forEach(button => {
            button.addEventListener('click', function () {
                sizeButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                selectedSize = this.getAttribute('data-size');
                console.log('Selected size:', selectedSize);
                quantitySections.forEach(section => {
                    if (section.getAttribute('data-quantity') === selectedSize) {
                        section.style.display = 'block';
                        quantityInput.value = 1;
                        console.log('Showing quantity for size:', selectedSize);
                    } else {
                        section.style.display = 'none';
                        console.log('Hiding quantity for size:', section.getAttribute('data-quantity'));
                    }
                });
            });
        });

        document.querySelector('.increase-quantity').addEventListener('click', function () {
            if (selectedSize) {
                const quantity = parseInt(quantityInput.value);
                const availableQuantity = document.querySelector(`.quantity-size[data-quantity="${selectedSize}"] input`).value;
                if (quantity < availableQuantity) {
                    quantityInput.value = quantity + 1;
                }
            }
        });

        document.querySelector('.decrease-quantity').addEventListener('click', function () {
            if (selectedSize) {
                const quantity = parseInt(quantityInput.value);
                if (quantity > 1) {
                    quantityInput.value = quantity - 1;
                }
            }
        });

        document.querySelector('.add-to-cart').addEventListener('click', function () {
            if (selectedSize) {
                const quantity = parseInt(quantityInput.value);
                fetch('{{ route("cart.add") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        product_id: {{ $product->id }},
                        size_id: selectedSize,
                        quantity: quantity
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Product added to cart successfully',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please select a size',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please select a size',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
</script>

