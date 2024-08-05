<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/outside/outside/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 01:00:22 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('client/img/favicon.ico') }}">

    <!-- All CSS Files -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}">
    <!-- Icon Font -->
    <link rel="stylesheet" href="{{ asset('client/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/pe-icon-7-stroke.css') }}">
    <!-- Plugins css file -->
    <link rel="stylesheet" href="{{ asset('client/css/plugins.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('client/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('client/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .password-wrapper {
    position: relative;
    display: inline-block; /* Đảm bảo wrapper chỉ chiếm không gian cần thiết */
    width: 100%; /* Điều chỉnh kích thước theo nhu cầu */
}

.password-wrapper .form-control {
    width: 100%;
    padding-right: 40px; /* Cung cấp không gian cho biểu tượng mắt */
}

.toggle-password {
    position: absolute;
    right: 10px; /* Khoảng cách từ bên phải */
    top: 50%;
    transform: translateY(-50%); /* Căn giữa theo chiều dọc */
    cursor: pointer; /* Con trỏ chuột dạng bàn tay */
    font-size: 18px; /* Điều chỉnh kích thước nếu cần */
    color: #333; /* Điều chỉnh màu sắc nếu cần */
}
.header-cart {
    display: flex;
    align-items: center;
}

.user-avatar {
    width: 30px;
    height: 30px;
    border-radius: 50px;
    
}

.btn-size {
            /* Thêm các kiểu cho nút ở đây nếu cần */
            transition: background-color 0.3s;
        }
        

.btn-size.active {
    background-color: black;
    color: white;
}

.quantity-size input {
    width: 100px;
}

.quantity-cart {
    margin-top: 20px;
}

.add-to-cart {
    background-color: black;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

.add-to-cart:hover {
    background-color: darkgrey;
}
/* Container cho các nút và ô nhập số lượng */
.quantity-cart {
    display: flex;
    align-items: center;
    gap: 10px;
}

/* Container bên trong .quantity-cart */
.quantity-cart > div {
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Nút giảm số lượng */
.decrease-quantity,
.increase-quantity {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s, border-color 0.3s;
}

.decrease-quantity:hover,
.increase-quantity:hover {
    background-color: #ddd;
    border-color: #bbb;
}

/* Nút tăng số lượng */
.increase-quantity {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s, border-color 0.3s;
}

.increase-quantity:hover {
    background-color: #ddd;
    border-color: #bbb;
}

/* Ô nhập số lượng */
#quantity-input {
    width: 50px;
    text-align: center;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

/* Nút thêm vào giỏ hàng */
/* .add-to-cart {
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.add-to-cart:hover {
    background-color: #218838;
} */

    </style>
    <!-- Modernizr JS -->
    <script src="{{ asset('client/js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>

<body>
    @include('client.header')
    @include('client.banner')
    @yield('content')
    @include('client.footer')
    <!-- jQuery latest version -->
    <script src="{{ asset('client/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('client/js/vendor/jquery-migrate.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('client/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('client/js/plugins.js') }}"></script>
    <!-- Ajax Mail js -->
    <script src="{{ asset('client/js/ajax-mail.js') }}"></script>
    <!-- Main js -->
    <script src="{{ asset('client/js/main.js') }}"></script>
    <script>
        function togglePassword(id) {
            var passwordField = document.getElementById(id);
            var toggleIcon = passwordField.nextElementSibling;
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.textContent = '🙈'; // Change to closed eye icon
            } else {
                passwordField.type = 'password';
                toggleIcon.textContent = '👁️'; // Change to open eye icon
            }
        }
    </script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</body>


<!-- Mirrored from htmldemo.net/outside/outside/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 01:00:22 GMT -->

</html>
