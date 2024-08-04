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
                        <h3>Register</h3>
                        <div class="row">
                            <div class="col-12 mb-20">
                                <label for="username">Name</label>
                                <input name="name" id="name" type="text">
                                @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 mb-20">
                                <label for="">Email <span class="required">*</span></label>
                                <input name="email" id="email" type="email">
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 mb-20">
                                <label for="password">Password <span class="required">*</span></label>
                                <input name="password" id="password" type="password">
                                @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 mb-20">
                                <label for="password"> Comfirm Password <span class="required">*</span></label>
                                <input name="password_comfirm" id="password" type="password">
                                @error('password2')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
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
<!-- PAGE SECTION END -->
@endsection