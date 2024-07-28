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
                    <form action="{{route('post.forgot')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-20">
                                <label for="email">Email <span class="required">*</span></label>
                                <input name="email" id="email" type="email">
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
<!-- PAGE SECTION END -->
@endsection