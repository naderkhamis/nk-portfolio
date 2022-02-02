<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if (count($developers))
        <div class="row px-2">
            <div class="col-12 p-0 mb-1">
                <h1>Personal Information</h1>
            </div>
            @foreach ($developers as $developer)
                <div class="card card-warning card-outline bg-dark col-lg-8 p-0">
                    <!-- Card-Body -->
                    <div class="row card-body p-0 pr-md-3">
                        <!-- Developer-Image -->
                        <div class="col-md-3">
                            <img class="rounded img-fluid h-100" src="{{ asset($developer->image) }}"
                                alt="Developer Photo">
                        </div>
                        <!-- /Developer-Image -->
                        <!-- About-Me-Box -->
                        <div class="col-md-9 p-3">
                            <!-- Developer-Name -->
                            <div class="card-header text-warning px-0 border-0">
                                <h3 class="card-title">{{ $developer->name }}</h3>
                            </div>
                            <!-- /Developer-Name -->
                            <!-- Developer-Introduction -->
                            <p class="card-text">{{ $developer->introduction }}</p>
                            <!-- /Developer-Introduction -->
                            <!-- Birth-Nationality-Experience -->
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item bg-dark">
                                    <b>Birth Date</b>
                                    <span class="float-right">
                                        {{ Carbon::createFromFormat('Y-m-d H:i:s', $developer->date_of_birth)->format('d M Y') }}
                                    </span>
                                </li>
                                <li class="list-group-item bg-dark">
                                    <b>Nationality</b>
                                    <span class="float-right">{{ $developer->nationality }}</span>
                                </li>
                                <li class="list-group-item bg-dark">
                                    <b>Experience</b>
                                    <span class="float-right">
                                        {{ $developer->experience }} years
                                    </span>
                                </li>
                            </ul>
                            <!-- /Birth-Nationality-Experience -->
                        </div>
                        <!-- /About-Me-Box -->
                    </div>
                    <!-- /Card-Body -->
                    <!-- Card-Footer -->
                    <div class="card-footer">
                        <a href="{{ route('edit-developer', $developer->id) }}"
                            class="btn btn-success rounded-circle mr-2">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a href="{{ route('delete-developer', $developer->id) }}" class="btn btn-danger rounded-circle">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                    <!-- /Card-Footer -->
                </div>
            @endforeach
        </div>
    @else
        <!-- Alert -->
        <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
            <strong>Sorry! </strong> There is no available information.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- Alert -->
    @endif
    <!-- New-Button -->
    <div class="col-md-2 p-0">
        <a href="{{ route('create-developer') }}" class="btn btn-block btn-warning font-weight-bold rounded-pill">
            New
            <i class="fas fa-plus"></i>
        </a>
    </div>
    <!-- New-Button -->
@endsection
