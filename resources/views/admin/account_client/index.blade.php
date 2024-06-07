@extends('layout.admin')
@section('title')
    AccountClient
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
                                        <h4 class="card-title">Account</h4>
                                        <p class="m-0 subtitle">Default datatables. Add <code>datatables</code> class in
                                            root</p>
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
                                                <table id="example" class="display table" style="min-width: 845px">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>

                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
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
                            <div class="card-header flex-wrap d-flex justify-content-between">
                                <div>
                                    <h4 class="card-title">Comment</h4>
                                    <p class="m-0 subtitle">datatables with border. Add class
                                        <code>datatables-bordered</code> with the class <code> datatables</code></p>
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
                                            <table id="example2" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </tfoot>
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
                            <li><a href="#accordion-one" class="scroll ">Account</a></li>
                            <li><a href="#accordion-two" class="scroll ">Comment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection