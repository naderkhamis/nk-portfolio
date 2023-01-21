<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 p-0 mb-1">
            <h1>Service</h1>
        </div>
        <!-- /Header -->
        @if ($service)
            <!-- Service-Card -->
            <div class="card card-warning card-outline bg-dark col-lg-8 p-0">
                <!-- Card-Body -->
                <div class="row card-body p-0 pr-md-3">
                    <!-- Service-Image -->
                    <div class="col-md-5">
                        <img class="rounded-bottom img-fluid h-100" src="{{ asset($service->image) }}" alt="Certificate Photo">
                    </div>
                    <!-- /Service-Image -->
                    <!-- Service-Information -->
                    <div class="col-md-7 p-3">
                        <div class="text-warning d-flex py-2">
                            <!-- Service-Icon -->
                            <div>
                                <i class="fas fa-{{ $service->icon }} mr-2"></i>
                            </div>
                            <!-- /Service-Icon -->
                            <!-- Service-Name -->
                            <h5 class="card-title">{{ $service->name }}</h5>
                            <!-- /Service-Name -->
                        </div>
                        <!-- Service-Description -->
                        <p class="card-text">{{ $service->description }}</p>
                        <!-- /Service-Description -->
                    </div>
                    <!-- /Service-Information -->
                </div>
                <!-- /Card-Body -->
                <!-- Service-Actions -->
                <div class="card-footer">
                    <a href="{{ route('edit-service', $service->id) }}" class="btn btn-success rounded-circle mr-2">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="{{ route('delete-service', $service->id) }}" class="btn btn-danger rounded-circle">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                <!-- /Service-Actions -->
            </div>
            <!-- /Service-Card -->
        @else
            <!-- Service-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as service to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Service-Alert -->
        @endif
    </div>
@endsection
