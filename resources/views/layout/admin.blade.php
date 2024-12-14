<!doctype html>
<html lang="en">

<head>
    <title>Etukang | {{ $title }} </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="icon" href="{{ asset('user/images/icon.png') }}" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}">

    @stack('header')

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/color_skins.css') }}">
</head>

<body class="theme-orange">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ asset('user/images/loader.png') }}" width="68" height="68" alt="HexaBit">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        @include('partials.sidebar')

        <div class="main">
            @yield('container')
        </div>

    </div>

    <!-- Javascript -->
    <script src="{{ asset('admin/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/bundles/vendorscripts.bundle.js') }}"></script>

    
    <script src="{{ asset('admin/bundles/mainscripts.bundle.js') }}"></script>
    @stack('footer')
</body>

</html>
