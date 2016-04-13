@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Reset Password</h2>

            @if (session('status'))
                <p>
                    {{ session('status') }}
                </p>
            @endif

            <form action="{{ url('/password/email') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <p>
                    <label for="email">Email:</label><br>
                    <input id="email" name="email" type="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <strong>{{ $errors->first('email') }}</strong>
                    @endif
                </p>

                <p>
                    <input type="submit" value="Send Password Reset Link">
                </p>
            </form>
        </div>
    </div>
@endsection