<!doctype html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{elixir('css/all.css')}}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @yield('footer')
</body>
</html>