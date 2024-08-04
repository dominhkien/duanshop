@extends('layout.client');
@section('title')
    Update Password
@endsection
@section('content')
    <!-- PAGE SECTION START -->
    <div class="page-section section pt-120 pb-120">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-10 col-12 mx-auto">
                    <div class="login-reg-form">
                        <form action="{{ route('reset.password.post') }}" method="post">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="hidden" name="email" value="{{ $email }}">
                            <h3>Update Password</h3>
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <label for="password">Passwords <span class="required">*</span></label>
                                    <input name="password" id="password" type="password">
                                    @error('password')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="password">Confirm Passwords <span class="required">*</span></label>
                                    <input name="confirm_password" id="password" type="password">
                                    @error('confirm_password')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>
                                <div class="col-12 mb-20">

                                    <input value="Done" name="login" class="inline" type="submit">

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->
@endsection
