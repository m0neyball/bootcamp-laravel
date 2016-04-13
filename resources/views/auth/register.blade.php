@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Register</h2>

            <form action="{{ url('/register') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <p>
                    <label for="name">Name:</label><br>
                    <input id="name" name="name" type="text" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <strong>{{ $errors->first('name') }}</strong>
                    @endif
                </p>

                <p>
                    <label for="email">Email:</label><br>
                    <input id="email" name="email" type="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <strong>{{ $errors->first('email') }}</strong>
                    @endif
                </p>

                <p>
                    <label for="password">Password:</label><br>
                    <input id="password" name="password" type="password" value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <strong>{{ $errors->first('password') }}</strong>
                    @endif
                </p>

                <p>
                    <label for="password_confirmation">Confirm Password:</label><br>
                    <input id="password_confirmation" name="password_confirmation" type="password">
                    @if ($errors->has('password_confirmation'))
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    @endif
                </p>

                <p>
                    <input type="submit" value="Register">
                </p>
            </form>
        </div>
    </div>
@endsection