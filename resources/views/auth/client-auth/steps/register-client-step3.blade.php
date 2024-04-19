@extends('layouts.home')

@section('content')

<div class="container" style="color: white;display: flex;flex-direction: column; align-items:center;justify-items: center;">
    <div class="row justify-content-center" style="width:100%">
        <div class="col-md-8">
            <div class="card" style="align-items: center;justify-content: center;justify-items:center;display: flex;flex-direction: column; margin-top: 50px">
                <div class="card-header">{{ __('About your house') }}</div>

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
                    <div class="stepper-item completed ">
                        <div class="step-counter">2</div>
                        <div class="step-name">Infos</div>
                    </div>
                    <div class="stepper-item active ">
                        <div class="step-counter">3</div>
                        <div class="step-name">Your House</div>
                    </div>
                </div>
                <div class="card-body" style="width:100%">
                    <form method="POST" action="{{ route('postStep3') }}">
                        @csrf
                        <div class="row" style="width:100%; display: flex;flex-direction: row;justify-content: center;align-items: center">
                            <div class="col-md-6" style="width:40%">
                                <!-- Maison, Jardin, Garage, Number of Rooms, Number of Bathrooms -->
                                <!-- Maison -->


                                <!-- Number of Rooms -->
                                <div class="form-group" >
                                    <label for="nb_chambres">{{ __('Number of Rooms') }}</label>
                                    <input id="nb_chambres" type="number" min="0" class="form-control @error('nb_chambres') is-invalid @enderror" name="nb_chambres" value="{{ old('nb_chambres') }}" required>
                                    @error('nb_chambres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>

                                <!-- Number of Bathrooms -->
                                <div class="form-group">
                                    <label for="nb_bain">{{ __('Number of Bathrooms') }}</label>
                                    <input id="nb_bain" type="number" min="0" class="form-control @error('nb_bain') is-invalid @enderror" name="nb_bain" value="{{ old('nb_bain') }}" required>
                                    @error('nb_bain')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="superficie">{{ __('House Superficie (m²)') }}</label>
                                    <input id="superficie" type="number" min="0" class="form-control @error('superficie') is-invalid @enderror" name="superficie" value="{{ old('superficie') }}" required>
                                    @error('superficie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6" style="width:40%">
                                <!-- Television, Refrigerator, Washing Machine, Other Devices -->
                                <h3>Your House contain :</h3>

                                <!-- Jardin -->
                                <div class="form-group" style="width:100%;display: flex;flex-direction: row;justify-content: left;align-items: start">
                                    <input id="jardin" type="checkbox" class="form-control @error('jardin') is-invalid @enderror" name="jardin" value=0" style="width:10%">
                                    <label for="jardin">{{ __('Jardin') }}</label>
                                    @error('jardin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- Garage -->
                                <div class="form-group" style="width:100%;display: flex;flex-direction: row;justify-content: left;align-items: start">
                                    <input id="garage" type="checkbox" class="form-control @error('garage') is-invalid @enderror" name="garage" value="0" style="width:10%">
                                    <label for="garage">{{ __('Garage') }}</label>
                                    @error('garage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>
                                <br>
                                <h3>Your Eletrical Devices</h3>

                                <!-- Television -->
                                <div class="form-group" style="width:100%;display: flex;flex-direction: row;justify-content: left;align-items: start">
                                    <input id="television" type="checkbox" class="form-control @error('television') is-invalid @enderror" name="television" value="1" style="width:10%">
                                    <label for="television">{{ __('Television') }}</label>
                                    @error('television')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- Refrigerator -->
                                <div class="form-group" style="width:100%;display: flex;flex-direction: row;justify-content: left;align-items: start">
                                    <input id="refrigirateur" type="checkbox" class="form-control @error('refrigirateur') is-invalid @enderror" name="refrigirateur" value="1" style="width:10%">
                                    <label for="refrigirateur">{{ __('Refrigerator') }}</label>
                                    @error('refrigirateur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- Washing Machine -->
                                <div class="form-group" style="width:100%;display: flex;flex-direction: row;justify-content: left;align-items: start">
                                    <input id="machine_a_laver" type="checkbox" class="form-control @error('machine_a_laver') is-invalid @enderror" name="machine_a_laver" value="1" style="width:10%">
                                    <label for="machine_a_laver">{{ __('Washing Machine') }}</label>
                                    @error('machine_a_laver')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

{{--                                <!-- Other Devices -->--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="autres">{{ __('Other Devices') }}</label>--}}
{{--                                    <input id="autres" type="text" class="form-control @error('autres') is-invalid @enderror" name="autres" value="{{ old('autres') }}">--}}
{{--                                    @error('autres')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
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
