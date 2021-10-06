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
        @foreach($data as $value)
        <tr>
            <td>{{$value->province}}</td>
            <td>{{$value->city}}</td>
            <td>{{$value->street}}</td>
            <td>
                <a href="{{ route('location_item', $value->id) }}" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{ route('location_edit', $value->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('location_remove', $value->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
