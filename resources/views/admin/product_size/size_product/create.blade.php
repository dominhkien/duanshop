@extends('layout.admin')
@section('title')
    Create    
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
                        Create 		
                        </div>
                    </div>
                    <div class="cm-content-body form excerpt">
                        <div class="card-body">
                            <form method="post" action="{{route('variant.store')}}" class="row">
                                @csrf
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
                                                <option selected>Choose...</option>
                                                @foreach ($size as $item)
                                                    <option value="{{$item->id}}">{{$item->kich_co}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <label class="form-label">Quatity</label>
                                            <input name="quatity" type="text" class="form-control" style="width: 50%; margin: 0 auto;" >
                                        </div>
                                        <div class="mb-3 text-center">
                                            <label class="form-label">Price</label>
                                            <input name="price" type="text" class="form-control" style="width: 50%; margin: 0 auto;" >
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