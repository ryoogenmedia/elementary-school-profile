<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SDN INP PAJAIANG | LOGIN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('backend/img/favicon.ico') }}" rel="icon">

    <link href="{{ asset('backend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('backend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @yield('content')

    @stack('scripts')

    <script src="{{ asset('backend/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('backend/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('backend/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('backend/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('backend/js/main.js') }}"></script>
</body>

</html>
