<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/custom/reset.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @yield('style')

</head>

<body>
    @yield('content')

    <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
    <script>
        @if(session('success'))
            swal("{{session('success')}}", "", "success");
        @endif
        @if(session('flash_message'))
            swal("{{session('flash_message')}}", "", "info");
        @endif
        @if(session('error'))
            swal("{{session('error')}}", "", "error");
        @endif
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @yield('script')
    <script>
        AOS.init();
        if (localStorage.getItem("theme") === "dark") {
         document.body.setAttribute("id", "darkmode");
      }
    </script>
</body>

</html>
