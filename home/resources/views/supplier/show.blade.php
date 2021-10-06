@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('supplier_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
<table class="table">
    <thead>
        <tr>
            <th>Company name</th>
            <th>Location</th>
            <th>Phone number</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$data->company_name}}</td>
            <td>{{$data->location->province.' '.$data->location->city.' '.$data->location->street}}</td>
            <td>{{$data->phone_number}}</td>
            <td>
                <a href="{{ route('supplier_edit', $data->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('supplier_remove', $data->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
    </tbody>
</table>
</div>
@endsection
