@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SALES') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sales_store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="=category_id" class="col-md-4 col-form-label text-md-right">{{ __('Sales') }}</label>
                                <div class="col-md-6">
                                    <select name="product_id" class="form-control" id="myselection">
                                        @foreach($product as $val)
                                            <option value="{{ $val->id }}" data="{{$val->id}}">{{ $val->title .' '. $val->color}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=d" class="col-md-4 col-form-label text-md-right" id="quantity_stock">{{ __('Quantity in stock') }}</label>
                                <div class="col-md-6">
                                    <input id="product_qty" type="number" max=0 min=0 class="form-control @error('product_qty') is-invalid @enderror" name="quantity" required autocomplete="product_qty" autofocus>
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
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
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
                                            <option value="{{ $val->id }}">{{ $val->first_name .' '. $val->last_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="=category_id" class="col-md-4 col-form-label text-md-right">{{ __('Customer') }}</label>
                                <div class="col-md-6">
                                    <select name="customer_id" class="form-control">
                                        @foreach($customer as $val)
                                            <option value="{{ $val->id }}">{{ $val->first_name .' '. $val->last_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create sale') }}
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

        var id = $("#myselection option:selected").attr('data');
        $.ajax({
                type: "POST",
                url: 'create/ajax/',
                data: {"_token": $('meta[name="csrf-token"]').attr('content'), id: id},
                success: function (data)
                {
                    console.log(JSON.parse(data))
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
                url: 'create/ajax/',
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
            var id = $("#myselection option:selected").attr('data');
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






