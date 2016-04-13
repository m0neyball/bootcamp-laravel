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

            <form method="POST" action="/password/email">
                {!! csrf_field() !!}

                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <div>
                    Email
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>

                <div>
                    <button type="submit">
                        傳送重置密碼連結
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection