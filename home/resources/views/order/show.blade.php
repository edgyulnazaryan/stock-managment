@extends('layouts.app')
@section('content')

<div class="container">
<div class="mb-3"></div>
<div class="row" >
    <div class="col-4"></div>
    <div class="col-4">
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header" style="text-align:center">{{$data->resource->name}}</div>
        <img class="card-img-top" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANIAAADwCAMAAABCI8pNAAAAA1BMVEX///+nxBvIAAAASElEQVR4nO3BMQEAAADCoPVPbQlPoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA+BsXQAAGTzplwAAAAAElFTkSuQmCC">
        <div class="card-body">
            <h5 class="card-title">Manager: {{$data->manager->first_name}}</h5>
            <p class="card-title">Supplier: {{$data->supplier->company_name}}</p>
            <p class="card-text"><strong>Quantity: </strong>{{$data->product_qty}}</p>
            <p class="card-text"><strong>Status: </strong>{{$data->status}}</p>
        </div>
        <a href="{{ route('order_approve', $data->id) }}" class="btn btn-success" style="border-radius:30px; width:40px;margin:0 auto"><i class="fa fa-check" aria-hidden="true"></i></a>
    </div>
    </div>
    <div class="col-4"></div>
</div>
</div>
@endsection
