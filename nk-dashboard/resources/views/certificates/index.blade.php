<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2 d-flex justify-content-between align-items-center">
            <h1>Certificates</h1>
            <!-- Create-New-Certificate -->
            <div class="d-md-none">
                <a href="#form-create" class="btn btn-warning font-weight-bold rounded-pill">
                    New
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <!-- /Create-New-Certificate -->
        </div>
        <!-- /Header -->
        <!-- Certificate-Form -->
        <div id="form-create" class="col-md-6 col-xl-4 order-2 order-md-1">
            <!-- New-Certificate-Form -->
            <div class="card card-warning card-outline card-body bg-dark pt-1">
                <!-- Form-Header -->
                <div class="card-header text-warning px-0 border-0">
                    <h3 class="card-title">Create Certificate</h3>
                </div>
                <!-- /Form-Header -->
                <form action="{{ route('store-certificate') }}" method="post" class="row"
                    enctype="multipart/form-data">
                    <!-- TOKEN -->
                    @csrf
                    <!-- /TOKEN -->
                    <!-- Certificate-Title -->
                    <div class="form-group col-lg-6">
                        <label for="title">Certificate Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                            placeholder="Enter certificate title">
                        @error('title')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Certificate-Title -->
                    <!-- Certificate-School -->
                    <div class="form-group col-lg-6">
                        <label for="school">School</label>
                        <input type="text" class="form-control @error('school') is-invalid @enderror" name="school"
                            id="school" placeholder="Enter school name">
                        @error('school')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Certificate-School -->
                    <!-- Certificate-Grade -->
                    <div class="form-group col-lg-6">
                        <label for="grade">Grade</label>
                        <input type="text" class="form-control @error('grade') is-invalid @enderror" name="grade" id="grade"
                            placeholder="Enter certificate grade">
                        @error('grade')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Certificate-Grade -->
                    <!-- Certificate-Date -->
                    <div class="form-group col-lg-6">
                        <label for="date">Date</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date">
                        @error('date')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Certificate-Date -->
                    <!-- Certificate-Image -->
                    <div class="form-group col-lg-6">
                        <label for="image" class="control-label">Certificate Photo</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"
                            id="image">
                        @error('image')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Certificate-Image -->
                    <!-- Certificate-Developer -->
                    <div class="form-group col-lg-6">
                        <label for="developer">Developer</label>
                        <select name="dev_id" id="developer" class="custom-select @error('dev_id') is-invalid @enderror">
                            <option selected disabled>Select a developer</option>
                            @foreach ($developers as $developer)
                                <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                            @endforeach
                        </select>
                        @error('dev_id')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Certificate-Developer -->
                    <!-- Certificate-Description -->
                    <div class="form-group col-12">
                        <label for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                            id="description" cols="30" rows="9" placeholder="Enter certificate description"></textarea>
                        @error('description')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Certificate-Description -->
                    <!-- Form-Submit-Button -->
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                            Save
                            <i class="fas fa-save"></i>
                        </button>
                    </div>
                    <!-- /Form-Submit-Button -->
                </form>
            </div>
            <!-- /New-Certificate-Form -->
        </div>
        <!-- /Certificate-Form -->
        <!-- Certificate-Section -->
        @if (count($certificates))
            <div class="col-md-6 col-xl-8 order-1 order-md-2">
                <!-- Certificates-Container -->
                <div class="row row-cols-1 row-cols-xl-3">
                    @foreach ($certificates as $certificate)
                        <!-- Certificate-Card -->
                        <div class="card-deck px-2">
                            <div class="card card-warning card-outline bg-dark">
                                <!-- Certificate-Image -->
                                <img src="{{ asset($certificate->image) }}" class="card-img-top rounded"
                                    alt="Project-Image">
                                <!-- /Certificate-Image -->
                                <!-- Certificate-Information -->
                                <div class="card-body box-profile">
                                    <!-- Certificate-Title -->
                                    <h5 class="card-title text-warning py-2">{{ $certificate->title }}</h5>
                                    <!-- /Certificate-Title -->
                                    <!-- Certificate-Description -->
                                    <p class="card-text">{{ $certificate->description }}</p>
                                    <!-- /Certificate-Description -->
                                    <!-- Certificate-School -->
                                    <strong class="badge badge-warning p-2 font-italic">
                                        {{ $certificate->school }}
                                    </strong>
                                    <!-- /Certificate-School -->
                                    <!-- Certificate-Grade -->
                                    <strong class="badge badge-warning p-2 font-italic">
                                        {{ $certificate->grade }}
                                    </strong>
                                    <!-- /Certificate-Grade -->
                                    <!-- Certificate-Date -->
                                    <strong class="badge badge-warning p-2 font-italic">
                                        {{ Carbon::createFromFormat('Y-m-d H:i:s', $certificate->date)->format('d M Y') }}
                                    </strong>
                                    <!-- /Certificate-Date -->
                                </div>
                                <!-- /Certificate-Information -->
                                <!-- Certificate-Actions -->
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
                                <!-- /Certificate-Actions -->
                            </div>
                        </div>
                        <!-- /Certificate-Card -->
                    @endforeach
                </div>
                <!-- /Certificates-Container -->
            @else
                <!-- Certificate-Alert -->
                <div class="col-12 order-0">
                    <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                        <strong>Sorry! </strong>There is no certificates to show!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <!-- /Certificate-Alert -->
        @endif
        <!-- /Certificate-Section -->
    </div>
@endsection
