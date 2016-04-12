@extends('layouts.app')

@section('content')
    <h2>{{ $article->title }}</h2>

    <hr>

    <article>
        {{ $article->body }}
    </article>
@endsection