<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register new User</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('template/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
        html, body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <form class="splash-container" method="POST" action="{{ route('register') }}">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registration Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name" id="name" placeholder="Name" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm Password" required>
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" value="Register">Register My Account</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" required>
                        <span class="custom-control-label">By creating an account, you agree to the <a href="#">terms and conditions</a></span>
                    </label>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already a member? <a href="{{ route('login') }}" class="text-secondary">Login here</a></p>
            </div>
        </div>
    </form>
</body>

</html>
