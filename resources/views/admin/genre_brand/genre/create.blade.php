@extends('layout.admin')
@section('title')
    Create Genre    
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <a href="{{route('dashboard.index')}}" class="btn btn-primary mb-3">Back List</a>
            </div>
            <div class="col-xl-12">
                <div class="filter cm-content-box box-primary">
                    <div class="content-title">
                        <div class="cpa">
                        Create Category		
                        </div>
                    </div>
                    <div class="cm-content-body form excerpt">
                        <div class="card-body">
                            <form method="post" action="{{route('genre.store')}}" class="row">
                                @csrf
                                <div class="col-xl-12 text-center">
                                    <div >
                                        
                                        <div class="mb-3 text-center">
                                            <label class="form-label">Category</label>
                                            <input name="ten_loai" type="text" class="form-control" style="width: 50%; margin: 0 auto;" placeholder="Name Category">
                                            @error('ten_loai')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
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
@endsection