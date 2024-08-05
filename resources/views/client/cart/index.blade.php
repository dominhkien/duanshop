@extends('layout.client')
@section('title')
    Cart
@endsection
@section('content')
    <!-- PAGE SECTION START -->
    <div class="page-section section pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="cart-table table-responsive mb-40">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="pro-thumbnail">Image</th>
                                                <th class="pro-title">Product</th>
                                                <th class="pro-price">Price</th>
                                                <th class="pro-size">Size</th>
                                                <th class="pro-quantity">Quantity</th>
                                                <th class="pro-subtotal">Total</th>
                                                <th class="pro-remove">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cartItems as $item)
                                                <tr>
                                                    <td class="pro-thumbnail"><a
                                                            href="{{ route('detail.index', $item->id) }}"><img
                                                                src="{{ asset('storage/' . $item->anh) }}"
                                                                alt="" /></a></td>
                                                    <td class="pro-title"><a href="#">{{ $item->ten }}</a></td>
                                                    <td class="pro-price"><span
                                                            class="amount">{{ number_format($item->gia) }}</span></td>
                                                    <td class="pro-size"><span class="size">{{ $item->kich_co }}</span>
                                                    </td>
                                                    <td class="pro-quantity">
                                                        <div class="product-quantity">
                                                            <input type="text" name="quantities[{{ $item->id_sp_kc }}]"
                                                                value="{{ $item->so_luong }}" min="1" />
                                                        </div>
                                                    </td>
                                                    <td class="pro-subtotal">
                                                        {{ number_format($item->gia * $item->so_luong) }}</td>
                                                    <td class="pro-remove"><a
                                                            onclick="return confirm('Are you sure you want to delete it?')"
                                                            href="{{ route('cart.remove', $item->id_kc) }}">×</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-7 col-12">
                                <div class="cart-buttons mb-30">
                                    <input type="submit" value="Update Cart" />
                                    <a href="{{ route('client.index') }}">Continue Shopping</a>
                                </div>
                                <div class="cart-coupon mb-40">
                                    <h4>Coupon</h4>
                                    <p>Enter your coupon code if you have one.</p>
                                    <input type="text" placeholder="Coupon code" />
                                    <input type="submit" value="Apply Coupon" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-5 col-12">
                                <div class="cart-total mb-40">
                                    <h3>Cart Totals</h3>
                                    <table>
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="amount">{{ number_format($totalAmount) }}</span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <strong><span
                                                            class="amount">{{ number_format($totalAmount) }}</span></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    
                                </div>
                            </div>
                        </div>
                    </form>
                    <form method="post" action="{{ route('payment') }}">
                        @csrf
                        <input type="hidden" value="{{$totalAmount}}" name="total">
                        <div class="proceed-to-checkout section mt-30 d-flex justify-content-end">
                            <button
                                style="background-color: #3f3f3f;
border: medium none;
color: #fff;
display: inline-block;
font-size: 13px;
font-weight: 600;
height: 40px;
line-height: 24px;
padding: 8px 25px;
text-transform: uppercase;"
                                type="submit">Proceed to Checkout</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->
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
