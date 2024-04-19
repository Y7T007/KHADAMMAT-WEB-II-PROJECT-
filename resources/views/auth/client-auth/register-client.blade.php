@extends('layouts.home')

@section('content')
    <div id="step1" class="step">
        @include('auth.client-auth.steps.register-client-step1')
        <button id="nextButton" onclick="nextStep()">Next</button>
    </div>
    <div id="step2" class="step" style="display: none;">
        @include('auth.client-auth.steps.register-client-step2')
        <button id="nextButton" onclick="nextStep()">Next</button>
    </div>
    <div id="step3" class="step" style="display: none;">
        @include('auth.client-auth.steps.register-client-step3')
        <button type="submit" id="nextButton" >Submit</button>
    </div>


    <script>
        let currentStep = 1;
        const totalSteps = 3;

        function nextStep() {
            // Hide current step
            document.getElementById('step' + currentStep).style.display = 'none';

            // Increment current step
            currentStep++;

            // If we're past the last step, wrap around to the first step
            if (currentStep > totalSteps) {
                currentStep = 1;
            }

            // Show next step
            document.getElementById('step' + currentStep).style.display = 'block';

            // Update progress bar
            const progressBar = document.getElementById('progressBar');
            progressBar.style.width = (currentStep / totalSteps * 100) + '%';
            progressBar.innerHTML = 'Step ' + currentStep + ' of ' + totalSteps;
        }
    </script>
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
