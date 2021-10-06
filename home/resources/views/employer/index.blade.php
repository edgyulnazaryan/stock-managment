@extends('layouts.app')
@section('content')
<div class="container">
<a href="{{ route('employer_create') }}" class="btn float-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
<table class="table">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Location</th>
            <th>Job</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>

        @foreach($data as $value)
        <tr>
            <td>{{$value->first_name}}</td>
            <td>{{$value->last_name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->phone_number}}</td>
            <td>{{$value->location->province.' '.$value->location->city.' '.$value->location->street}}</td>
            <td>{{$value->job->job_title}}</td>
            <td>
                <a href="{{ route('employer_item', $value->id) }}" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{ route('employer_edit', $value->id) }}" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a href="{{ route('employer_remove', $value->id) }}" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
