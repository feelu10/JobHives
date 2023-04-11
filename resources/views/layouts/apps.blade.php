
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>JobHives</title>
    <link rel="shortcut icon" href="{{ URL::to('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ URL::to('assets-login/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets-login/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets-login/plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets-login/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets-login/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets-login/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets-login/css/style.css') }}">
    {{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('assets-login/css/toastr.min.css') }}">
	<script src="{{ URL::to('assets-login/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets-login/js/toastr.min.js') }}"></script>
</head>

<body>
    <style>    
        .invalid-feedback{
            font-size: 14px;
        }
    </style>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="{{ URL::to('assets-login/img/login.png') }}" alt="Logo">
                    </div>
                    @yield('contents')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::to('assets-login/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('assets-login/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('assets-login/js/feather.min.js') }}"></script>
    <script src="{{ URL::to('assets-login/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::to('assets-login/js/script.js') }}"></script>
</body>

</html>
