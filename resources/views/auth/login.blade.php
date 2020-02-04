<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Deepor I Login</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">
    <link rel="icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="{{ asset('deepor/vendor/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('deepor/vendor/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('deepor/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- HK Wrapper -->
    <div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-end align-items-center">
                <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-outline-secondary">Help</a>
                    <a href="#" class="btn btn-outline-secondary">About Us</a>
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                                <a class="d-flex auth-brand align-items-center justify-content-center  mb-20" href="#">
                                    <img class="brand-img d-inline-block mr-5" src="{{ asset('deepor/dist/img/logo.png')}}" alt="brand" /><span class="text-dark font-23">Deepor</span>
                                </a>
                                <form method="POST" action="{{ route('login')}}" class="needs-validation" novalidate="">
                                    @csrf
                                    <h1 class="display-4 text-center mb-10">Welcome Back :)</h1>
                                    <p class="text-center mb-30">Sign in to your account and enjoy unlimited perks.</p>
                                    <div class="form-group">
                                        <input class="form-control" type="email" id="email" name="email" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Password" type="password" id="password" name="password" required>
                                            <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
                                    </div>
                                    <div class="form-group">
                                    <button class="btn btn-warning btn-block" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{ asset('deepor/vendor/jquery/deepor/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('deepor/vendor/popper.js/deepor/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('deepor/vendor/bootstrap/deepor/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('deepor/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('deepor/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('deepor/dist/js/feather.min.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('deepor/dist/js/init.js')}}"></script>
</body>

</html>