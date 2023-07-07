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
                            <li class="nav-item"><a class="nav-link" href="/login">Sign In</a></li>
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
                    <div class="card">
                        <div class="header">
                            <p class="lead">Create an account</p>
                        </div>
                        <div class="body">
                            <form action="/register" method="post" class="form-auth-small">
                                @csrf
                                <div class="form-group">
                                    <label for="username" class="control-label sr-only">Username</label> @error('record') is-invalid @enderror
                                    <input name="username" type="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label sr-only">Email</label>
                                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="Your email">
                                </div>
                                <div class="form-group dropdown">
                                    <label for="role" class="control-label sr-only">Role</label>
                                    <select name="role_id" class="form-control" id="role">
                                        <option value="" disabled selected>Select Role</option>
                                        <option value="2">User</option>
                                        <option value="3">Tukang</option>
                                        {{-- <option value="1">Admin</option> --}}
                                    </select>
                                </div>                                                                
                                <div class="form-group">
                                    <label for="password" class="control-label sr-only">Password</label>
                                    <div class="input-group">
                                        <input name="password" type="password" class="form-control @error('record') is-invalid @enderror" id="password" placeholder="Password">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="togglePassword">
                                                <i class="fas fa-eye-slash" id="eyeIcon"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>                                
                                <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                                <div class="bottom">
                                    <span>Do You have an account? <a href="/login">Login</a></span>
                                </div>
                            </form>
                            {{-- <div class="separator-linethrough"><span>OR</span></div>
                            <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Sign in with Facebook</button>
                            <button class="btn btn-signin-social"><i class="fa fa-twitter twitter-color"></i> Sign in with Twitter</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="{{ asset('admin/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/bundles/vendorscripts.bundle.js') }}"></script>

    @stack('footer')

    <script src="{{ asset('admin/bundles/mainscripts.bundle.js') }}"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
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

</body>

</html>
