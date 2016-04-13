@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Login</h2>

            <form action="/auth/login" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                    <input type="submit" value="Login">
                </p>

                <p>
                    <a href="{{ url('/password/email') }}">Forgot Your Password?</a>
                </p>
            </form>
        </div>
    </div>
@endsection