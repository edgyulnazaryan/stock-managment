@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('resources_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
<a href="{{ route('resources_upload_blade') }}" class="btn float-left"><i class="fa fa-upload" aria-hidden="true"></i></a>
<a href="{{ route('download_resource') }}" class="btn float-left"><i class="fa fa-download" aria-hidden="true"></i></a>
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

        @foreach($data as $value)
        <tr>
            <td>{{$value->name}}</td>
            <td>{{$value->description}}</td>
            <td>{{$value->qty_stock}}</td>
            <td>{{$value->category->name}}</td>
            <td>{{$value->price}}</td>
            <td>
                <a href="{{ route('resources_item', $value->id) }}" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{ route('resources_edit', $value->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('resources_remove', $value->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
