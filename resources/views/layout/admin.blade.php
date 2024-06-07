<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from w3crm.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 14:11:34 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>@yield('title')</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('admin/images/favicon.png')}}">
	
	<link href="{{asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/vendor/swiper/css/swiper-bundle.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="{{asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/vendor/jvmap/jquery-jvectormap.css')}}" rel="stylesheet">
	<link href="../../cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
	
	<!-- tagify-css -->
	<link href="{{asset('admin/vendor/tagify/dist/tagify.css')}}" rel="stylesheet">
	
	<!-- Style css -->
   <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
	
</head>
<body>
    @include('admin.header')
	@include('admin.left')
    @yield('content')

    @include('admin.footer')
    <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('admin/vendor/apexchart/apexchart.js')}}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{asset('admin/js/dashboard/dashboard-1.js')}}"></script>
	<script src="{{asset('admin/vendor/draggable/draggable.js')}}"></script>
	
	
	<!-- tagify -->
	<script src="{{asset('admin/vendor/tagify/dist/tagify.js')}}"></script>
	 
	<script src="{{asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/js/jszip.min.js')}}"></script>
	<script src="{{asset('admin/js/plugins-init/datatables.init.js')}}"></script>
   
	<!-- Apex Chart -->
	
	<script src="{{asset('admin/vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
	<script src="{{asset('admin/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
	

	<!-- Vectormap -->
    <script src="{{asset('admin/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jqvmap/js/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('admin/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
     <script src="{{asset('admin/js/custom.js')}}"></script>
	<script src="{{asset('admin/js/deznav-init.js')}}"></script>
	<script src="{{asset('admin/js/demo.js')}}"></script>
    <script src="{{asset('admin/js/styleSwitcher.js')}}"></script>
	
	
	
</body>

<!-- Mirrored from w3crm.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 14:12:59 GMT -->
</html>