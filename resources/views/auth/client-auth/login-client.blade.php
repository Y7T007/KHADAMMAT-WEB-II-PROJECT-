@extends('layouts.home')

@section('content')
    <form method="POST" action="{{ route('client.login') }}" class="form-container slideRight-animation">
        @csrf

        <h1 class="form-header">Log in</h1>

        <div class="input-container">
            <label for="email"></label>
            <input type="email" name="email" id="email" required>
            <span>Email</span>
            <div class="error"></div>
        </div>

        <div class="input-container">
            <label for="user-password"></label>
            <input type="password" name="password" id="user-password" class="user-password" required>
            <span>Password</span>
            <div class="error"></div>
        </div>

        <div id="btm">
            <button type="submit" class="submit-btn">Log in</button>
            <p class="btm-text">
                Don't have an account..? <a href="{{ route('client.register') }}" class="btm-text-highlighted">Sign up</a>
            </p>
        </div>
    </form>

    <form method="POST" action="{{ route('client.login') }}">
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
            <button type="submit">{{ __('Login') }}</button>
        </div>
    </form>
@endsection
