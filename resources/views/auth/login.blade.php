<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page - MUN</title>

    <!-- Favicon -->
    <link rel="shortcut icon" src="{{ asset('img/Logo/mun.png') }}">


    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('css/LoginPage.css') }}" rel="stylesheet">

</head>

<body>
    @include('sweetalert::alert')
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex"
            style="background-image: url({{ url('img/Logo/login-3.png') }})">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-center m-b-30 ">
                                        <img class="img-fluid" alt="" src="{{ asset('img/Logo/mun.png') }}">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center m-b-30 ">
                                        <h5 class="m-b-0 font-size-13 text-muted">Selamat Datang, Silahkan Login</h5>
                                    </div>

                                    @if(session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('loginError') }}
                                    </div>
                                    @endif

                                    <form action="/login" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="Email" >Email:</label>
                                            <div class="input-affix">
                                                <input type="text"
                                                    class="form-control"
                                                    id="email" name="email" placeholder="Email" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <a class="float-right font-size-13 text-muted" href="">Forget
                                                Password?</a>
                                            <div class="input-affix m-b-10">
                                                {{-- <i class="prefix-icon anticon anticon-lock"></i> --}}
                                                <input type="password" class="form-control" id="password"
                                                    name="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    Don't have an account? 
                                                    <a class="small" href="/register"> Signup</a>
                                                </span>
                                                <button class="btn btn-primary">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="{{ asset('js/LoginPage.vendors.min.js') }}"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{ asset('js/LoginPage.app.min.js') }}"></script>

</body>

</html>
