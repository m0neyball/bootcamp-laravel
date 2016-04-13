@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Reset Password</h2>

            <form action="{{ url('/password/reset') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="token" value="{{ $token }}">

                <p>
                    <label for="email">Email:</label><br>
                    <input id="email" name="email" type="email" value="{{ $email or old('email') }}">
                    @if ($errors->has('email'))
                        <strong>{{ $errors->first('email') }}</strong>
                    @endif
                </p>

                <p>
                    <label for="password">Password:</label><br>
                    <input id="password" name="password" type="password">
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
                    <input type="submit" value="Reset Password">
                </p>
            </form>
        </div>
    </div>
@endsection