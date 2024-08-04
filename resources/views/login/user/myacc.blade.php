@extends('layout.client')
@section('title')
    Update Account
@endsection
@section('content')
<!-- PAGE SECTION -->
<div class="page-section section pt-120 pb-90">
    <div class="container">
        <div class="row mb-40">
            <!-- Contact Form -->
            <div class="contact-form mb-40">

                <h3 class="text-center">Update Account Information</h3>
                <div class="col-lg-12 col-12 mt-5 mb-5 text-center">
                    <img src="{{ asset('storage/' . $user->anh) }}" style="border-radius: 70%; max-width: 20%;">
                </div>
                <form action="{{ route('myaccount.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-center">
                        <div class="col-sm-6 col-xs-12 mb-20">
                            <label>My Name</label>
                            <input type="text" name="name" placeholder="Your name" value="{{ $user->ten }}">
                            @error('ten')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-sm-6 col-xs-12 mb-20">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Your email" value="{{ $user->email }}" readonly>
                        </div>
                        <div class="col-sm-6 col-xs-12 mb-20">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Your address" value="{{ $user->dia_chi }}">
                            @error('address')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-sm-6 col-xs-12 mb-20 position-relative">
                            <label>Old Password</label>
                            <div class="password-wrapper">
                                <input type="password" id="old_password" name="old_password" placeholder="Old Password" class="form-control">
                                <span style="cursor: pointer;" class="toggle-password" onclick="togglePassword('old_password')">👁️</span>
                            </div>
                            @error('old_password')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-sm-6 col-xs-12 mb-20 position-relative">
                            <label>New Password</label>
                            <div class="password-wrapper">
                                <input type="password" id="new_password" name="new_password" placeholder="New Password" class="form-control">
                                <span style="cursor: pointer;" class="toggle-password" onclick="togglePassword('new_password')">👁️</span>
                            </div>
                            @error('new_password')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-sm-6 col-xs-12 mb-20 position-relative">
                            <label>Comfirm New Password</label>
                            <div class="password-wrapper">
                                <input type="password" id="new_password_confirmation" name="new_password_confirmation" placeholder="Confirm New Password" class="form-control">
                                <span style="cursor: pointer;" class="toggle-password" onclick="togglePassword('new_password_confirmation')">👁️</span>
                            </div>
                            @error('new_password_confirmation')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-xs-12 mb-20 text-center">
                            <input type="file" name="image">
                        </div>
                        @error('image')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                        <div class="col-xs-12 text-center">
                            <input type="submit" value="SUBMIT">
                        </div>
                    </div>
                </form>

                <!-- Display validation errors if there are any -->
                

            </div>
        </div>
        <!-- Contact Info -->
    </div>
</div>
<!-- END PAGE SECTION -->
@endsection


