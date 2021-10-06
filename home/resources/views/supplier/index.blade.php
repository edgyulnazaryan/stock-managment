@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('supplier_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
<table class="table">
    <thead>
        <tr>
            <th>Company name</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $value)
        <tr>
            <td>{{$value->company_name}}</td>
            <td>{{$value->phone_number}}</td>
            <td>{{$value->location->province.' '}}</td>
            <td>
                <a href="{{ route('supplier_item', $value->id) }}" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{ route('supplier_edit', $value->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('supplier_remove', $value->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
