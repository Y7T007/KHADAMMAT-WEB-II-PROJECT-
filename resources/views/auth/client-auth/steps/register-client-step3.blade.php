@extends('layouts.home')

@section('content')

<div class="container" style="color: white;display: flex;flex-direction: column; align-items:center;justify-items: center;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="align-items: center;justify-content: center;justify-items:center;display: flex;flex-direction: column">
                <div class="card-header">{{ __('Client Register Step3') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('postStep3') }}">
                        @csrf

                        <!-- Include form fields for step 3 -->
                        <div class="form-group row">
                            <label for="maison" class="col-md-4 col-form-label text-md-right">{{ __('Maison') }}</label>
                            <div class="col-md-6">
                                <input id="maison" type="text" class="form-control" name="maison" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jardin" class="col-md-4 col-form-label text-md-right">{{ __('Jardin') }}</label>
                            <div class="col-md-6">
                                <input id="jardin" type="checkbox" class="form-control" name="jardin">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="garage" class="col-md-4 col-form-label text-md-right">{{ __('Garage') }}</label>
                            <div class="col-md-6">
                                <input id="garage" type="checkbox" class="form-control" name="garage">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nb_chambres" class="col-md-4 col-form-label text-md-right">{{ __('Nb Chambres') }}</label>
                            <div class="col-md-6">
                                <input id="nb_chambres" type="number" class="form-control" name="nb_chambres" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nb_bain" class="col-md-4 col-form-label text-md-right">{{ __('Nb Bain') }}</label>
                            <div class="col-md-6">
                                <input id="nb_bain" type="number" class="form-control" name="nb_bain" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="appareil_electriques" class="col-md-4 col-form-label text-md-right">{{ __('Appareil electriques') }}</label>
                            <div class="col-md-6">
                                <input id="appareil_electriques" type="text" class="form-control" name="appareil_electriques" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
