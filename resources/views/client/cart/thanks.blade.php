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
            
            <h1 class="text-success text-center">Thanks</h1>
        </div>
        
    </div>
</div>
<!-- END PAGE SECTION -->
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
@endsection

