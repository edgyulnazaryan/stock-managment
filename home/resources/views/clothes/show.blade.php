@extends('layouts.app')
@section('content')
<div class="container">

<a href="{{ route('clothes_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>



    <div class="mb-3"></div>
    <div class="row" >
        <div class="col-4"></div>
        <div class="col-4">
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header" style="text-align:center">{{$data->employer->first_name." ".$data->employer->last_name}}</div>
            <img class="card-img-top" src="/storage/clothes/{{$data->image}}">
            <div class="card-body">
                <h5 class="card-title">Title: {{$data->title}}</h5>
                <p class="card-title">Size: {{$data->size}} </p>
                <p class="card-title">Color: {{$data->color}}</p>
                <p class="card-title">Quantity: {{$data->quantity}}</p>

            </div>
        </div>
        </div>
        <div class="col-4"></div>
    </div>

</div>
@endsection
