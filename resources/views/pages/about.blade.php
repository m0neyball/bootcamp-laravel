@extends('app')

@section('content')
<h1>About</h1>
@if(count($people))
    <h3>People I like:</h3>
    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
@endif
<p>執行上面的指令，會發現似乎與 SSH 登入一樣，而且還不用先查詢 Container 的 ip，可以直接用 Container 的 NAME 來指定目標。（其實還是有基本前提是該 Container 內確實有 /bin/bash 可以使用。）</p>
@endsection