@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('location_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
<table class="table">
    <thead>
        <tr>
            <th>Province</th>
            <th>City</th>
            <th>Street</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$data->province}}</td>
            <td>{{$data->city}}</td>
            <td>{{$data->street}}</td>
            <td>
                <a href="{{ route('location_edit', $data->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('location_remove', $data->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
    </tbody>
</table>
</div>
@endsection
