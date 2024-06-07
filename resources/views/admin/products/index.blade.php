@extends('layout.admin')
@section('title')
    Products
@endsection
@section('content')
    <div class="content-body">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Content</a></li>
            </ol>
        </div>
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="mb-3">
                        <a href="{{ route('product.create') }}" class="btn btn-primary">Add Products</a>
                    </div>
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title">
                            <div class="cpa">
                                <i class="fa-solid fa-file-lines me-1"></i>List Products
                            </div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand SlideToolHeader"><i
                                        class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body form excerpt">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead>
                                            <tr>
                                                <th class="text-black">ID</th>
                                                <th class="text-black">Image</th>
                                                <th class="text-black">Name Product</th>
                                                <th class="text-black">Describe</th>
                                                <th class="text-black">Category</th>
                                                <th class="text-black black">Brand</th>
                                                <th class="text-black black">Status</th>
                                                <th class="text-black text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td><img style="max-width: 100px; height: auto"
                                                            src="{{ asset('storage/' . $item->anh) }}" alt=""></td>
                                                    <td>{{ $item->ten }}</td>
                                                    <td title="{{ $item->mo_ta }}">
                                                        {{ \Illuminate\Support\Str::limit($item->mo_ta, 30) }}</td>
                                                    <td>{{ $item->ten_tl }}</td>
                                                    <td>{{ $item->ten_th }}</td>
                                                    <td>
                                                        @if ($item->trang_thai == 1)
                                                            Đang hoạt động
                                                        @else
                                                            Không hoạt động
                                                        @endif
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="{{ route('product.edit', $item->id) }}"
                                                            class="btn btn-warning btn-sm content-icon">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <form action="{{route('product.delete',$item->id)}}" method="post" style="display:inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                onclick="return confirm('Are you sure you want to delete it?')"
                                                                class=" btn btn-danger btn-sm content-icon">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div
                                        class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center">
                                        <span>Page 1 of 5, showing 2 records out of 8 total, starting on record 1, ending on
                                            2</span>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination mb-2 mb-sm-0">
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i
                                                            class="fa-solid fa-angle-left"></i></a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a>
                                                </li>
                                                <li class="page-item"><a class="page-link " href="javascript:void(0);"><i
                                                            class="fa-solid fa-angle-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
