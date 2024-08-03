@extends('layout.admin')
@section('title')
    Create Product   
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
                        Create Product		
                        </div>
                    </div>
                    <div class="cm-content-body form excerpt">
                        <div class="card-body">
                            <form method="post" action="{{route('product.store')}}" class="row" enctype="multipart/form-data">
                                @csrf
                                <div class="col-xl-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Product Add</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form">
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Name Product</label>
                                                            <input name="ten" type="text" class="form-control" placeholder="Name Product">
                                                            @error('ten')
                                                                <p class="text-danger">{{$message}}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Image</label>
                                                            <input name="anh" type="file" class="form-control" >
                                                            @error('anh')
                                                                <p class="text-danger">{{$message}}</p>
                                                            @enderror
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-3">
                                                            <label class="form-label">Category</label>
                                                            <select name="tl" id="inputState" class="default-select form-control wide">
                                                                <option selected>Choose...</option>
                                                                @foreach ($category as $item1)
                                                                    <option value="{{$item1->id}}">{{$item1->ten_loai}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('tl')
                                                                <p class="text-danger">{{$message}}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3 col-md-3">
                                                            <label class="form-label">Brands</label>
                                                            <select name="th" id="inputState" class="default-select form-control wide">
                                                                <option selected>Choose...</option>
                                                                @foreach ($brand as $item)
                                                                    <option value="{{$item->id}}">{{$item->ten_thuong_hieu}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('th')
                                                                <p class="text-danger">{{$message}}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-md-12">
                                                        <label class="form-label">Describe</label>
                                                        <textarea name="mo_ta" class="form-control" rows="5"></textarea>
                                                        @error('mo_ta')
                                                                <p class="text-danger">{{$message}}</p>
                                                            @enderror
                                                    </div>
                                            </div>
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
@endsection
