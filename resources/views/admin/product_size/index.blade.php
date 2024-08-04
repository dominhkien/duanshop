@extends('layout.admin')
@section('title')
    Product & Size
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
            <div class="element-area">
                <div class="demo-view">
                    <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                        <div class="row">
                            <!-- Column starts -->
                            <div class="col-xl-12">
                                <div class="card dz-card" id="accordion-one">
                                    <div class="card-header flex-wrap">
                                        <div>
                                            <h4 class="card-title">Product-Sizes</h4>
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
                                                                <th>ID</th>
                                                                <th>Name Product</th>
                                                                <th>Sizes</th>
                                                                <th>Quatity</th>
                                                                <th>Price</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($sizeProduct as $item)
                                                                <tr>
                                                                    <td>{{ $item->id }}</td>
                                                                    <td title="{{ $item->ten_sp }}">{{ $item->ten_sp }}</td>
                                                                    <td>{{ $item->kc }}</td>
                                                                    <td>{{ $item->so_luong }}</td>
                                                                    <td>{{ $item->gia }}</td>
                                                                    <td>
                                                                        @if ($item->trang_thai == 1)
                                                                            Đang hoạt động
                                                                        @else
                                                                            Không hoạt động
                                                                        @endif
                                                                    </td>

                                                                    <td class="text-start">
                                                                        <a href="{{ route('variant.edit', ['id' => $item->id, 'id_sp' => $item->id_sp]) }}"
                                                                            class="btn btn-warning btn-sm content-icon">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>

                                                                        <form
                                                                            action="{{ route('variant.delete', $item->id) }}"
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
                                                                <th>ID</th>
                                                                <th>Name Product</th>
                                                                <th>Sizes</th>
                                                                <th>Quatity</th>
                                                                <th>Price</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
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
                        <div class="col-xl-12">
                            <div class="card dz-card" id="accordion-two">
                                <div class="col-xl-12" style="margin-left: 15px; margin-top:15px">
                                    <a href="{{ route('size.create') }}" class="btn btn-primary mb-3">Create Size</a>
                                </div>
                                <div class="card-header flex-wrap d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title">Sizes</h4>
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active " id="home-tab-1" data-bs-toggle="tab"
                                                data-bs-target="#bordered" type="button" role="tab"
                                                aria-selected="true">Preview</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="profile-tab-1" data-bs-toggle="tab"
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
                                                <table id="example2" class="display" style="min-width=845px">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Sizes</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($size as $item)
                                                            <tr>
                                                                <td>{{ $item->id }}</td>
                                                                <td>{{ $item->kich_co }}</td>
                                                                <td>
                                                                    @if ($item->trang_thai == 1)
                                                                        Đang hoạt động
                                                                    @else
                                                                        Không hoạt động
                                                                    @endif
                                                                </td>
                                                                <td class="text-start">
                                                                    <a href="{{ route('size.edit', $item->id) }}"
                                                                        class="btn btn-warning btn-sm content-icon">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                    <form action="{{ route('size.delete', $item->id) }}"
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
                                                    <tfoot>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Sizes</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="bordered-html" role="tabpanel"
                                        aria-labelledby="home-tab-1">
                                        <div class="card-body pt-0 p-0 code-area">

                                        </div>
                                    </div>
                                </div>
                                <!-- /tab-content -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-right ">
                    <div class="demo-right-inner" id="right-sidebar">
                        <h4 class="title">List</h4>
                        <div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
                            <ul class="navbar-nav nav" id="menu-bar">
                                <li><a href="#accordion-one" class="scroll ">Product Sizes</a></li>
                                <li><a href="#accordion-two" class="scroll ">Sizes</a></li>
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
