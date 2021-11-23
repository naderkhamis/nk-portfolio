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
                    </div>
                    <div class="d-block px-3 pb-3">
                        <strong class="badge badge-pill badge-warning font-italic">
                            From: {{ $career->from_date }} -
                            @if ($career->status === 0)
                                To: {{ $career->to_date }}
                            @else
                                Till now
                            @endif
                        </strong>
                    </div>
                    <div class="card-footer bg-transparent border-warning">
                        <a href="{{ route('editCareer', $career->id) }}" class="btn btn-success rounded-pill">Edit</a>
                        <button type="button" class="btn btn-danger rounded-pill" data-toggle="modal"
                            data-target="#exampleModal">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
            {{-- Confirmation-Modal --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark border-warning">
                        <div class="modal-header bg-warning border-warning">
                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-white">
                            Are you sure?
                        </div>
                        <div class="modal-footer border-warning d-flex justify-content-center">
                            <a href="{{ route('deleteCareer', $career->id) }}"
                                class="btn btn-danger rounded-pill">Delete</a>
                            <button type="button" class="btn btn-success rounded-pill" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /Confirmation-Modal --}}
        </div>
        <a href="{{ route('careerIndex') }}" class="btn btn-warning rounded-pill btn-block">Go Back</a>
    @endif
@endsection
