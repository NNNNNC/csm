<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'My App')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/psu_logo.png') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background: url("{{ asset('images/bg12.png') }}") no-repeat center center fixed;
            background-size: contain;
            /* Prevent stretching */
            background-color: black;
            /* Set background color to black */
            position: relative;
            /* Ensure relative positioning for overlay */
        }

        /* Overlay to add black opacity */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: black;
            opacity: 0.5;
            /* Adjust opacity level */
            z-index: -1;
            /* Place behind content */

        }

        .text-shadow {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            /* White glow effect */
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

</head>

<body>

    @include('includes.header')

    <div class="content">
        @yield('content')
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('form-handler.js') }}"></script>
</body>

</html>