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
            <div class="card card-warning card-outline bg-dark col-lg-10 p-0">
                <!-- Card-Body -->
                <div class="row card-body p-0">
                    <!-- Certificate-Image -->
                    <div class="col-md-5">
                        <img class="dev-img rounded img-fluid" src="{{ asset($certificate->image) }}"
                            alt="Developer Photo">
                    </div>
                    <!-- /Certificate-Image -->
                    <div class="col-md-7 p-0 align-self-center">
                        <!-- Certificate-Title -->
                        <div class="card-header">
                            <h3 class="card-title text-warning">{{ $certificate->title }}</h3>
                        </div>
                        <!-- /Certificate-Title -->
                        <!-- Certificate-Description -->
                        <p class="card-text px-4">{{ $certificate->description }}</p>
                        <!-- /Certificate-Description -->
                        <!-- Certificate-Info -->
                        <div class="col-md-8 px-4">
                            <!-- Certificate-School -->
                            <div class="mb-4">
                                <b>School</b>
                                <span class="float-right">
                                    {{ $certificate->school }}
                                </span>
                            </div>
                            <!-- /Certificate-School -->
                            <!-- Certificate-Grade -->
                            @if ($certificate->grade != null)
                                <div class="mb-4">
                                    <b>Grade</b>
                                    <span class="float-right">
                                        {{ $certificate->grade }}
                                    </span>
                                </div>
                            @endif
                            <!-- /Certificate-Grade -->
                            <!-- Certificate-Date -->
                            <div>
                                <b>Issue Date</b>
                                <strong class="badge badge-warning p-2 font-italic float-right">
                                    {{ Carbon::createFromFormat('Y-m-d H:i:s', $certificate->date)->format('d M Y') }}
                                </strong>
                            </div>
                            <!-- /Certificate-Grade -->
                        </div>
                        <!--/ Certificate-Info -->
                    </div>
                </div>
                <!-- /Card-Body -->
                <!-- Certificate-Actions -->
                <div class="card-footer text-center">
                    <a href="{{ route('edit-certificate', $certificate->id) }}"
                        class="btn btn-success rounded-circle mx-2">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="{{ route('delete-certificate', $certificate->id) }}"
                        class="btn btn-danger rounded-circle mx-2">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                <!-- /Certificate-Actions -->
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
