<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HR 2</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('template/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="icon" href="{{ asset('template/images/storelogo.png') }}" type="image/x-icon">
    <style>
    html,
    body {
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
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="{{ route('login') }}"><img src="../template/assets/images/storelogo.png" alt="logo" style="width: 200px"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body" id="loginForm">
                @include('components.invalid_information')
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" id="yourEmail" type="email" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group position-relative">
                        <input class="form-control form-control-lg" name="password" id="yourPassword" type="password" placeholder="Password">
                        <span id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #463426; border: 2px solid #463426;">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('template/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('asset/libs/js/javascript.js') }}"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const passwordField = document.querySelector('#yourPassword');
    
        togglePassword.addEventListener('click', function () {
            // Toggle the type attribute
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            
            // Toggle the eye icon
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>