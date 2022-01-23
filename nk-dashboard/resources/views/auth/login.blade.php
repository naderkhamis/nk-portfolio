<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- /CSRF Token -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- /Script -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/headerdarklogo.png') }}" type="image/x-icon">
    <!-- /Favicon -->

    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
        integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /icheck bootstrap -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- /Styles -->
</head>

<body class="hold-transition login-page dark-mode">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-warning bg-dark">
            <div class="card-header text-center">
                <a href="#" class="h1">NK-Dashboard</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password" required
                            autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-warning">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-warning btn-block">{{ __('Login') }}</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-light">
                        <i class="fab fa-google mr-2"></i> Sign in using Google
                    </a>
                </div>
                <!-- /.social-auth-links -->
                @if (Route::has('password.request'))
                    <p class="mb-1">
                        <a class="text-warning" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </p>
                @endif
                <p class="mb-0">
                    <a href="register.html" class="text-warning">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- Scripts -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- /jQuery -->

    <!-- /Scripts -->
</body>

</html>
