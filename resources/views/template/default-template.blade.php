<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Page Title --}}
    @yield('title')

    {{-- Framework Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('bootstrap-framework/css/bootstrap.css') }}">

    {{-- Icon Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('bootstrap-framework/bootstrap-icon/bootstrap-icons.css') }}">

    {{-- CSS Costum --}}
    <link rel="stylesheet" href="{{ asset('css-costum/costum-style.css') }}">

    {{-- File Jquery --}}
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>

</head>

<body class="bg-light">

    <div class="container bg-body shadow p-4 ">

        @include('template.alert.alert')

        @yield('conten')

    </div>

    <script src="{{ asset('bootstrap-framework/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap-framework/js/bootstrap.js') }}"></script>

    {{-- Aktifasi Tooltip --}}
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
