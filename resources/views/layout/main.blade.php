<!DOCTYPE html>
<!--[if lt IE 10]> <html  lang="en" class="iex"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Etukang | {{$title}} </title>
    <meta name="description" content="Multipurpose HTML template.">
    <link rel="stylesheet" href="{{ asset('user/scripts/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('user/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/content-box.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/image-box.css') }}">
    <link rel="stylesheet" href="{{ asset('user/scripts/flexslider/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('user/scripts/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('user/scripts/php/contact-form.css') }}">
    <link rel="stylesheet" href='{{ asset('user/scripts/social.stream.css') }}'>
    <link rel="icon" href="{{ asset('user/images/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('user/skin.css') }}">
    @stack('header')
</head>
<body>
    <div id="preloader"></div>
    @include('partials.navbar')

    <div class="main">
        @yield('container')
    </div>

    @include('partials.footer')

    @stack('footer')
    <script src="{{ asset('user/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('user/scripts/parallax.min.js') }}"></script>
    <script src="{{ asset('user/scripts/script.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('user/scripts/iconsmind/line-icons.min.css') }}">
    <script src="{{ asset('user/scripts/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/scripts/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('user/scripts/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('user/scripts/flexslider/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('user/scripts/jquery.tab-accordion.js') }}"></script>
    <script src="{{ asset('user/scripts/isotope.min.js') }}"></script>
    <script src="{{ asset('user/scripts/bootstrap/js/bootstrap.popover.min.js') }}"></script>
    <script src='{{ asset('user/scripts/php/contact-form.js') }}'></script>
    <script src='{{ asset('user/scripts/jquery.progress-counter.js') }}'></script>
    <script src="{{ asset('user/scripts/smooth.scroll.min.js') }}"></script>
    <script src='{{ asset('user/scripts/social.stream.min.js') }}'></script>
    @stack('footer')
    
</body>
</html>
