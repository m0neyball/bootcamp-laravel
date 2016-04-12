@extends('layouts.app')

@section('content')
    <h2>Write a New Article</h2>

    <hr>

    {!! Form::open(['url' => 'articles']) !!}
    @include('articles.form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

    @include('errors.list')
@endsection