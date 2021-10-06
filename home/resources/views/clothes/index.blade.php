@extends('layouts.app')
@section('content')
<div class="container">

<a href="{{ route('clothes_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Employer</th>
            <th>Color</th>
            <th>Image</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>

        @foreach($data as $value)
        <tr>
            <td>{{$value->title}}</td>
            <td>{{$value->size}}</td>
            <td>{{$value->quantity}}</td>
            <td>{{$value->employer->first_name}}</td>
            <td>{{$value->color}}</td>

            <td><img src="/storage/clothes/{{$value->image}}" style="width: 60px;"></td>
            <td>
                <a href="{{ route('clothes_item', $value->id) }}" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{ route('clothes_edit', $value->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('clothes_remove', $value->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
