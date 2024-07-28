
@extends('layout.admin')
@section('title')
    Product
@endsection
@section('content')
    <div class="content-body">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="javascript:void(0)">Bootstrap</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
            </ol>
        </div>
        <!-- container starts -->
        <div class="container-fluid">

            <!-- row -->
            <div >
                <div class="demo-view">
                    <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                        <div class="row">
                            <!-- Column starts -->
                            <div class="col-xl-12">
                                <div class="card dz-card" id="accordion-one">
                                    <div class="card-header flex-wrap">
                                        <div>
                                            <h4 class="card-title">Product</h4>
                                        </div>
                                        <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active " id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#Preview" type="button" role="tab"
                                                    aria-selected="true">Preview</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link " id="profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#html" type="button" role="tab"
                                                    aria-controls="html" aria-selected="false">HTML</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--tab-content-->
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="Preview" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="card-body pt-0">
                                                <div class="table-responsive">
                                                    <table id="example" class="display table" style="width: 100%">
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
                                                                            src="{{ asset('storage/' . $item->anh) }}"
                                                                            alt=""></td>
                                                                    <td>{{ $item->ten }}</td>
                                                                    <td title="{{ $item->mo_ta }}">
                                                                        {{ \Illuminate\Support\Str::limit($item->mo_ta, 30) }}
                                                                    </td>
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
                                                                        <a href="{{ route('variant.create', $item->id) }}"
                                                                            class="btn btn-success btn-sm content-icon">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <form
                                                                            action="{{ route('product.delete', $item->id) }}"
                                                                            method="post" style="display:inline-block">
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
                                                        <tfoot>
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
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- /Default accordion -->
                                        </div>
                                        <div class="tab-pane fade " id="html" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="card-body pt-0 p-0 code-area">
                                                <!-- Default accordion -->

                                            </div>
                                            <!-- /Default accordion -->
                                        </div>
                                    </div>
                                    <!--/tab-content-->
                                </div>
                            </div>
                        </div>
                        <!-- Column ends -->
                        <!-- Column starts -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
