<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if ($clientOpinion)
        <h3 class="text-white">Edit Client Opinion</h3>
        <form action="{{ route('updateOpinion', $clientOpinion->id) }}" method="post" class="text-white"
            enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="{{ $clientOpinion->id }}">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Client Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                            placeholder="Enter client's name" value="{{ $clientOpinion->name }}">
                        @error('name')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" class="form-control @error('company') is-invalid @enderror" name="company"
                            id="company" placeholder="Enter company's or project's name"
                            value="{{ $clientOpinion->company }}">
                        @error('company')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control @error('from') is-invalid @enderror" name="date" id="date"
                            value="{{ Carbon::createFromFormat('Y-m-d H:i:s', $clientOpinion->date)->format('Y-m-d') }}">
                        @error('date')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Client Image</label>
                        <div class="media">
                            <div class="d-flex align-content-center mr-3 p-1">
                                <img src="{{ asset($clientOpinion->image) }}" class="img-fluid" alt="Cleint Picture">
                            </div>
                            <input type="file"
                                class="form-control-file align-self-center m-0 @error('image') is-invalid @enderror"
                                name="image" id="image" placeholder="Please select customer's image"
                                value="{{ $clientOpinion->image }}">
                            @error('image')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="opinion">Client's Opinion</label>
                        <textarea class="form-control @error('opinion') is-invalid @enderror" name="opinion" id="opinion"
                            cols="30" rows="8"
                            placeholder="Enter customer's feedback">{{ $clientOpinion->opinion }}</textarea>
                        @error('opinion')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            {{-- Confirmation-Modal --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark border-warning">
                        <div class="modal-header bg-warning border-warning">
                            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                        </div>
                        <div class="modal-body text-white">
                            Are you sure?
                        </div>
                        <div class="modal-footer border-warning d-flex justify-content-center">
                            <div>
                                <button type="submit" class="btn btn-success">
                                    Update
                                    <i class="ri-refresh-line"></i>
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    Close
                                    <i class="ri-close-circle-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /Confirmation-Modal --}}
            <div class="col-md-2 p-0">
                <button type="button" class="btn btn-block btn-warning" data-toggle="modal"
                    data-target="#exampleModal">Update
                    <i class="ri-refresh-line"></i></button>
            </div>
        </form>
        <div class="col-md-2 p-0">
            <a href="{{ route('opinionIndex') }}" class="btn btn-block btn-warning mt-3">
                Go Back
                <i class="ri-arrow-go-back-fill"></i>
            </a>
        </div>
    @endif
@endsection
