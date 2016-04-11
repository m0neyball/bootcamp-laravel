@extends('app')

@section('content')
    <h2>
        <span>Edit: </span>
        {!! $article->title !!}
    </h2>

    <hr>

    {!! Form::model($article ,['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
    @include('articles.form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}

    @include('errors.list')
@endsection