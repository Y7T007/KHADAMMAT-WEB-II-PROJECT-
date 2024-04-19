@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Client Register - Step 2') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('client.register.step2') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                                <div class="col-md-6">
                                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" required>

                                    @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Add fields for address, GSM, Date_naissance, and Genre here -->
                            <div class="form-group
                            row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group
                            row">
                                <label for="gsm" class="col-md-4 col-form-label text-md-right">{{ __('GSM') }}</label>
                                <div class="col-md-6">
                                    <input id="gsm" type="text" class="form-control @error('gsm') is-invalid @enderror" name="gsm" required>
                                    @error('gsm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group
                            row">
                                <label for="date_naissance" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>
                                <div class="col-md-6">
                                    <input id="date_naissance" type="date" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance" required>
                                    @error('date_naissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group
                            row">
                                <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('Genre') }}</label>
                                <div class="col-md-6">
                                    <select id="genre" class="form-control @error('genre') is-invalid @enderror" name="genre" required>
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                                    @error('genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- End of fields for address, GSM, Date_naissance, and Genre -->


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
