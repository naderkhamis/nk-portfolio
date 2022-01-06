<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if (count($certificates))
        <div class="row px-2">
            <div class="col-12 p-0 mb-1">
                <h1>Certificates</h1>
            </div>
            @foreach ($certificates as $certificate)
                <div class="col-md-6 col-xl-4 p-0 pr-md-2">
                    <div class="card card-warning bg-dark">
                        <!-- Card-Header -->
                        <div class="card-header h6">
                            <h3 class="card-title">{{ $certificate->title }}</h3>
                        </div>
                        <!-- /Card-Header -->
                        <!-- Card-Body -->
                        <div class="card-body">
                            <div class="row">
                                <!-- Image -->
                                <div class="col-md-4">
                                    <img class="img-fluid" src="{{ asset($certificate->image) }}"
                                        alt="Certificate Photo">
                                </div>
                                <!-- /Image -->
                                <!-- Certificate-Info -->
                                <div class="col-md-8">
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
                                            <b>Developer</b>
                                            <span class="float-right">
                                                {{ $certificate->developer->name }}
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Certificate-Info -->
                            </div>
                            <!-- Certificate-Description -->
                            <p class="card-text my-3">{{ $certificate->description }}</p>
                            <!-- /Certificate-Description -->
                            <div>
                                <strong class="badge badge-warning p-2 font-italic">
                                    {{ Carbon::createFromFormat('Y-m-d H:i:s', $certificate->date)->format('d M Y') }}
                                </strong>
                            </div>
                        </div>
                        <!-- Card-Footer -->
                        <div class="card-footer border-top border-warning d-flex justify-content-start">
                            <a href="{{ route('show-certificate', $certificate->id) }}"
                                class="btn btn-primary rounded-circle">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('edit-certificate', $certificate->id) }}"
                                class="btn btn-success rounded-circle mx-2">
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
            @endforeach
        </div>
    @else
        <div class="alert alert-danger alert-dismissible fade show col-md-6" role="alert">
            <strong>Sorry! </strong> There is no available certificates.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="col-md-1 p-0">
        <a href="{{ route('create-certificate') }}" class="btn btn-block btn-warning font-weight-bold rounded-pill">
            New
            <i class="fas fa-plus"></i>
        </a>
    </div>
@endsection
