@extends('layout.admin')
@section('title')
    Edit   
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <a href="{{route('dashboardsize.index')}}" class="btn btn-primary mb-3">Back List</a>
            </div>
            <div class="col-xl-12">
                <div class="filter cm-content-box box-primary">
                    <div class="content-title">
                        <div class="cpa">
                        Edit 		
                        </div>
                    </div>
                    <div class="cm-content-body form excerpt">
                        <div class="card-body">
                            <form method="post" action="{{route('variant.update',$variant->id)}}" class="row">
                                @csrf
                                @method('PUT');
                                <input type="hidden" name="id_sp" value="{{$product->id}}">
                                <div class="col-xl-12 text-center">
                                    <div >
                                        <div class="mb-3 text-center">
                                            <label class="form-label">Name Product</label>
                                            <input readonly  type="text" class="form-control" value="{{$product->ten}}" style="width: 50%; margin: 0 auto;" >
                                        </div>
                                        <div style="width: 50%; margin: 0 auto;" class="mb-3 text-center">
                                            <label class="form-label">Size</label>
                                            <select name="size" id="inputState"  class="default-select form-control wide">
                                                @foreach ($size as $item)
                                                    <option value="{{$item->id}}" {{$item->id == $variant->id_kc ? 'selected' : '' }}>{{$item->kich_co}}</option>
                                                @endforeach
                                            </select>
                                            @error('size')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 text-center">
                                            <label class="form-label">Quatity</label>
                                            <input name="quatity" type="text" class="form-control" style="width: 50%; margin: 0 auto;" value="{{$variant->so_luong}}" >
                                            @error('quatity')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 text-center">
                                            <label class="form-label">Price</label>
                                            <input name="price" type="text" class="form-control" style="width: 50%; margin: 0 auto;" value="{{$variant->gia}}">
                                            @error('price')
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
@endsection