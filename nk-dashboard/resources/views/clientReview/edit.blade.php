<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2">
            <h1>Edit Review</h1>
        </div>
        <!-- /Header -->
        @if ($clientReview)
            <!-- Review-Form -->
            <div class="col-md-6 col-xl-5 order-1 order-xl-0">
                <!-- /Edit-Information-Form -->
                <div class="card card-warning card-outline card-body bg-dark pt-1">
                    <!-- Form-Header -->
                    <div class="card-header text-warning px-0 border-0">
                        <h3 class="card-title">Edit Review</h3>
                    </div>
                    <!-- /Form-Header -->
                    <form action="{{ route('update-review', $clientReview->id) }}" method="post" class="form-row"
                        enctype="multipart/form-data">
                        <!-- TOKEN -->
                        @csrf
                        <!-- /TOKEN -->
                        <!-- Hidden-Id -->
                        <input type="hidden" name="id" id="id" value="{{ $clientReview->id }}">
                        <!-- /Hidden-Id -->
                        <!-- Client-Name -->
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="Please enter client's name" value="{{ $clientReview->name }}">
                            @error('name')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Client-Name -->
                        <!-- Client-Image -->
                        <div class="form-group col-md-6">
                            <label for="image" class="control-label">Photo</label>
                            <input type="file"
                                class="form-control-file align-self-center m-0 @error('image') is-invalid @enderror"
                                name="image" id="image">
                            @error('image')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Client-Image -->
                        <!-- Company-Name -->
                        <div class="form-group col-md-6">
                            <label for="company">Company</label>
                            <input type="text" class="form-control @error('company') is-invalid @enderror" name="company"
                                id="company" placeholder="Please enter company's name"
                                value="{{ $clientReview->company }}">
                            @error('company')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Company-Name -->
                        <!-- Review-Date -->
                        <div class="form-group col-md-6">
                            <label for="date">Date</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                                id="date" value="{{ Carbon::parse($clientReview->date)->format('d M Y') }}">
                            @error('date')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Review-Date -->
                        <!-- Review -->
                        <div class="form-group col-12">
                            <label for="review">Review</label>
                            <textarea class="form-control @error('review') is-invalid @enderror" name="review" id="review" cols="30"
                                rows="9" placeholder="Type about yourself">{{ $clientReview->review }}</textarea>
                            @error('review')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Review -->
                        <!-- Form-Submit-Button -->
                        <div class="col-lg-4 order-2">
                            <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                                Update
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                        <!-- /Form-Submit-Button -->
                    </form>
                </div>
            </div>
            <!-- /Review-Form -->
            <!-- Client-Company-Existing-Image -->
            <div class="col-md-6 col-xl-4 order-0 order-xl-1 pb-3">
                <img src="{{ asset($clientReview->image) }}" class="img-fluid border border-warning rounded"
                    alt="Client-Company Image">
            </div>
            <!-- /Client-Company-Existing-Image -->
        @else
            <!-- Review-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as review to edit!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Review-Alert -->
        @endif
    </div>
@endsection
