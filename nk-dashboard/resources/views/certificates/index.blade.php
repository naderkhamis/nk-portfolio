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
                <div class="col-md-5 col-lg-3 p-0 pr-4">
                    <div class="card card-warning card-outline bg-dark p-0">
                        <!-- Certificates-Image -->
                        <img src="{{ asset($certificate->image) }}" class="card-img-top" alt="Project-Image">
                        <!-- /Certificates-Image -->
                        <div class="card-body box-profile">
                            <!-- Certificates-Title -->
                            <h5 class="card-title text-warning py-2">{{ $certificate->title }}</h5>
                            <!-- /Certificates-Title -->
                            <!-- Certificates-Description -->
                            <p class="card-text">{{ $certificate->description }}</p>
                            <!-- /Certificates-Description -->
                            <!-- Certificates-School -->
                            <strong class="badge badge-warning p-2 font-italic">
                                {{ $certificate->school }}
                            </strong>
                            <strong class="badge badge-warning p-2 font-italic">
                                {{ $certificate->grade }}
                            </strong>
                            <strong class="badge badge-warning p-2 font-italic">
                                {{ Carbon::createFromFormat('Y-m-d H:i:s', $certificate->date)->format('d M Y') }}
                            </strong>
                            <!-- /Certificates-School -->
                        </div>
                        <!-- Certificates-Actions -->
                        <div class="card-footer">
                            <a href="{{ route('show-certificate', $certificate->id) }}"
                                class="btn btn-primary rounded-circle mr-md-2">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('edit-certificate', $certificate->id) }}"
                                class="btn btn-success rounded-circle mr-md-2">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="{{ route('delete-certificate', $certificate->id) }}"
                                class="btn btn-danger rounded-circle">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                        <!-- /Certificates-Actions -->
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <!-- Alert -->
        <div class="alert alert-danger alert-dismissible fade show col-md-6" role="alert">
            <strong>Sorry! </strong> There is no available certificates.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- /Alert -->
    @endif
    <div class="col-md-1 p-0">
        <a href="{{ route('create-certificate') }}" class="btn btn-block btn-warning font-weight-bold rounded-pill">
            New
            <i class="fas fa-plus"></i>
        </a>
    </div>
@endsection
