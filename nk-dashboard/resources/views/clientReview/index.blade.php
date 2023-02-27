<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2 d-flex justify-content-between align-items-center">
            <h1>Client Reviews</h1>
            <!-- Create-New-Review -->
            <div class="d-md-none">
                <a href="#form-create" class="btn btn-warning font-weight-bold rounded-pill">
                    New
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <!-- /Create-New-Review -->
        </div>
        <!-- /Header -->
        <!-- Client-Review-Form -->
        <div id="form-create" class="col-md-6 col-xl-4 order-2 order-md-1">
            <!-- New-Review-Form -->
            <div class="card card-warning card-outline card-body bg-dark pt-1">
                <!-- Form-Header -->
                <div class="card-header text-warning px-0 border-0">
                    <h3 class="card-title">Create Review</h3>
                </div>
                <!-- /Form-Header -->
                <form action="{{ route('store-review') }}" method="post" class="form-row" enctype="multipart/form-data">
                    <!-- TOKEN -->
                    @csrf
                    <!-- /TOKEN -->
                    <!-- Client-Name -->
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Please enter client's name">
                        @error('name')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Client-Name -->
                    <!-- Client-Image -->
                    <div class="form-group col-md-6">
                        <label for="image" class="control-label">Photo</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"
                            id="image">
                        @error('image')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Client-Image -->
                    <!-- Company-Name -->
                    <div class="form-group col-md-6">
                        <label for="company">Company</label>
                        <input type="text" class="form-control @error('company') is-invalid @enderror" name="company"
                            id="company" placeholder="Please enter company's name">
                        @error('company')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Company-Name -->
                    <!-- Review-Date -->
                    <div class="form-group col-md-6">
                        <label for="date">Date</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                            id="date">
                        @error('date')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Review-Date -->
                    <!-- Review -->
                    <div class="form-group col-12">
                        <label for="review">Reveiw</label>
                        <textarea class="form-control @error('review') is-invalid @enderror" name="review" id="reveiw" cols="30"
                            rows="9" placeholder="Please enter client's review"></textarea>
                        @error('review')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Review -->
                    <!-- Form-Submit-Button -->
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                            Save
                            <i class="fas fa-save"></i>
                        </button>
                    </div>
                    <!-- /Form-Submit-Button -->
                </form>
            </div>
            <!-- /New-Review-Form -->
        </div>
        <!-- /Client-Review-Form -->
        <!-- Reviews-Section -->
        @if (count($clientReviews))
            <div class="col-md-6 col-xl-8 order-1 order-md-2">
                <!-- Reviews-Container -->
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-4">
                    @foreach ($clientReviews as $clientReview)
                        <!-- Review-Card -->
                        <div class="card-deck px-2 pb-4">
                            <div class="card card-warning card-outline bg-dark">
                                <!-- Client-Company-Image -->
                                <img src="{{ asset($clientReview->image) }}" class="card-img-top rounded-bottom"
                                    alt="Client-Company Image">
                                <!-- /Client-Company-Image -->
                                <!-- Review-Information -->
                                <div class="card-body box-profile">
                                    <!-- Client-Name -->
                                    <h5 class="card-title text-warning py-2">{{ $clientReview->name }}</h5>
                                    <!-- /Client-Name -->
                                    <!-- Client-Review -->
                                    <p class="card-text">{{ $clientReview->review }}</p>
                                    <!-- /Client-Review -->
                                </div>
                                <!-- /Review-Information -->
                                <!-- Review-Actions -->
                                <div class="card-footer">
                                    <a href="{{ route('show-review', $clientReview->id) }}"
                                        class="btn btn-primary rounded-circle mr-md-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('edit-review', $clientReview->id) }}"
                                        class="btn btn-success rounded-circle mr-md-2">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('delete-review', $clientReview->id) }}"
                                        class="btn btn-danger rounded-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                                <!-- /Review-Actions -->
                            </div>
                        </div>
                        <!-- /Review-Card -->
                    @endforeach
                </div>
                <!-- /Reviews-Container -->
            </div>
        @else
            <!-- Review-Alert -->
            <div class="col-12 order-0">
                <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong> There is no available reviews.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Review-Alert -->
        @endif
        <!-- /Reviews-Section -->
    </div>
@endsection
