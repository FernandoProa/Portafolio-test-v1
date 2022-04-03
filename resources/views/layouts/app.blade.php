<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
    {{--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>--}}
    {{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>--}}

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <script src="https://use.fontawesome.com/0d0a733b67.js"></script>

</head>
<body style="font-family: sans-serif;">
<div id="app">
    @include('users.includes.navbar')
    <main>
        @yield('content')
    </main>
</div>
<script>
    // $( document ).ready(function() {
    document.addEventListener("DOMContentLoaded", function () {

        window.addEventListener('scroll', function () {
            if(window.scrollY === 0){
                //user scrolled to the top of the page
                document.getElementById('navbar-user').classList.add('d-none');
                document.getElementById('navbar-user').classList.remove('fixed-top');

            }
            if (window.scrollY > 1000) {
                document.getElementById('navbar-user').classList.add('fixed-top');
                document.getElementById('navbar-user').classList.remove('d-none');

                // add padding top to show content behind navbar
                // navbar_height = document.querySelector('.navbar').offsetHeight;
                // document.body.style.paddingTop = navbar_height + 'px';
            } else {
                // document.getElementById('navbar-user').classList.remove('fixed-top');
                // document.getElementById('navbar-user').classList.add('hidden');

                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });
    // });

</script>
</body>
</html>
