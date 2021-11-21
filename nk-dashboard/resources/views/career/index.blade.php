@extends('layouts.app')
@section('content')
    @if (count($career))
        <div class="row mb-2">
            @foreach ($career as $career)
                <div class="col-md-3 p-2">
                    <div class="card bg-transparent border-warning">
                        <div class="card-header bg-warning h6">
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
                        <div class="card-footer bg-transparent border-warning d-flex justify-content-between">
                            <a href="{{ route('showCareer', $career->id) }}"
                                class="btn btn-outline-primary rounded-pill">Show</a>
                            <a href="{{ route('editCareer', $career->id) }}"
                                class="btn btn-outline-success rounded-pill">Edit</a>
                            <button type="button" class="btn btn-outline-danger rounded-pill" data-toggle="modal"
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
                            </div>
                            <div class="modal-body text-white">
                                Are you sure?
                            </div>
                            <div class="modal-footer border-warning d-flex justify-content-center">
                                <a href="{{ route('deleteCareer', $career->id) }}"
                                    class="btn btn-outline-success rounded-pill">Delete</a>
                                <button type="button" class="btn btn-outline-danger rounded-pill"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /Confirmation-Modal --}}
            @endforeach
        </div>
    @else
        <div class="alert alert-warning rounded-pill alert-dismissible fade show" role="alert">
            <strong>Sorry! </strong>There is no available career path.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div>
        <a href="{{ route('createCareer') }}" class="btn btn-outline-warning rounded-pill">Create New Position</a>
    </div>
@endsection
