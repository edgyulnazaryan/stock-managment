@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('sales_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Manager</th>
            <th>Customer</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>

        @foreach($data as $value)
        <tr>
            <td>{{$value->product[0]->title}}</td>
            <td>{{$value->quantity}}</td>
            <td>{{$value->price}}</td>
            <td>{{$value->manager[0]->first_name." ".$value->manager[0]->last_name}}</td>
            <td>{{$value->customer[0]->first_name." ".$value->customer[0]->last_name}}</td>
            <td>
                <a href="{{ route('sales_item', $value->id) }}" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{ route('sales_edit', $value->id) }}" class="btn disabled"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('sales_remove', $value->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
