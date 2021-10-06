@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('customer_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
<table class="table">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Phone number</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$data->first_name}}</td>
            <td>{{$data->last_name}}</td>
            <td>{{$data->phone_number}}</td>
            <td>
                <a href="{{ route('customer_edit', $data->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('customer_remove', $data->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
    </tbody>
</table>
</div>
@endsection
