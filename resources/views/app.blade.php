<!doctype html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="{{elixir('css/all.css')}}">

</head>
<body>
    <div class="container">
        @include('flash::message')

        @yield('content')
    </div>
    <script src="{{elixir('js/all.js')}}"></script>
   
    <script>
        $('#flash-overlay-modal').modal();
//        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    @yield('footer')
</body>
</html>