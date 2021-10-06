@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create resources') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('clothes_update', $data->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="{{ $data->title }}" required autocomplete="name" autofocus>

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
                                    <option value="XS" {{$data->size == 'XS' ? 'selected' : '' }} >XS</option>
                                    <option value="S" {{$data->size == 'S' ? 'selected' : '' }} >S</option>
                                    <option value="M" {{$data->size == 'M' ? 'selected' : '' }} >M</option>
                                    <option value="L" {{$data->size == 'L' ? 'selected' : '' }} >L</option>
                                    <option value="XL" {{$data->size == 'XL' ? 'selected' : '' }} >XL</option>
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
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="quantity" value="{{ $data->quantity }}" required autocomplete="description" autofocus>
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
                                    <input id="qty_stock" type="number" class="form-control @error('qty_stock') is-invalid @enderror" name="color" value="{{ $data->color }}" required autocomplete="qty_stock" autofocus>
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
                                    <img src="/storage/clothes/{{$data->image}}" style="width: 150px;">
                                    <input id="image" type="hidden" class="form-control @error('price') is-invalid @enderror" name="image_old" value="{{ $data->image }}">
                                    <input id="image" type="file" class="form-control @error('price') is-invalid @enderror" name="image_new" >

                                </div>
                        </div>


                        <div class="form-group row">
                            <label for="employer_id" class="col-md-4 col-form-label text-md-right">{{ __('Employer') }}</label>
                                <div class="col-md-6">
                                    <select name="employer_id" class="form-control">
                                        @foreach($employer as $val)
                                            <option value="{{ $val->id }}" {{$data->employer_id == $val->id ? 'selected' : ''}}> {{ $val->first_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit clothes') }}
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






