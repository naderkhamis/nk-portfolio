<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 p-0 mb-1">
            <h1>Personal Information</h1>
        </div>
        <!-- /Header -->
        @if ($personal_information)
            <!-- Information-Card -->
            <div class="card card-warning card-outline bg-dark col-lg-8 p-0">
                <!-- Card-Body -->
                <div class="row card-body p-0 pr-md-3">
                    <!-- Developer-Image -->
                    <div class="col-md-3">
                        <img class="rounded-bottom img-fluid h-100" src="{{ asset($personal_information->image) }}"
                            alt="Developer Photo">
                    </div>
                    <!-- /Developer-Image -->
                    <!-- Developer-Information -->
                    <div class="col-md-9 p-3">
                        <!-- Developer-Name -->
                        <div class="card-header text-warning px-0 border-0">
                            <h3 class="card-title">{{ $personal_information->name }}</h3>
                        </div>
                        <!-- /Developer-Name -->
                        <!-- Developer-Introduction -->
                        <p class="card-text">{{ $personal_information->introduction }}</p>
                        <!-- /Developer-Introduction -->
                        <!-- Birth-Nationality-Experience -->
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item bg-dark">
                                <b>Birth Date</b>
                                <span class="float-right">
                                    {{-- {{ Carbon::createFromFormat('Y-m-d H:i:s', $developer->date_of_birth)->format('d M Y') }} --}}
                                    {{ Carbon::parse($personal_information->date_of_birth)->format('d M Y') }}
                                </span>
                            </li>
                            <li class="list-group-item bg-dark">
                                <b>Nationality</b>
                                <span class="float-right">{{ $personal_information->nationality }}</span>
                            </li>
                            <li class="list-group-item bg-dark">
                                <b>Experience</b>
                                <span class="float-right">
                                    {{ $personal_information->experience }} years
                                </span>
                            </li>
                        </ul>
                        <!-- /Birth-Nationality-Experience -->
                    </div>
                    <!-- /Developer-Information -->
                </div>
                <!-- /Card-Body -->
                <!-- Information-Actions -->
                <div class="card-footer">
                    <a href="{{ route('edit-personal-information', $personal_information->id) }}"
                        class="btn btn-success rounded-circle mr-2">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="{{ route('delete-personal-information', $personal_information->id) }}"
                        class="btn btn-danger rounded-circle">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                <!-- /Information-Actions -->
            </div>
            <!-- /Information-Card -->
        @else
            <!-- Information-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as certificate to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Information-Alert -->
        @endif
    </div>
@endsection
