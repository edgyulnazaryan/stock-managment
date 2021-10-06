@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SALES UPDATE') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sales_update', $data->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="=category_id" class="col-md-4 col-form-label text-md-right">{{ __('Sales') }}</label>
                                <div class="col-md-6">
                                    <select name="product_id" class="form-control" id="myselection">
                                        @foreach($product as $val)
                                            <option  value="{{ $val->id }}" {{ $data->product_id == $val->id ? 'selected' : ''}} data="{{$val->id}}" >{{ $val->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=qty_stock" class="col-md-4 col-form-label text-md-right" id="quantity_stock">{{ __('Quantity in stock') }}</label>
                                <div class="col-md-6">
                                    <input id="product_qty" min=0 max=0 type="number" class="form-control @error('qty_stock') is-invalid @enderror" name="quantity" value="{{ $data->quantity }}" required autocomplete="qty_stock" autofocus>
                                    @error('qty_stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $data->price }}" required autocomplete="price" autofocus>
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=category_id" class="col-md-4 col-form-label text-md-right">{{ __('Manager') }}</label>
                                <div class="col-md-6">
                                    <select name="manager_id" class="form-control">
                                        @foreach($manager as $val)
                                            <option value="{{ $val->id }}" {{$data->id == $val->id ? 'selected' : ''}}>{{ $val->first_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=customer_id" class="col-md-4 col-form-label text-md-right">{{ __('Customer') }}</label>
                                <div class="col-md-6">
                                    <select name="customer_id" class="form-control">
                                        @foreach($customer as $val)
                                            <option value="{{ $val->id }}" {{$data->id == $val->id ? 'selected' : ''}}>{{ $val->first_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update sale') }}
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

        var id = $("#myselection option:selected").attr('data');
        $.ajax({
                type: "POST",
                url: 'ajax/',
                data: {"_token": $('meta[name="csrf-token"]').attr('content'), id: id},
                success: function (data)
                {
                    $("#product_qty").attr('max', JSON.parse(data))
                    $("#quantity_stock").html("Quantity in stock: <strong>"+data+"</strong> ")
                }
            });

        $('#myselection').change(function()
        {
            $("#product_qty").attr('placeholder', "")
            var id = $("#myselection option:selected").attr('data');

            $.ajax({
                type: "POST",
                url: 'ajax/',
                data: {"_token": $('meta[name="csrf-token"]').attr('content'), id: id},
                success: function (data)
                {
                    $("#product_qty").attr('max', JSON.parse(data))
                    $("#quantity_stock").html("Quantity in stock: <strong id='data_value_option'>"+data+"</strong> ")

                }
            });
        })
        $("#product_qty").change(function()
        {
            var current_value = $("#product_qty").val()
            var data = $("#product_qty").attr('max')

            if(Math.round(current_value) > data)
                $("#product_qty").css('border', '2px solid red')
            else
                $("#product_qty").css('border', '2px solid green')
        })
    })
    </script>
@endsection






