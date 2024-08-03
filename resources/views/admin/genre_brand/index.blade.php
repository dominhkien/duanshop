@extends('layout.admin')
@section('title')
    Management
@endsection
@section('content')
    <div class="content-body">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
            </ol>
        </div>
        <!-- container starts -->
        <div class="container-fluid">

            <!-- row -->
            <div class="element-area">
                <div class="demo-view">
                    <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                        <div class="row">
                            <!-- Column starts -->
                            <div class="col-xl-12">
                                <div class="card dz-card" id="accordion-one">
                                    <div class="col-xl-12" style="margin-left: 15px; margin-top:15px">
                                        <a href="{{ route('genre.create') }}" class="btn btn-primary mb-3">Create Category</a>
                                    </div>
                                    <div class="card-header flex-wrap">
                                        <div>
                                            <h4 class="card-title">Categories</h4>
                                        </div>
                                        <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#Preview" type="button" role="tab"
                                                    aria-selected="true">Preview</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
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
                                                    <table id="example" class="display table" style="min-width: 845px">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Name Category</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($categories as $item)
                                                                <tr>
                                                                    <td>{{ $item->id }}</td>
                                                                    <td>{{ $item->ten_loai }}</td>
                                                                    <td>
                                                                        @if ($item->trang_thai == 1)
                                                                            Đang hoạt động
                                                                        @else
                                                                            Không hoạt động
                                                                        @endif
                                                                    </td>
                                                                    <td class="text-start">
                                                                        <a href="{{ route('genre.edit', $item->id) }}"
                                                                            class="btn btn-warning btn-sm content-icon">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <form action="{{ route('genre.delete', $item->id) }}" method="post" style="display:inline-block">
                                                                            @csrf
                                                                            @method("DELETE")
                                                                            <button onclick="return confirm('Are you sure you want to delete it?')" 
                                                                            class=" btn btn-danger btn-sm content-icon">
                                                                            <i class="fa fa-times"></i>
                                                                            </button >
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Name Category</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- /Default accordion -->
                                        </div>
                                        <div class="tab-pane fade" id="html" role="tabpanel"
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
                        <div class="col-xl-12">
                            <div class="card dz-card" id="accordion-two">
                                <div class="col-xl-12" style="margin-left: 15px; margin-top:15px">
                                    <a href="{{ route('brand.create') }}" class="btn btn-primary mb-3">Create Brand</a>
                                </div>
                                <div class="card-header flex-wrap d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title">Brands</h4>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab-1" data-bs-toggle="tab"
                                                data-bs-target="#bordered" type="button" role="tab"
                                                aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab-1" data-bs-toggle="tab"
                                                data-bs-target="#bordered-html" type="button" role="tab"
                                                aria-selected="false">HTML</button>
                                        </li>
                                    </ul>
                                </div>

                                <!-- tab-content -->
                                <div class="tab-content" id="myTabContent-1">
                                    <div class="tab-pane fade show active" id="bordered" role="tabpanel"
                                        aria-labelledby="home-tab-1">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example2" class="display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name Brand</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($brands as $item)
                                                            <tr>
                                                                <td>{{ $item->id }}</td>
                                                                <td>{{ $item->ten_thuong_hieu }}</td>
                                                                <td>
                                                                    @if ($item->trang_thai == 1)
                                                                        Đang hoạt động
                                                                    @else
                                                                        Không hoạt động
                                                                    @endif
                                                                </td>
                                                                <td class="text-start">
                                                                    <a href="{{ route('brand.edit', $item->id) }}"
                                                                        class="btn btn-warning btn-sm content-icon">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                    <form action="{{ route('brand.delete', $item->id) }}" method="post" style="display:inline-block">
                                                                        @csrf
                                                                        @method("DELETE")
                                                                        <button onclick="return confirm('Are you sure you want to delete it?')" 
                                                                        class=" btn btn-danger btn-sm content-icon">
                                                                        <i class="fa fa-times"></i>
                                                                        </button >
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name Brand</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="bordered-html" role="tabpanel"
                                        aria-labelledby="home-tab-1">
                                        <div class="card-body pt-0 p-0 code-area">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-right">
                    <div class="demo-right-inner" id="right-sidebar">
                        <h4 class="title">Datatables</h4>
                        <div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
                            <ul class="navbar-nav nav" id="menu-bar">
                                <li><a href="#accordion-one" class="scroll">Categories</a></li>
                                <li><a href="#accordion-two" class="scroll">Brands</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
    <div class="center-screen">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{session('success')}}</h4>
                <div class="card-content">
                    <div class="sweetalert">
                        <button class="ms-3 btn btn-success btn sweet-success">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    
@endsection
