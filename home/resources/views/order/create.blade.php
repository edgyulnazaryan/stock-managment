@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create order') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('order_store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company name') }}</label>
                            <div class="col-md-6">
                            <select name="supplier_id" class="form-control">
                                @foreach($supplier as $val)
                                    <option value="{{$val->company_name}}">{{$val->company_name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="=manager_id" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                                <div class="col-md-6">
                                    <select name="manager_id" class="form-control">
                                        @foreach($manager as $val)
                                            <option value="{{ $val->first_name.' '. $val->last_name }}">{{ $val->first_name . ' ' . $val->last_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=product" class="col-md-4 col-form-label text-md-right">{{ __('Product name') }}</label>
                                <div class="col-md-6">
                                    <select name="product_name" class="form-control" id="myselection">
                                        @foreach($product as $val)
                                            <option value="{{ $val->name }}" data="{{$val->id}}">{{ $val->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=product_qty" class="col-md-4 col-form-label text-md-right">{{ __('Product quantity') }}</label>
                                <div class="col-md-6">
                                    <input id="product_qty" type="number" max=0 min=0 placeholder="Maximum quantity " class="form-control @error('product_qty') is-invalid @enderror" name="product_qty" required autocomplete="product_qty" autofocus>
                                    @error('product_qty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                                <div class="col-md-6">
                                    <select name="status" class="form-control">
                                            <option value="Pending">Pending</option>
                                            <option value="Approved" disabled>Approved</option>
                                            <option value="Completed" disabled>Completed</option>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Create order') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function()
{
    $("#myselection option").first().attr('selected', 'selected');
    var data = $("#myselection option:selected").attr('data');
    $("#product_qty").attr('max', data)
    $("#product_qty").attr('placeholder', "Maximum quantity: "+data)

    $('#myselection').change(function()
    {
        var id = $("#myselection option:selected").attr('data');

        $.ajax({
            type: "POST",
            url: 'create/ajax/',
            data: {"_token": $('meta[name="csrf-token"]').attr('content'), id: id},
            success: function (data)
            {
                $("#product_qty").attr('max', data)
                $("#product_qty").attr('placeholder', "Maximum quantity: "+data)
            }
        });
    })
    $("#product_qty").change(function()
    {
        var current_value = $(this).val()
        var data = $("#product_qty").attr('max')
        if(current_value > data)
            $(this).css('border', '2px solid red')
        else
            $(this).css('border', '2px solid green')


    })
})
</script>
@endsection
