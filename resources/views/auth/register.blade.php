{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
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
    <title>Sign up | Basket ™</title>
    <link rel="shortcut icon" href="signIn_signup/images/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="signIn_signup/css/styles.css">
    <script src="signIn_signup/js/script.js" defer></script>
</head>
<body>
    <main class="card-container slideUp-animation">
        <div class="image-container">
            <h1 class="company">Khadamat </h1>
            <img src="signIn_signup/images/signup.svg" class="illustration" alt="">
            <p class="quote">Sign up today to get exciting offers..!</p>
            <a href="#btm" class="mobile-btm-nav">
                <img src="signIn_signup/images/dbl-arrow.png" alt="">
            </a>
        </div>
        <form method="POST" action="{{ route('register') }}" class="form-container slideRight-animation">
            @csrf

            <h1 class="form-header">Get started</h1>

            <div class="input-container">
                <label for="name"></label>
                <input type="text" name="name" id="name" required>
                <span>First name</span>
                <div class="error"></div>
            </div>

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

            <div class="input-container">
                <label for="user-password-confirm"></label>
                <input type="password" name="password_confirmation" id="user-password-confirm" class="password-confirmation" required>
                <span>Confirm Password</span>
                <div class="error"></div>
            </div>

            <div id="btm">
                <button type="submit" class="submit-btn">Create Account</button>
                <p class="btm-text">
                    Already have an account..? <a href="{{ route('login') }}" class="btm-text-highlighted">Log in</a>
                </p>
            </div>
        </form>
    </main>
    <section class="outro-overlay disabled slideUp-animation">
        <h1 class="company">Basket <sup>&trade;</sup></h1>
        <h1 class="outro-greeting">Thank's for signing up..!</h1>
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
