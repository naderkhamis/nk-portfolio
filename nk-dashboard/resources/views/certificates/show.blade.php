<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if ($certificate)
        <div class="row px-2">
            <!-- Header -->
            <div class="col-12 p-0 mb-1">
                <h1>Certificate</h1>
            </div>
            <!-- /Header -->
            <div class="card card-warning card-outline bg-dark col-lg-8 p-0">
                <!-- Card-Body -->
                <div class="row card-body p-0 pr-md-3">
                    <!-- Certificate-Image -->
                    <div class="col-md-5">
                        <img class="rounded img-fluid h-100" src="{{ asset($certificate->image) }}"
                            alt="Certificate Photo">
                    </div>
                    <!-- /Certificate-Image -->
                    <!-- Certificate-Information -->
                    <div class="col-md-7 p-3">
                        <!-- Certificate-Title -->
                        <div class="card-header text-warning px-0 border-0">
                            <h3 class="card-title">{{ $certificate->title }}</h3>
                        </div>
                        <!-- /Certificate-Title -->
                        <!-- Certificate-Description -->
                        <p class="card-text">{{ $certificate->description }}</p>
                        <!-- /Certificate-Description -->
                        <!-- Certificate-Info -->
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item bg-dark">
                                <b>School</b>
                                <span class="float-right">
                                    {{ $certificate->school }}
                                </span>
                            </li>
                            @if ($certificate->grade != null)
                                <li class="list-group-item bg-dark">
                                    <b>Grade</b>
                                    <span class="float-right">
                                        {{ $certificate->grade }}
                                    </span>
                                </li>
                            @endif
                            <li class="list-group-item bg-dark">
                                <b>Issue Date</b>
                                <span class="float-right">
                                    <strong class="badge badge-warning p-2 font-italic float-right">
                                        {{ Carbon::createFromFormat('Y-m-d H:i:s', $certificate->date)->format('d M Y') }}
                                    </strong>
                                </span>
                            </li>
                        </ul>
                        <!--/ Certificate-Info -->
                    </div>
                    <!-- /Certificate-Information -->
                </div>
                <!-- /Card-Body -->
                <!-- Card-Footer -->
                <div class="card-footer">
                    <a href="{{ route('edit-certificate', $certificate->id) }}"
                        class="btn btn-success rounded-circle mr-2">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="{{ route('delete-certificate', $certificate->id) }}" class="btn btn-danger rounded-circle">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                <!-- /Card-Footer -->
            </div>
        </div>
    @else
        <!-- Alert -->
        <div class="alert alert-danger alert-dismissible fade show col-md-6" role="alert">
            <strong>Sorry! </strong> There is no such as certificate.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- Alert -->
    @endif
@endsection
