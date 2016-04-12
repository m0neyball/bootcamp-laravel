@extends('layouts.app')

@section('content')
    @if( $name == 'John')
        <h1>Hi, John</h1>
    @else
        <h1>About Me: <?= $name ?></h1>
        <h1>About Me: {{ $name }}</h1>
        <h1>About Me: {!! $name !!}</h1>
    @endif

    <p>
        birthday is {{ $birthday }}
    </p>

    @if(count($people))
        <h3>People I Like:</h3>
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus blanditiis dolor eaque esse incidunt, ipsam
        minima nesciunt odio perspiciatis possimus quaerat qui quidem sit. Consequuntur explicabo nostrum qui quisquam
        voluptatibus?
    </p>
    </body>
@endsection