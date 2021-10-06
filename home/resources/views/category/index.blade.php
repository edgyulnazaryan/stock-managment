@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('category_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $value)
        <tr>
            <td>{{$value->name}}</td>
            <td>{{$value->description}}</td>
            <td>
                <a href="{{ route('category_item', $value->id) }}" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{ route('category_edit', $value->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('category_remove', $value->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
