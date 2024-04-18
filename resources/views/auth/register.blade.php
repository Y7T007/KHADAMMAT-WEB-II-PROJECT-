


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
    <style>
        /* Styling the select element */
#user_type {
  /* Ajoute ta mise en forme personnalisée ici */
  background-color: #f4f4f4;
  color: #333;
  padding: 0.5em;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

/* Styling the options within the select element */
#user_type option {
  /* Ajoute ta mise en forme personnalisée ici */
  background-color: #fff;
  color: #333;
}

    </style>
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


            <div class="mt-4">
        <x-label for="user_type" value="{{ __('Choose Your Type') }}" />
        <select style="background-color: #0066c3 ; color:white" id="user_type" name="user_type" class="block mt-1 w-full">
            <option value="client">client</option>
            <option value="partner">Partenaire</option>
        </select>
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
