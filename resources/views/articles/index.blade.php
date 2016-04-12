@extends('layouts.app')

@section('content')
    <h1>Article</h1>
    <a href="{{ url('/articles/create') }}">Create Article</a>
    <hr />
    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ action('ArticlesController@edit', $article->id)  }}">{{ $article->title }}</a>
            </h2>
            <div class="body">{{ $article->body }}</div>
        </article>
    @endforeach
@endsection