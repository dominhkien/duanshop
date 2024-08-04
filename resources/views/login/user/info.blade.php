@extends('layout.client')
@section('title')
    My Account
@endsection
@section('content')
<!-- PAGE SECTION -->
<div class="page-section section pt-120 pb-90">
    <div class="container">
        
        <div class="row mb-40">
            <!-- Contact Form -->
            
            <div class="contact-form mb-40">
                <h3 class="text-center">Account Information</h3>
                <div class="col-lg-12 col-12 mt-5 mb-5 text-center">
                    <img src="{{ asset('storage/' . $user->anh) }}" style="border-radius: 70%; max-width: 20%;">
                </div>
                <form>
                    <div class="row justify-content-center text-center">
                        <div class="col-12 col-md-4 mb-20 ">
                            <label>My Name</label>
                            <input type="text" name="name" placeholder="Your name" value="{{ $user->ten }}" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 mb-20 ">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Your email" value="{{ $user->email }}" readonly class="form-control">
                        </div>
                        <div class="col-12 col-md-4 mb-20 ">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Your address" value="{{ $user->dia_chi }}" class="form-control">
                        </div>
                    </div>
                </form>
                @if (session('success'))
                    <p class="text-danger text-center">{{session('success')}}</p>
                @endif
            </div>
        </div>
        
    </div>
</div>
<!-- END PAGE SECTION -->
@endsection
