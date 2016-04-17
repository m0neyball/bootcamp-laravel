@extends('app')

@section('content')
    <h2>{{ $article->title }}</h2>

    <hr>

    <article>
        {{ $article->body }}
    </article>

    @unless($article->tags->isEmpty())
        <h3>Tags</h3>
        <ul>
            @foreach($article->tags as $tag)
                <li>
                    {{ $tag->name }}
                </li>
            @endforeach
        </ul>
    @endunless
@endsection