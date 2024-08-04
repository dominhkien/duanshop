@extends('layout.client');
@section('title')
    Forgot Password
@endsection
@section('content')
    <!-- PAGE SECTION START -->
<div class="page-section section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10 col-12 mx-auto">
                <div class="login-reg-form">
                    <form action="{{route('forgot.post')}}" method="post">
                        @csrf
                        <h3>Forgot Password</h3>
                        <div class="row">
                            <div class="col-12 mb-20">
                                <label for="email">Email <span class="required">*</span></label>
                                <input name="email" id="email" type="email">
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-12 mb-20">
                                <input value="Done" name="done" class="inline" type="submit">
                                
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
<!-- PAGE SECTION END -->
@endsection