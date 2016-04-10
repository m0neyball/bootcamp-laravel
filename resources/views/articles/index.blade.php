@extends('app')

@section('content')
    <h2>Articles</h2>

    <hr>

    @foreach($articles as $article)
        <article>
            <h3>
                <a href="#">
                    {{ $article->title }}
                </a>
            </h3>
            <div class="body">{{ $article->body }}</div>
        </article>
    @endforeach
@endsection