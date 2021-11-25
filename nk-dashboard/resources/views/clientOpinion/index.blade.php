<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if (count($career))
        <div class="row p-2">
            @foreach ($career as $career)
                <div class="col-md-6 col-xl-4 p-2">
                    <div class="card bg-transparent border-warning">
                        <div class="card-header bg-warning h6">
                            {{ $career->id }}. {{ $career->title }}
                        </div>
                        <div class="card-body text-white">
                            <h5 class="card-title">{{ $career->company }}</h5>
                            <p class="card-text">{{ $career->description }}</p>
                        </div>
                        <div class="d-block px-3 pb-3">
                            <strong class="badge badge-warning p-2 font-italic">
                                From: {{ Carbon::createFromFormat('Y-m-d H:i:s', $career->from_date)->format('d M Y') }} -
                                @if ($career->status === 0)
                                    To: {{ Carbon::createFromFormat('Y-m-d H:i:s', $career->to_date)->format('d M Y') }}
                                @else
                                    Till now
                                @endif
                            </strong>
                        </div>
                        <div class="card-footer border-warning">
                            <a href="{{ route('showCareer', $career->id) }}" class="btn btn-primary">Show <i
                                    class="ri-eye-2-line"></i></a>
                            <a href="{{ route('editCareer', $career->id) }}" class="btn btn-success">Edit <i
                                    class="ri-edit-box-line"></i></a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Delete <i class="ri-delete-bin-4-line"></i>
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
                                <a href="{{ route('deleteCareer', $career->id) }}" class="btn btn-danger">Delete <i
                                        class="ri-delete-bin-4-line"></i></a>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close <i
                                        class="ri-close-circle-line"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /Confirmation-Modal --}}
            @endforeach
        </div>
    @else
        <div class="alert alert-warning rounded-pill alert-dismissible fade show col-md-6" role="alert">
            <strong>Sorry! </strong>There is no available career path.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="">
        <a href="{{ route('createCareer') }}" class="btn btn-warning">New Position <i class="ri-add-circle-line"></i></a>
    </div>
@endsection
