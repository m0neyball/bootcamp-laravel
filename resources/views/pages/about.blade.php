<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
</head>
<body>
    <h1>About {{ $name }}</h1>
    <p>執行上面的指令，會發現似乎與 SSH 登入一樣，而且還不用先查詢 Container 的 ip，可以直接用 Container 的 NAME 來指定目標。（其實還是有基本前提是該 Container 內確實有 /bin/bash 可以使用。）</p>
</body>
</html>