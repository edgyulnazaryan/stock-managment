@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create resources') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('clothes_store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Size') }}</label>

                            <div class="col-md-6">
                                <select name="size" class="form-control">
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="=description" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="quantity" value="{{ old('description') }}" required autocomplete="description" autofocus>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=qty_stock" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>
                                <div class="col-md-6">
                                    <input id="qty_stock" type="text" class="form-control @error('qty_stock') is-invalid @enderror" name="color" value="{{ old('qty_stock') }}" required autocomplete="qty_stock" autofocus>
                                    @error('qty_stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=price" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                                <div class="col-md-6">
                                    <input id="price" type="file" class="form-control @error('price') is-invalid @enderror" name="image" value="{{ old('price') }}" required autocomplete="price" autofocus>
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=category_id" class="col-md-4 col-form-label text-md-right">{{ __('Employer') }}</label>
                                <div class="col-md-6">
                                    <select name="employer_id" class="form-control">
                                        @foreach($employer as $val)
                                            <option value="{{ $val->id }}">{{ $val->first_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create clothe') }}
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






