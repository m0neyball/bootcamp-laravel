<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ elixir('output/final.css') }}">
</head>
<body>
<div class="container">
    @include('flash::message')

    @yield('content')
</div>

@yield('footer')

<script src="{{ elixir('output/final.js') }}"></script>

@if(!Session::get('flash_notification.important'))
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    @endif

            <!-- This is only necessary if you do Flash::overlay('...') -->
    <script>
        $('#flash-overlay-modal').modal();
    </script>

    @yield('script')
</body>
</html>