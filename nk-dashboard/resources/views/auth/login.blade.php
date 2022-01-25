@extends('layouts.master')
@section('content')
    <!-- Login-Box -->
    <div class="login-box py-5">
        <div class="card card-outline card-warning bg-dark">
            <!-- Card-Header -->
            <div class="card-header text-center">
                <!-- Brand Logo -->
                <div class="w-50 mx-auto">
                    <img src="{{ asset('images/headerdarklogo.png') }}" alt="NK Logo" class="img-fluid">
                </div>
                <!-- /Brand Logo -->
            </div>
            <!-- /Card-Header -->
            <!-- Card-Body -->
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <!-- Login-Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Login-Email -->
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <!-- Error -->
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!-- /Error -->
                    </div>
                    <!-- /Login-Email -->
                    <!-- Login-Password -->
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password" required
                            autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <!-- Error -->
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!-- /Error -->
                    </div>
                    <!-- /Login-Password -->
                    <!-- Remember-Me-Check -->
                    <div class="p-0 mb-3">
                        <div class="icheck-warning">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <!-- Remember-Me-Check -->
                    <!-- Login-Btn -->
                    <div class="p-0 mb-3">
                        <button type="submit" class="btn btn-warning btn-block">{{ __('Login') }}</button>
                    </div>
                    <!-- /Login-Btn -->
                </form>
                <!-- /Login-Form -->
                {{-- <!-- Social-Auth -->
                <div class="social-auth-links text-center mt-2 mb-3">
                    <!-- Facebook -->
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <!-- /Facebook -->
                    <!-- Google -->
                    <a href="#" class="btn btn-block btn-light">
                        <i class="fab fa-google mr-2"></i> Sign in using Google
                    </a>
                    <!-- /Google -->
                </div>
                <!-- /Social-Auth --> --}}
                <!-- Forget-Password -->
                @if (Route::has('password.request'))
                    <div>
                        <a class="text-warning" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                @endif
                <!-- /Forget-Password -->
                <!-- Register -->
                {{-- <p class="mb-0">
                    <a href="{{ route('register') }}" class="text-warning">Register a new membership</a>
                </p> --}}
                <!-- /Register -->
            </div>
            <!-- /Card-Body -->
        </div>
    </div>
    <!-- /Login-Box -->
@endsection
