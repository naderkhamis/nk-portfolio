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
                <div class="card card-warning bg-dark col-lg-10 p-0">
                    <!-- Card-Header -->
                    <div class="card-header">
                        <h3 class="card-title">{{ $developer->name }}</h3>
                    </div>
                    <!-- /Card-Header -->
                    <!-- Card-Body -->
                    <div class="row justify-content-around card-body">
                        <!-- Image -->
                        <div class="col-md-3 p-2">
                            <div class="text-center">
                                <img class="dev-img rounded img-fluid" src="{{ asset($developer->image) }}"
                                    alt="Developer Photo">
                            </div>
                        </div>
                        <!-- /Image -->
                        <!-- About Me Box -->
                        <div class="col-md-8 p-2">
                            <p class="card-text">{{ $developer->introduction }}</p>
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
                        </div>
                        <!-- /About Me Box -->
                        <!-- Card-Footer -->
                        <div class="col-md-1 d-flex flex-md-column justify-content-around align-items-md-center p-2">
                            <a href="{{ route('edit-developer', $developer->id) }}"
                                class="btn btn-success rounded-circle">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="{{ route('delete-developer', $developer->id) }}"
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
        <div class="alert alert-danger alert-dismissible fade show col-md-6 rounded-pill" role="alert">
            <strong>Sorry! </strong> There is no available information.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="col-md-1 p-0">
        <a href="{{ route('create-developer') }}" class="btn btn-block btn-warning font-weight-bold rounded-pill">
            New
            <i class="fas fa-plus"></i>
        </a>
    </div>
@endsection
