@extends('layouts.home')

@section('content')

<div class="container" style="color: white;display: flex;flex-direction: column; align-items:center;justify-items: center;margin-top: 50px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="align-items: center;justify-content: center;justify-items:center;display: flex;flex-direction: column; color:white">
                    <div class="card-header">{{ __('Client Register Step1') }}</div>
                    <br><br>
                    <style>
                        .stepper-wrapper {
                            margin-top: auto;
                            display: flex;
                            justify-content: space-between;
                            margin-bottom: 20px;
                            text-align: center;
                        }
                        .stepper-item {
                            position: relative;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            flex: 1;

                        @media (max-width: 768px) {
                            font-size: 12px;
                        }
                        }

                        .stepper-item::before {
                            position: absolute;
                            content: "";
                            border-bottom: 2px solid #ccc;
                            width: 100%;
                            top: 20px;
                            left: -50%;
                            z-index: 2;
                        }

                        .stepper-item::after {
                            position: absolute;
                            content: "";
                            border-bottom: 2px solid #ccc;
                            width: 100%;
                            top: 20px;
                            left: 50%;
                            z-index: 2;
                        }

                        .stepper-item .step-counter {
                            position: relative;
                            z-index: 5;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            background: #ccc;
                            margin-bottom: 6px;
                        }

                        .stepper-item.active {
                            font-weight: bold;
                            border-bottom: 2px solid green;

                        }

                        .stepper-item.completed .step-counter {
                            background-color: #4bb543;
                        }

                        .stepper-item.completed::after {
                            position: absolute;
                            content: "";
                            border-bottom: 2px solid #4bb543;
                            width: 100%;
                            top: 20px;
                            left: 50%;
                            z-index: 3;
                        }

                        .stepper-item:first-child::before {
                            content: none;
                        }
                        .stepper-item:last-child::after {
                            content: none;
                        }
                    </style>
                    <div class="stepper-wrapper">
                        <div class="stepper-item active">
                            <div class="step-counter">1</div>
                            <div class="step-name">Account</div>
                        </div>
                        <div class="stepper-item ">
                            <div class="step-counter">2</div>
                            <div class="step-name">Infos</div>
                        </div>
                        <div class="stepper-item ">
                            <div class="step-counter">3</div>
                            <div class="step-name">Your House</div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('postStep1') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group -align-center align-content-center">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="file" class="form-control @error('profile_picture') is-invalid @enderror" name="profile_picture" value="{{ old('profile_picture') }}"  required autocomplete="profile_picture" autofocus>

                                    @error('profile_picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group -align-center align-content-center">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
