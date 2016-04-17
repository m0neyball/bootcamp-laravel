@extends('app')

@section('content')
    <h2>Articles</h2>

    <hr>

    @foreach($articles as $article)
        <article>
            <h3>
                <a href="/articles/{{ $article->id }}">
                    {{ $article->title }}
                </a>
                <br>
                <a href="{{ action('ArticlesController@show', [$article->id]) }}">
                    {{ $article->title }}
                </a>
                <br>
                <a href="{{ url('/articles', [$article->id]) }}">
                    {{ $article->title }}
                </a>
            </h3>
            <div class="body">{{ $article->body }}</div>
        </article>
    @endforeach
@endsection