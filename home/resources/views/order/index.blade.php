@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('order_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>

{{-- @dd($data[0]->manager->first_name) --}}
<table class="table">
    <thead>
        <tr>
            <th>Supplier name</th>
            <th>Manager name</th>
            <th>Product name</th>
            <th>Product quantity</th>
            <th>Status</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>

        @foreach($data as $value)
        <tr  class="{{ $value->status == 'Confirmed' ? 'bg-success text-white' : ($value->status == 'Approved' ? 'bg-danger text-white' : '' ) }}">
            <td>{{$value->supplier->company_name}}</td>
            <td>{{$value->manager->first_name}}</td>
            <td>{{$value->resource->name}}</td>
            <td>{{$value->product_qty}}</td>
            <td>{{$value->status}}</td>
            @if($value->status != 'Confirmed')
            <td>
                <a href="{{ route('order_item', $value->id) }}" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{ route('order_edit', $value->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('order_remove', $value->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
                <a href="{{ route('order_approve', $value->id) }}" class="btn" style="border-radius:30px; width:40px;margin:0 auto"><i class="fa fa-check" aria-hidden="true"></i></a>
            </td>
            @else
            <td>
                <a  href="{{ route('order_item', $value->id) }}" class="btn disabled"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a  href="{{ route('order_edit', $value->id) }}" class="btn disabled"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a  href="{{ route('order_remove', $value->id) }}" class="btn disabled"><i class="fa fa-trash" aria-hidden="true"></i></a>
                <a  href="{{ route('order_approve', $value->id) }}" class="btn disabled" style="border-radius:30px; width:40px;margin:0 auto"><i class="fa fa-check" aria-hidden="true"></i></a>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
