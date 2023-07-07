<!doctype html>
<html lang="en">

<head>
    <title>Etukang | {{ $title }} </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

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

    <div id="wrapper" class="auth-main">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="javascript:void(0);"><img src="{{ asset('user/images/loader.png') }}" width="30" height="30" class="d-inline-block align-top mr-2" alt="">Etukang</a>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="/">Halaman Utama</a></li>
                            <li class="nav-item"><a class="nav-link" href="/register">Sign Up</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-8">
                    <div class="auth_detail">
                        <h2 class="text-monospace">
                            Segala Sesuatu<br> Yang Dibutuhkan
                            <div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="1500">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">Perbaikan Rumah</div>
                                    <div class="carousel-item">Kelistrikan</div>
                                    <div class="carousel-item">Bangunan</div>
                                    <div class="carousel-item">Interior</div>
                                    <div class="carousel-item">Dan Lain-lain</div>
                                </div>
                            </div>
                        </h2>
                        <p>Dapatkan layanan tukang terbaik, untuk seluruh kerusakan dengan sangat mudah dalam satu aplikasi.</p>
                        <ul class="social-links list-unstyled">
                            <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    @if (session('status') === 'success')
                    <div class="success-box">
                        <div class="alert alert-success">
                            Congratulations. Anda telah berhasil melakukan pendaftaran akun
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @elseif (session('status') === 'error')
                        <div class="error-box">
                            <div class="alert alert-warning">
                                Error, please retry. Pendaftaran akun gagal
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif                
                    <div class="card">
                        <div class="header">
                            <p class="lead">Login to your account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="/login" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="control-label sr-only">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid                                      
                                    @enderror" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label sr-only">Password</label>
                                    <div class="input-group">
                                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="togglePassword">
                                                <i class="fas fa-eye-slash" id="eyeIcon"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Remember me</span>
                                    </label>
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit">LOGIN</button>
                                {{-- <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button> --}}
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i><a href="page-forgot-password.html">Forgot password?</a></span>
                                    <span>Don't have an account? <a href="/register">Register</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('admin/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="https://kit.fontawesome.com/94ef7dcb87.js" crossorigin="anonymous"></script>


    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        });
    </script>

    @stack('footer')

    <script src="{{ asset('admin/bundles/mainscripts.bundle.js') }}"></script>
</body>

</html>
