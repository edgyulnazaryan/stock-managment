@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create supplier') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('supplier_store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company name') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" required autocomplete="company_name" autofocus>

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="=phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>
                                <div class="col-md-6">
                                    <input id="phone_number" type="phone" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" required autocomplete="phone_number" autofocus>
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=location_id" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                                <div class="col-md-6">
                                    <select name="location_id" class="form-control">
                                        @foreach($location as $val)
                                            <option value="{{ $val->id }}">{{ $val->province . ' ' . $val->city .' '. $val->street }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Create supplier') }}
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






