@extends('layouts.app')
@section('content')
    @if ($career)
        <div class="row">
            <div class="col mb-3">
                <div class="card bg-transparent border-warning">
                    <div class="card-header bg-warning h5">
                        {{ $career->id }}- {{ $career->title }}
                    </div>
                    <div class="card-body text-white">
                        <h5 class="card-title">{{ $career->company }}</h5>
                        <p class="card-text">{{ $career->description }}</p>
                        <p class="card-text">
                            <em>
                                <small class="text-muted">From: {{ $career->from_date }}</small>
                                @if ($career->status === 0)
                                    <small class="text-muted">To: {{ $career->to_date }}</small>
                                @else
                                    <small class="text-muted">Till now</small>
                                @endif
                            </em>
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-warning">
                        <a href="{{ route('editCareer', $career->id) }}"
                            class="btn btn-outline-success rounded-pill">Edit</a>
                        <a href="{{ route('deleteCareer', $career->id) }}"
                            class="btn btn-outline-danger rounded-pill">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('careerIndex') }}" class="btn btn-outline-warning rounded-pill">Go Back</a>
    @endif
@endsection
