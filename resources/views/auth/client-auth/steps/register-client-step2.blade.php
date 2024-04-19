@extends('layouts.home')

@section('content')

<div class="container" style="color: white;display: flex;flex-direction: column; align-items:center;justify-items: center;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="align-items: center;justify-content: center;justify-items:center;display: flex;flex-direction: column">
                <div class="card-header">{{ __('Client Register Step2') }}</div>

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
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date naissance') }}</label>
                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Genre (M/F)') }}</label>
                            <div class="col-md-6">
                                <select id="gender" class="form-control" name="gender" required>
                                    <option value="">Select...</option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
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
