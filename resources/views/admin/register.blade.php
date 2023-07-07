@extends('layout.admin')

@push('header')
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/parsleyjs/css/parsley.css') }}">
@endpush

@section('container')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Form Registrasi Admin</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Form Registrasi</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div> 
            </div>
        </div>
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Admin Register</h2>
                        </div>
                        <div class="body">
                            <form action="/register" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label> @error('record') is-invalid @enderror
                                    <input name="username" type="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="Your email">
                                </div>
                                <div class="form-group dropdown">
                                    <label for="role">Role</label>
                                    <select name="role_id" class="form-control" id="role">
                                        <option value="1" selected readonly>Admin</option>
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <input name="password" type="password" class="form-control @error('record') is-invalid @enderror" id="password" placeholder="Password">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="togglePassword">
                                                <i class="fas fa-eye-slash" id="eyeIcon"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                <br>
                                <button type="submit" class="btn btn-primary">Register</button>
                                <hr class="space m" />

                                @if (session('status') === 'success')
                                <div class="success-box">
                                    <div class="alert alert-success">Congratulations. Anda telah berhasil melakukan pendaftaran akun</div>
                                </div>
                                @elseif (session('status') === 'error')
                                <div class="error-box">
                                    <div class="alert alert-warning">Error, please retry. Pendaftaran akun gagal</div>
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('footer')
    <script src="{{ asset('admin/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('admin/vendor/parsleyjs/js/parsley.min.js') }}"></script>
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
    <script>
        $(function() {
            // validation needs name of the element
            $('#food').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
@endpush
