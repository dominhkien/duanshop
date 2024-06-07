@extends('layout.admin')
@section('title')
    Edit Genre    
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
                        Edit Category		
                        </div>
                    </div>
                    <div class="cm-content-body form excerpt">
                        <div class="card-body">
                            <form method="post" action="{{route('genre.update',$category->id)}}" class="row">
                                @csrf
                                @method('PUT')
                                <div class="col-xl-12 text-center">
                                    <div >
                                        <div class="mb-3 text-center">
                                            <label class="form-label">Edit Category</label>
                                            <input name="ten_loai" type="text" class="form-control" value="{{$category->ten_loai}}" style="width: 50%; margin: 0 auto;" placeholder="Name Category">
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