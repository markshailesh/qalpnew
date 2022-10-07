<!DOCTYPE html>
<html>

<head>
    <title>Qalp Edu | Admin Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css?v=3.2.0') }}">
</head>
<!--Coded with love by Mutiullah Samim-->

<body class="hold-transition login-page"><br><br>
    <div class="login-box">
        <div class="login-logo">
            <img src="{{ URL::asset('images/lite-logo.png') }}" style="width: 130px; margin-top: 15px;" alt="Logo">
        </div>
        <div class="card">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('Reset Password') }}</p>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            <div class="d-flex justify-content-center mt-3 login_container">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
            </form>

            <p class="mb-1 text-center"><br>
                    <a class="btn btn-link" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
            </p>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>
