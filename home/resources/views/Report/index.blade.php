@extends('layouts.app')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <div class="container mt-3">
        <div class="form-group row">
            <label for="manager_name" class="col-md-4 col-form-label text-md-right">{{ __('Manager name') }}</label>
            <div class="col-md-6">
                <select name="manager_id" class="form-control" id="myselection">
                    @foreach($manager as $val)
                        <option value="{{$val->id}}" data={{$val->id}}>{{$val->id .": ".$val->first_name ." ". $val->last_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="clothes_title" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>
            <div class="col-md-6">
                <input type="text" name="total" class="form-control" disabled id="total">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-warning count_total_btn col-5">
                    <i class="fa fa-calculator"> Calculate amount</i>
                </button>


                <button class="btn btn-info float-right information_manager_sale col-5">
                    <i class="fa fa-file"> Show sales list</i>
                </button>
                <a href="{{ route('download_pdf', ['id' => 0]) }}" class="btn btn-md btn-dark float-right pdf_download mr-3 mt-3"><i class="fa fa-download"></i> PDF</a>
<!--                <a href="{{ route('pdf') }}" class="btn btn-success float-right pdf_generate mt-3">Generate PDF</a>-->
            </div>
        </div>



        <div class="main mt-5">
            <table class="table">
                <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Manager</th>
                    <th>Customer</th>
                    <th>Balance</th>
                </tr>
                </thead>
                <tbody class="tbody_info">

                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function()
        {
            $(".count_total_btn").click(function()
            {
                var id = $("#myselection option:selected").attr('data');
                $.ajax({
                    type: "POST",
                    url: 'report/ajax/',
                    data: {"_token": $('meta[name="csrf-token"]').attr('content'), id: id},
                    success: function (data)
                    {
                        var balance = 0
                        if(data.length != 0 )
                        {
                            for(var i=0; i<data.length; i++)
                            {
                                balance += data[i].quantity*data[i].price
                                $("#total").val(balance+' AMD')
                            }
                        }
                        else
                            $("#total").val(balance+' AMD')
                    }
                });
            })

            $(".information_manager_sale").click(function()
            {
                var id = $("#myselection option:selected").attr('data');
                $.ajax(
                    {
                        type: "POST",
                        url: 'report/ajax/',
                        data: {"_token": $('meta[name="csrf-token"]').attr('content'), id: id},
                        success: function (data)
                        {
                            if(data.length != 0 )
                            {
                                var balance = 0
                                for(var i=0; i<data.length; i++)
                                {
                                    balance = data[i].quantity*data[i].price
                                    $(".tbody_info").append("<tr><td>"+data[i].product[0].title+"</td><td>"+data[i].quantity+"</td><td>"+data[i].price+"</td><td>"+data[i].manager[0].first_name+" "+data[i].manager[0].last_name+"</td><td>"+data[i].customer[0].first_name+" "+data[i].customer[0].last_name+"</td><td>"+balance+"</td></tr>")
                                }
                            }
                        }
                    });
                $(".tbody_info").empty()
            })

            $(".pdf_generate").click(function()
            {
                var id = $("#myselection option:selected").attr('data');
                $.ajax(
                    {
                        type: "POST",
                        url: 'report/ajax/pdf/',
                        data: {"_token": $('meta[name="csrf-token"]').attr('content'), id: id},
                        success: function (data)
                        {

                        }
                    });
            })

            $(".pdf_download").click(function(e)
            {
                var id = $("#myselection option:selected").attr('data');
                e.preventDefault();
                var href = $(this).attr('href').replace('report/ajax/pdf/download/0', 'report/ajax/pdf/download/'+id)
                console.log(href)
                window.location.href = href
            })

        })
    </script>
@endsection
