<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if (count($clientReviews))
        <div class="row px-2">
            <div class="col-12 p-0 mb-1">
                <h1>Personal Information</h1>
            </div>
            @foreach ($clientReviews as $clientReview)
                <div class="card card-warning bg-dark col-lg-10 p-0">
                    <!-- Card-Header -->
                    <div class="card-header">
                        <h3 class="card-title">{{ $clientReview->name }}</h3>
                    </div>
                    <!-- /Card-Header -->
                    <!-- Card-Body -->
                    <div class="row justify-content-around card-body">
                        <!-- Image -->
                        <div class="col-md-3 p-2">
                            <div class="text-center">
                                <img class="dev-img rounded img-fluid" src="{{ asset($clientReview->image) }}"
                                    alt="Developer Photo">
                            </div>
                        </div>
                        <!-- /Image -->
                        <!-- About Me Box -->
                        <div class="col-md-8 p-2">
                            <p class="card-text">{{ $clientReview->review }}</p>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item bg-dark">
                                    <b>Company</b>
                                    <span class="float-right">
                                        {{ $clientReview->company }}
                                    </span>
                                </li>
                                <li class="list-group-item bg-dark">
                                    <b>Developer</b>
                                    <span class="float-right">
                                        {{ $clientReview->developer->name }}
                                    </span>
                                </li>
                                <li class="list-group-item bg-dark">
                                    <strong class="badge badge-warning p-2 font-italic">
                                        {{ Carbon::createFromFormat('Y-m-d H:i:s', $clientReview->date)->format('d M Y') }}
                                    </strong>
                                </li>
                            </ul>
                        </div>
                        <!-- /About Me Box -->
                        <!-- Card-Footer -->
                        <div class="col-md-1 d-flex flex-md-column justify-content-around align-items-md-center p-2">
                            <a href="{{ route('edit-review', $clientReview->id) }}"
                                class="btn btn-success rounded-circle">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="{{ route('delete-review', $clientReview->id) }}"
                                class="btn btn-danger rounded-circle">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                        <!-- /Card-Footer -->
                    </div>
                    <!-- /Card-Body -->

                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-danger alert-dismissible fade show col-md-6" role="alert">
            <strong>Sorry! </strong> There is no available reviews.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="col-md-1 p-0">
        <a href="{{ route('create-review') }}" class="btn btn-block btn-warning font-weight-bold rounded-pill">
            New
            <i class="fas fa-plus"></i>
        </a>
    </div>
@endsection
