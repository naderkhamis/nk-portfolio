<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2">
            <h1>Edit Infromation</h1>
        </div>
        <!-- /Header -->
        @if ($developer)
            <!-- Certificate-Form -->
            <div class="col-md-8 col-xl-5 order-1 order-xl-0">
                <!-- /Edit-Information-Form -->
                <div class="card card-warning card-outline card-body bg-dark pt-1">
                    <!-- Form-Header -->
                    <div class="card-header text-warning px-0 border-0">
                        <h3 class="card-title">Edit Certificate</h3>
                    </div>
                    <!-- /Form-Header -->
                    <form action="{{ route('update-developer', $developer->id) }}" method="post" class="form-row"
                        enctype="multipart/form-data">
                        <!-- TOKEN -->
                        @csrf
                        <!-- /TOKEN -->
                        <!-- Hidden-Id -->
                        <input type="hidden" name="id" id="id" value="{{ $developer->id }}">
                        <!-- /Hidden-Id -->
                        <!-- Developer-Name -->
                        <div class="form-group col-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                placeholder="Enter a name" value="{{ $developer->name }}">
                            @error('name')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Developer-Name -->
                        <!-- Developer-Nationality -->
                        <div class="form-group col-md-6">
                            <label for="nationality">Nationality</label>
                            <input type="text" class="form-control @error('nationality') is-invalid @enderror"
                                name="nationality" id="nationality" placeholder="Enter a nationality"
                                value="{{ $developer->nationality }}">
                            @error('nationality')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Developer-Nationality -->
                        <!-- Developer-Birth-Date -->
                        <div class="form-group col-md-6">
                            <label for="birth-date">Birth Date</label>
                            <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                                name="date_of_birth" id="birth-date"
                                value="{{ Carbon::createFromFormat('Y-m-d H:i:s', $developer->date_of_birth)->format('Y-m-d') }}">
                            @error('date_of_birth')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Developer-Birth-Date -->
                        <!-- Developer-Experience-Years -->
                        <div class="form-group col-md-6">
                            <label for="experience">Experience Years</label>
                            <input type="number" class="form-control @error('experience') is-invalid @enderror"
                                name="experience" id="experience" placeholder="Enter experience years"
                                value="{{ $developer->experience }}">
                            @error('experience')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Developer-Experience-Years -->
                        <!-- Developer-Image -->
                        <div class="form-group col-md-6">
                            <label for="image" class="control-label">Photo</label>
                            <input type="file"
                                class="form-control-file align-self-center m-0 @error('image') is-invalid @enderror"
                                name="image" id="image">
                            @error('image')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Developer-Image -->
                        <!-- Developer-Introduction -->
                        <div class="form-group col-12">
                            <label for="introduction">About Me</label>
                            <textarea class="form-control @error('introduction') is-invalid @enderror" name="introduction"
                                id="introduction" cols="30" rows="9"
                                placeholder="Type about yourself">{{ $developer->introduction }}</textarea>
                            @error('introduction')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Developer-Introduction -->
                        <!-- Form-Submit-Button -->
                        <div class="col-lg-4 order-2">
                            <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                                Update
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                        <!-- /Form-Submit-Button -->
                    </form>
                </div>
                <!-- /Edit-Information-Form -->
            </div>
            <!-- /Certificate-Form -->
            <!-- Developer-Existing-Image -->
            <div class="col-md-4 col-xl-2 order-0 order-xl-1 pb-3">
                <img src="{{ asset($developer->image) }}" class="img-fluid border border-warning rounded"
                    alt="Certificate Image">
            </div>
            <!-- /Developer-Existing-Image -->
        @else
            <!-- Infromation-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as infromation to edit!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Infromation-Alert -->
        @endif
    </div>
@endsection
