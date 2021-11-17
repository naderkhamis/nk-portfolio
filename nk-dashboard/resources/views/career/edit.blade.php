@extends('layouts.app')
@section('content')
    @if ($career)
        <form action="{{ route('updateCareer', $career->id) }}" method="post">
            <input type="hidden" name="id" id="id" value="{{ $career->id }}">
            <label for="title">Job Title</label>
            <input type="text" name="title" id="title" value="{{ $career->title }}">
            <label for="">Company</label>
            <input type="text" name="company" id="company" value="{{ $career->company }}">
            <label for="from">From Date</label>
            <input type="date" name="from" id="from" value="{{ $career->from_date }}">
            <label for="to">To Date</label>
            <input type="date" name="to" id="to" value="{{ $career->to_date }}">
            <label for="description">Job Description</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ $career->description }}</textarea>
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <button type="submit">Update</button>
        </form>
    @endif
@endsection
