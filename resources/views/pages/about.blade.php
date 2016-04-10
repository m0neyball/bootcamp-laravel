<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>About Me: <?= $name ?></h1>
<h1>About Me: {{ $name }}</h1>
<h1>About Me: {!! $name !!}</h1>

<p>
    birthday is {{ $birthday }}
</p>

<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus blanditiis dolor eaque esse incidunt, ipsam
    minima nesciunt odio perspiciatis possimus quaerat qui quidem sit. Consequuntur explicabo nostrum qui quisquam
    voluptatibus?
</p>
</body>
</html>