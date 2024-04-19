@extends('layouts.home')

@section('content')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Ldo6cApAAAAANllnHYRR_lUhi3GcoX6JurvLAqp"></script>

    <form method="POST" action="{{ route('client.register') }}">
        @csrf
        <!-- Other form fields -->


        <div class="form-group -align-center align-content-center">
            <h2 style="color :white">Please verify that your are not a robot !!</h2><br><br>
            <div class="g-recaptcha" data-sitekey="https://recaptchaenterprise.googleapis.com/v1/projects/web-ii-khadamat--1713549030001/assessments?key=API_KEY"></div>

            @csrf
            <!-- Other form fields -->

                <div class="form-group">
                    <div id="g-recaptcha"></div>
                </div>

                <!-- Development mode button -->
            <br>
                <a href="/register-client-step1" type="submit" class="btn btn-secondary">Skip reCAPTCHA (Dev Mode)</a>
        </div>
        <!-- Replace the variables below. -->
        <script>
            function onSubmit(token) {
                document.getElementById("demo-form").submit();
            }
        </script>

        <script>
            function onClick(e) {
                e.preventDefault();
                grecaptcha.enterprise.ready(async () => {
                    const token = await grecaptcha.enterprise.execute('6Ldo6cApAAAAANllnHYRR_lUhi3GcoX6JurvLAqp', {action: 'LOGIN'});
                });
            }
        </script>

    </form>
@endsection
{{--@section('content')--}}
{{--    <div class="container" style="color: white;display: flex;flex-direction: column; align-items:center;justify-items: center;">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card" style="align-items: center;justify-content: center;justify-items:center;display: flex;flex-direction: column">--}}
{{--                    <div class="card-header">{{ __('Client Register') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('client.register') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                    @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Register') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
