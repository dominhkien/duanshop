@extends('layout.client');
@section('title')
    Register
@endsection
@section('content')
    <!-- PAGE SECTION START -->
<div class="page-section section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10 col-12 mx-auto">
                <div class="login-reg-form">
                    <form action="{{route('post.register')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-20">
                                <label for="username">Name</label>
                                <input name="name" id="name" type="text">
                            </div>
                            <div class="col-12 mb-20">
                                <label for="">Email <span class="required">*</span></label>
                                <input name="email" id="email" type="email">
                                @if (session('message'))
                                    <p class="text-danger">{{session('message')}}</p>
                                @endif
                            </div>
                            <div class="col-12 mb-20">
                                <label for="password">Passwords <span class="required">*</span></label>
                                <input name="password" id="password" type="password">
                            </div>
                            <div class="col-12 mb-20">
                                <input value="Done" name="register" class="inline" type="submit">
                                
                            </div>
                            <div class="col-12 mb-2" >
                                <a  href="{{route('login.index')}}">Login</a>
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