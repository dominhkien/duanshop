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
            <div class="contact-form  mb-40">

                <h3 class="text-center">Account Information</h3>
                <div class="col-lg-12 col-12 mt-5 mb-5 text-center">
                    <img src="{{asset('storage/'.$user->anh)}}" style="border-radius: 70%; max-width: 20%;">
                </div>
                <form action="{{route('myaccount.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 col-xs-12 mb-20">
                            <input type="text" name="name" placeholder="Your name" value="{{$user->ten}}">
                        </div>
                        <div class="col-sm-6 col-xs-12 mb-20">
                            <input type="text" name="email" placeholder="Your email" value="{{$user->email}}" readonly>
                        </div>
                        <div class="col-sm-6 col-xs-12 mb-20">
                            <input type="text" name="address" placeholder="Your address" value="{{$user->dia_chi}}">
                        </div>
                        <div class="col-sm-6 col-xs-12 mb-20">
                            <input type="text" name="password" placeholder="New Password">
                        </div>
                        <div class="col-xs-12 mb-20 text-center">
                            <input type="file" name="image">
                        </div>
                        <div class="col-xs-12 text-center" >
                            <input type="submit" value="SUBMIT">
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
        <!-- Contact Info -->
    </div>
</div>
<!-- END PAGE SECTION -->
@endsection
