@extends('layout.client');
@section('title')
    Login
@endsection
@section('content')
    <!-- PAGE SECTION START -->
    <div class="page-section section pt-120 pb-120">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-10 col-12 mx-auto">
                    <div class="login-reg-form">
                        @if (session('message'))
                            <p class="text-danger">{{ session('message') }}</p>
                        @endif
                        <form action="{{ route('post.login') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-12 mb-20">
                                    <label for="username">Email <span class="required">*</span></label>
                                    <input name="email" id="email" type="email">
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="password">Passwords <span class="required">*</span></label>
                                    <input name="password" id="password" type="password">
                                </div>
                                <div class="col-12 mb-20">
                                    <label class="inline mb-4" for="rememberme">
                                        <input value="forever" id="rememberme" name="rememberme" type="checkbox"> Remember
                                        me
                                    </label>
                                    <input value="Login" name="login" class="inline" type="submit">

                                </div>
                                <div class="col-12 mb-2">
                                    <a href="{{ route('forgot.index') }}">Lost your password?</a>
                                </div>
                                <div class="col-12 mt-2">
                                    <a href="{{ route('register.index') }}">You don't have an account?</a>
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
