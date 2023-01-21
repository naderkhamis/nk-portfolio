<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 p-0 mb-1">
            <h1>Experience</h1>
        </div>
        <!-- /Header -->
        @if ($career)
            <!-- Experience-Card -->
            <div class="card card-warning card-outline bg-dark col-lg-6 p-0">
                <!-- Card-Body -->
                <div class="row card-body p-0 pr-md-3">
                    <!-- Company-Image -->
                    <div class="col-md-3 d-flex py-3 pl-4">
                        <img class="rounded-circle img-fluid" src="{{ asset($career->image) }}" alt="Company Logo">
                    </div>
                    <!-- /Company-Image -->
                    <!-- Certificate-Information -->
                    <div class="col-md-9 p-3">
                        <!-- Job-Title -->
                        <div class="card-header text-warning px-0 border-0">
                            <h3 class="card-title">{{ $career->title }}</h3>
                        </div>
                        <!-- /Job-Title -->
                        <!-- Career-Company -->
                        <h5 class="card-text">{{ $career->company }}</h5>
                        <!-- /Career-Company -->
                        <!-- Career-Description -->
                        <p class="card-text mb-3">{{ $career->description }}</p>
                        <!-- /Career-Description -->
                        <!-- Career-From-Date -->
                        <div>
                            <strong class="badge badge-warning p-2 mb-2 font-italic">
                                From:
                                {{ Carbon::parse($career->from_date)->format('d M Y') }}
                            </strong>
                        </div>
                        <!-- /Career-From-Date -->
                        <!-- Career-To-Date -->
                        <div>
                            <strong class="badge badge-warning p-2 font-italic">
                                @if ($career->status === 0)
                                    To:
                                    {{ Carbon::parse($career->to_date)->format('d M Y') }}
                                @else
                                    Till now
                                @endif
                            </strong>
                        </div>
                        <!-- /Career-To-Date -->
                    </div>
                    <!-- Career-Actions -->
                    <div class="card-footer">
                        <a href="{{ route('edit-career', $career->id) }}" class="btn btn-success rounded-circle mr-2">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a href="{{ route('delete-career', $career->id) }}" class="btn btn-danger rounded-circle">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                    <!-- /Career-Actions -->
                </div>
                <!-- /Career-Card -->
            </div>
        @else
            <!-- Experience-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as experience to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Experience-Alert -->
        @endif
    </div>
@endsection
