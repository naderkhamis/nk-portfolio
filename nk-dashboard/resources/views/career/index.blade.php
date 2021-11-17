@extends('layouts.app')
@section('content')
    <table>
        <thead>
            <tr>
                <th>id.</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Job Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($career)
                @foreach ($career as $career)
                    <tr>
                        <td>{{ $career->id }}</td>
                        <td>{{ $career->title }}</td>
                        <td>{{ $career->company }}</td>
                        <td>{{ $career->from_date }}</td>
                        <td>{{ $career->to_date }}</td>
                        <td>{{ $career->description }}</td>
                        <td>
                            <a href="{{ route('showCareer', $career->id) }}">Show</a>
                            <a href="{{ route('editCareer', $career->id) }}">Edit</a>
                            <a href="{{ route('deleteCareer', $career->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <a href="{{ route('createCareer') }}">Create New Position</a>
@endsection
