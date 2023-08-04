<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title_error')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing/assets/content/images/favicon.ico') }}">
    <link href="{{ asset('errors/css/style.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                @yield('content_error')
            </div>
        </div>
    </div>
</body>
<!--**********************************
 Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('errors/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('errors//js/custom.min.js') }}"></script>
<script src="{{ asset('errors//js/deznav-init.js') }}"></script>

</html>
