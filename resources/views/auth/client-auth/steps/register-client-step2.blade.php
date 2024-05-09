@extends('layouts.home')

@section('content')

<div class="container" style="color: white;display: flex;flex-direction: column; align-items:center;justify-items: center;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="align-items: center;justify-content: center;justify-items:center;display: flex;flex-direction: column; margin-top: 50px">
                <div class="card-header">{{ __('Personnal Informations') }}</div>

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
                        /*border-bottom: 2px solid green;*/

                    }
                    .stepper-item.active .step-counter{
                        font-weight: bold;
                        border-bottom: 2px solid #4bb543;

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
                    <div class="stepper-item completed">
                        <div class="step-counter">1</div>
                        <div class="step-name">Account</div>
                    </div>
                    <div class="stepper-item active ">
                        <div class="step-counter">2</div>
                        <div class="step-name">Infos</div>
                    </div>
                    <div class="stepper-item ">
                        <div class="step-counter">3</div>
                        <div class="step-name">Your House</div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('postStep2') }}">
                        @csrf

                        <!-- Include form fields for step 2 -->
                        <div class="form-group row">
                            <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>
                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control" name="ville" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('GSM') }}</label>
                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_naissance" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="date_naissance" type="date" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance" value="{{ old('date_naissance', '2000-01-01') }}" required>
                                @error('date_naissance')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select id="genre" class="form-control @error('genre') is-invalid @enderror" name="genre" required>
                                    <option value="">Select Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>

                                @error('genre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Next') }}
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
