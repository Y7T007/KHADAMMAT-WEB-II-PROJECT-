
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

            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Votre formulaire de connexion ici -->

               
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
