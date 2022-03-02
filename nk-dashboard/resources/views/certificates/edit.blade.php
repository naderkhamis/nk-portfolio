<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2">
            <h1>Edit Certificate</h1>
        </div>
        <!-- /Header -->
        @if ($certificate)
            <!-- Certificate-Form -->
            <div class="col-md-8 col-xl-5 order-1 order-xl-0">
                <!-- Edit-Certificate-Form -->
                <div class="card card-warning card-outline card-body bg-dark pt-1">
                    <!-- Form-Header -->
                    <div class="card-header text-warning px-0 border-0">
                        <h3 class="card-title">Edit Certificate</h3>
                    </div>
                    <!-- /Form-Header -->
                    <form action="{{ route('update-certificate') }}" method="post" class="text-white row"
                        enctype="multipart/form-data">
                        <!-- TOKEN -->
                        @csrf
                        <!-- /TOKEN -->
                        <!-- Hidden-Id -->
                        <input type="hidden" name="id" id="id" value="{{ $certificate->id }}">
                        <!-- /Hidden-Id -->
                        <!-- Certificate-Title -->
                        <div class="form-group col-md-6">
                            <label for="title">Certificate Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                id="title" placeholder="Please enter certificate's title"
                                value="{{ $certificate->title }}">
                            @error('title')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Certificate-Title -->
                        <!-- Certificate-School -->
                        <div class="form-group col-md-6">
                            <label for="school">School</label>
                            <input type="text" class="form-control @error('school') is-invalid @enderror" name="school"
                                id="school" placeholder="Please enter school name" value="{{ $certificate->school }}">
                            @error('school')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Certificate-School -->
                        <!-- Certificate-Grade -->
                        <div class="form-group col-md-6">
                            <label for="grade">Grade</label>
                            <input type="text" class="form-control @error('grade') is-invalid @enderror" name="grade"
                                id="grade" placeholder="Please enter a grade" value="{{ $certificate->grade }}">
                            @error('grade')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Certificate-Grade -->
                        <!-- Certificate-Date -->
                        <div class="form-group col-md-6">
                            <label for="date">Date</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                                id="date"
                                value="{{ Carbon::createFromFormat('Y-m-d H:i:s', $certificate->date)->format('Y-m-d') }}">
                            @error('date')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Certificate-Date -->
                        <!-- Certificate-Image -->
                        <div class="form-group col-md-6">
                            <label for="image" class="control-label">Certificate Photo</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"
                                id="image">
                            @error('image')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Certificate-Image -->
                        <!-- Certificate-Developer -->
                        <div class="form-group col-md-6">
                            <label for="developer">Developer</label>
                            <span class="text-warning float-right">{{ $certificate->developer->name }}</span>
                            <select name="dev_id" id="developer"
                                class="custom-select @error('dev_id') is-invalid @enderror">
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
                                id="description" cols="30" rows="9"
                                placeholder="Please enter certificate description">{{ $certificate->description }}</textarea>
                            @error('description')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Certificate-Description -->
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
                <!-- /Edit-Certificate-Form -->
            </div>
            <!-- Certificate-Existing-Image -->
            <div class="col-md-6 col-xl-4 order-0 order-xl-1 pb-3">
                <img src="{{ asset($certificate->image) }}" class="img-fluid border border-warning rounded"
                    alt="Certificate Image">
            </div>
            <!-- /Certificate-Existing-Image -->
        @else
            <!-- Certificate-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as certificate to edit!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Certificate-Alert -->
        @endif
    </div>
@endsection
