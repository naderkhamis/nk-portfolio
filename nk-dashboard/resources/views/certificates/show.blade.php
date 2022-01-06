<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if ($certificate)
        <div class="row px-2">
            <div class="col-12 p-0 mb-1">
                <h1>Certificate</h1>
            </div>
            <div class="card card-warning bg-dark col-lg-10 p-0">
                <!-- Card-Header -->
                <div class="card-header">
                    <h3 class="card-title">{{ $certificate->title }}</h3>
                </div>
                <!-- /Card-Header -->
                <!-- Card-Body -->
                <div class="row justify-content-around card-body">
                    <!-- Image -->
                    <div class="col-md-3 p-2">
                        <div class="text-center">
                            <img class="dev-img rounded img-fluid" src="{{ asset($certificate->image) }}"
                                alt="Developer Photo">
                        </div>
                    </div>
                    <!-- /Image -->
                    <div class="col-md-8 p-2">
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
                            <li class="list-group-item bg-dark">
                                <b>Developer</b>
                                <span class="float-right">
                                    {{ $certificate->developer->name }}
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
                                <strong class="badge badge-warning p-2 font-italic">
                                    {{ Carbon::createFromFormat('Y-m-d H:i:s', $certificate->date)->format('d M Y') }}
                                </strong>
                            </li>
                        </ul>
                        <!--/ Certificate-Info -->
                    </div>
                    <!-- Card-Footer -->
                    <div class="col-md-1 d-flex flex-md-column justify-content-around align-items-md-center p-2">
                        <a href="{{ route('edit-certificate', $certificate->id) }}"
                            class="btn btn-success rounded-circle">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a href="{{ route('delete-certificate', $certificate->id) }}"
                            class="btn btn-danger rounded-circle">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                    <!-- /Card-Footer -->
                </div>
                <!-- /Card-Body -->
            </div>
        </div>
    @else
        <div class="alert alert-danger alert-dismissible fade show col-md-6" role="alert">
            <strong>Sorry! </strong> There is no such as certificate.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection
