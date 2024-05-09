

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
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{--    rECAPATCHA : --}}
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Ldo6cApAAAAANllnHYRR_lUhi3GcoX6JurvLAqp"></script>


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
{{--    <div class="row "style="display: flex;flex-direction: row;justify-content: center;align-items: center" >--}}
{{--        <div class="col" style="width: 40%">--}}
            <div class="image-container">
                <h1 class="company">Khadamat </h1>
                <img src="signIn_signup/images/signup.svg" class="illustration" alt="">
                <p class="quote">Sign up today to get exciting offers..!</p>
                <a href="#btm" class="mobile-btm-nav">
                    <img src="signIn_signup/images/dbl-arrow.png" alt="">
                </a>
            </div>
{{--        </div>--}}
        <div class="col">
            @yield('content')
        </div>
{{--    </div>--}}


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
