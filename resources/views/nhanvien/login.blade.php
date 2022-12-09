
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ĐĂNG NHẬP</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('public/backend/') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('public/backend/') }}/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">ĐĂNG NHẬP NHÂN VIÊN</h1>
                                    </div>
                                    <form class="user" action="{{ route('login-nhanvien') }}" method="POST">
                                        @if(Session::has('success'))
                                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                                        @endif

                                        @if(Session::has('fail'))
                                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                        @endif
                                        
                                        @csrf
                                        <div class="form-group">
                                            <Label id="email">Email<span class="text-danger">*</span></Label>
                                            <input type="email"  name="email" class="form-control form-control-user" id="email"
                                                placeholder="Email" value="{{ old('email') }}">
                                                <span class="text-danger small">@error('email') {{ $message }} @enderror</span>

                                        </div>
                                        <div class="form-group ">
                                            <Label id="password">Password<span class="text-danger">*</span></Label>
                                            <input type="password"  name="password" class="form-control form-control-user" id="password"
                                                placeholder="Password" value="">
                                                <span class="text-danger small">@error('password') {{ $message }} @enderror</span>

                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ghi nhớ đăng nhập</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-user btn-block">Đăng nhập</button>
                                            {{-- <hr> --}}
                                            {{-- <p class = "small">Tạo tài khoản mới! <a  href="register">Đăng kí</a></p> --}}
                                        </div>
                                     
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('public/backend/') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('public/backend/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('public/backend/') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('public/backend/') }}js/sb-admin-2.min.js"></script>

</body>

</html>