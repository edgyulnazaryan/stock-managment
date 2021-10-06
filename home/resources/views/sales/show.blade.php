@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('sales_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
{{-- <a href="{{ route('sales_upload_blade') }}" class="btn float-left"><i class="fa fa-upload" aria-hidden="true"></i></a> --}}
{{-- <a href="{{ route('download_resource') }}" class="btn float-left"><i class="fa fa-download" aria-hidden="true"></i></a> --}}
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
        <tr>
            <td>{{$data->product[0]->title}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->manager[0]->first_name." ".$data->manager[0]->last_name}}</td>
            <td>{{$data->customer[0]->first_name." ".$data->customer[0]->last_name}}</td>
            <td>
                <a href="{{ route('sales_edit', $data->id) }}" class="btn disabled"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('sales_remove', $data->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
    </tbody>
</table>
</div>
@endsection
