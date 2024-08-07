@extends('layout.admin')
@section('title')
    Edit Product   
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <a href="{{route('product.index')}}" class="btn btn-primary mb-3">Back List</a>
            </div>
            <div class="col-xl-12">
                <div class="filter cm-content-box box-primary">
                    <div class="content-title">
                        <div class="cpa">
                        Edit Product        
                        </div>
                    </div>
                    <div class="cm-content-body form excerpt">
                        <div class="card-body">
                            <form method="post" action="{{route('product.update',$product->id)}}" class="row" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-xl-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Product Edit</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form">
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Name Product</label>
                                                        <input name="ten" type="text" class="form-control" placeholder="Name Product" value="{{$product->ten}}">
                                                        @error('ten')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Image</label>
                                                        <input name="anh" type="file" class="form-control">
                                                        @error('anh')
                                                                <p class="text-danger">{{$message}}</p>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-3">
                                                        <label class="form-label">Category</label>
                                                        <select name="tl" id="inputState" class="default-select form-control wide">
                                                            
                                                            @foreach ($category as $item1)
                                                                <option value="{{$item1->id}}" {{$item1->id == $product->id_tl ? 'selected' : ''}}>{{$item1->ten_loai}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('tl')
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                    <div class="mb-3 col-md-3">
                                                        <label class="form-label">Brands</label>
                                                        <select name="th" id="inputState" class="default-select form-control wide">
                                                            
                                                            @foreach ($brand as $item)
                                                                <option value="{{$item->id}}" {{$item->id == $product->id_th ? 'selected' : ''}}>{{$item->ten_thuong_hieu}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('th')
                                                                <p class="text-danger">{{$message}}</p>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Describe</label>
                                                        <textarea name="mo_ta" id="" cols="80" rows="5" class="form-control">{{$product->mo_ta}}</textarea>
                                                        @error('mo_ta')
                                                                <p class="text-danger">{{$message}}</p>
                                                            @enderror
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <img style="max-width:200px; height:auto; margin-top:-55px;" src="{{asset('storage/'.$product->anh)}}" alt="">
                                                    </div>
                                                </div>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
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
