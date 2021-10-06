@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('resources_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Quantity in stock</th>
            <th>Price</th>
            <th>Category</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->qty_stock}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->category->name}}</td>
            <td>
                <a href="{{ route('resources_edit', $data->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('resources_remove', $data->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
    </tbody>
</table>
</div>
@endsection
