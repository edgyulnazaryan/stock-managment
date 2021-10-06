@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('report_store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="manager_name" class="col-md-4 col-form-label text-md-right">{{ __('Manager name') }}</label>
                            <div class="col-md-6">
                            <select name="manager_id" class="form-control">
                                @foreach($manager as $val)
                                    <option value="{{$val->id}}">{{$val->first_name ." ". $val->last_name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="clothes_title" class="col-md-4 col-form-label text-md-right">{{ __('Clothe title') }}</label>
                            <div class="col-md-6">
                            <select name="clothes_id" class="form-control">
                                @foreach($clothes as $val)
                                    <option value="{{$val->id}}">{{$val->title}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>
                            <div class="col-md-6">
                            <input type="text" name="total" class="form-control">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Count total') }}
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
