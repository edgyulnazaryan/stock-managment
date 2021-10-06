@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('manager_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
<table class="table">
    <thead>
        <tr>
            <th>Manager name</th>
            <th>Manager surname</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$data->first_name}}</td>
            <td>{{$data->last_name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone_number}}</td>
            <td>{{$data->location->province .' '.$data->location->city .' '.$data->location->street}}</td>
            <td>
                <a href="{{ route('manager_edit', $data->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('manager_remove', $data->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
    </tbody>
</table>
</div>
@endsection
