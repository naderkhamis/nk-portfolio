<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 p-0 mb-1">
            <h1>Client Review</h1>
        </div>
        <!-- /Header -->
        @if ($clientReview)
            <!-- Review-Card -->
            <div class="card card-warning card-outline bg-dark col-lg-6 p-0">
                <!-- Card-Body -->
                <div class="row card-body p-0 pr-md-3">
                    <!-- Client-Company-Image -->
                    <div class="col-md-3">
                        <img class="rounded img-fluid h-100" src="{{ asset($clientReview->image) }}"
                            alt="Client-Company Photo">
                    </div>
                    <!-- /Client-Company-Image -->
                    <!-- Review-Information -->
                    <div class="col-md-9 p-3">
                        <!-- Client-Name -->
                        <div class="card-header text-warning px-0 border-0">
                            <h3 class="card-title">{{ $clientReview->name }}</h3>
                        </div>
                        <!-- /Client-Name -->
                        <!-- Client-Review -->
                        <p class="card-text">{{ $clientReview->review }}</p>
                        <!-- /Client-Review -->
                        <!-- Company-Developer-Date -->
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
                        <!-- /Company-Developer-Date -->
                    </div>
                    <!-- /Review-Information -->
                    <!-- Review-Actions -->
                    <div class="card-footer">
                        <a href="{{ route('edit-review', $clientReview->id) }}"
                            class="btn btn-success rounded-circle mr-2">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a href="{{ route('delete-review', $clientReview->id) }}" class="btn btn-danger rounded-circle">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                    <!-- /Review-Actions -->
                </div>
                <!-- /Card-Body -->
            </div>
            <!-- /Review-Card -->
        @else
            <!-- Review-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as review to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Review-Alert -->
        @endif
    </div>
@endsection
