@extends('layouts.home')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>

        <div>
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
        </div>

        <div>
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">{{ __('Remember Me') }}</label>
        </div>

        <div>
            <button type="submit">{{ __('Login') }}</button>
        </div>
    </form>
@endsection
