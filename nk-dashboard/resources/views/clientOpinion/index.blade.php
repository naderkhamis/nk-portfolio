<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if (count($clientOpinion))
        <div class="row p-2">
            @foreach ($clientOpinion as $client)
                <div class="col-md-6 col-xl-4 p-2">
                    <div class="card bg-transparent border-warning">
                        <div class="card-header bg-warning h6">
                            {{ $client->id }}. {{ $client->company }}
                        </div>
                        <div class="card-body text-white">
                            <div class="media">
                                <div class="d-flex align-content-center mr-3 p-1">
                                    <img src="{{ asset($client->image) }}" class="img-fluid" alt="Cleint Picture">
                                </div>
                                <h5 class="card-title align-self-center m-0">{{ $client->name }}</h5>
                            </div>
                            <p class="card-text mt-2">{{ $client->opinion }}</p>
                        </div>
                        <div class="d-block px-3 pb-3">
                            <strong class="badge badge-warning p-2 font-italic">
                                {{ Carbon::createFromFormat('Y-m-d H:i:s', $client->date)->format('d M Y') }}
                            </strong>
                        </div>
                        <div class="card-footer border-warning">
                            <a href="{{ route('editOpinion', $client->id) }}" class="btn btn-success">Edit <i
                                    class="ri-edit-box-line"></i></a>
                            <a type="button" class="btn btn-danger m-0" data-toggle="modal" data-target="#exampleModal">
                                Delete <i class="ri-delete-bin-4-line"></i>
                            </a>
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
                                <a href="{{ route('deleteOpinion', $client->id) }}" class="btn btn-danger m-0">Delete <i
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
            <strong>Sorry! </strong>There is no available Clients Feedback.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div>
        <a href="{{ route('createOpinion') }}" class="btn btn-warning">New Opinion <i class="ri-add-circle-line"></i></a>
    </div>
@endsection
