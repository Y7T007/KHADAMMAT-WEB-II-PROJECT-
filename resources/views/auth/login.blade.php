{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#06aa5e">
    <meta name="msapplication-navbutton-color" content="#06aa5e">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Login | Basket ™</title>
    <link rel="shortcut icon" href="signIn_signup/images/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="signIn_signup/css/styles.css">
    <script src="signIn_signup/js/script.js" defer></script>
</head>
<body>
    <main class="card-container slideUp-animation">
        <div class="image-container">
            <h1 class="company">Khadamat </h1>
            <img src="signIn_signup/images/signin.svg" class="illustration" alt="">
            <p class="quote">Welcome back! Log in to your account.</p>
            <a href="#btm" class="mobile-btm-nav">
                <img src="signIn_signup/images/dbl-arrow.png" alt="">
            </a>
        </div>
        <form method="POST" action="{{ route('login') }}" class="form-container slideRight-animation">
            @csrf

            <h1 class="form-header">Log in</h1>

            <div class="input-container">
                <label for="email"></label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <span>Email</span>
                <div class="error"></div>
            </div>

            <div class="input-container">
                <label for="password"></label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                <span>Password</span>
                <div class="error"></div>
            </div>

            
               
            <div id="btm">
                <button type="submit" class="submit-btn">Log in</button>
                <p class="btm-text">
                    Don't have an account yet..? <a href="{{ route('register') }}" class="btm-text-highlighted">Sign up</a>
                </p>

                <p class="btm-text">
                    Forgot your password? <a  href="{{ route('password.request') }}" class="btm-text-highlighted">Reset</a>
                </p>


                
        

            </div>
        </form>
    </main>
    <section class="outro-overlay disabled slideUp-animation">
        <h1 class="company">Basket <sup>&trade;</sup></h1>
        <h1 class="outro-greeting">Thank you for choosing Basket..!</h1>
        <img src="signIn_signup/images/shape.svg" alt="" class="shape">
        <img src="signIn_signup/images/signedUp.svg" alt="" id="signedUp-illustration" class="slideRight-animation">
        <div class="author-link">
            &copy;&nbsp;
            <a href="https://www.0xabdulkhalid.ml/">0xabdulkhalid</a> |
            <a href="https://www.github.com/0xabdulkhalid/basket-sign-up-form/">Source Code</a>
        </div>
    </section>
</body>
</html>
