<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2 d-flex justify-content-between align-items-center">
            <h1>Career Job</h1>
            <!-- Create-New-Career -->
            <div class="d-md-none">
                <a href="#form-create" class="btn btn-warning font-weight-bold rounded-pill">
                    New
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <!-- /Create-New-Career -->
        </div>
        <!-- /Header -->
        <!-- Career-Form -->
        <div id="form-create" class="col-md-6 col-xl-4 order-2 order-md-1">
            <!-- New-Career-Form -->
            <div class="card card-warning card-outline card-body bg-dark pt-1">
                <!-- Form-Header -->
                <div class="card-header text-warning px-0 border-0">
                    <h3 class="card-title">Create Career</h3>
                </div>
                <!-- /Form-Header -->
                <form action="{{ route('store-career') }}" method="post" class="text-white row"
                    enctype="multipart/form-data">
                    <!-- TOKEN -->
                    @csrf
                    <!-- /TOKEN -->
                    <!-- Job-Title -->
                    <div class="form-group col-12">
                        <label for="title">Job Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                            placeholder="Enter job title">
                        @error('title')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Job-Title -->
                    <!-- Career-Company -->
                    <div class="form-group col-lg-6">
                        <label for="company">Company</label>
                        <input type="text" class="form-control @error('company') is-invalid @enderror" name="company"
                            id="company" placeholder="Enter company name">
                        @error('company')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Career-Company -->
                    <!-- Company-Logo -->
                    <div class="form-group col-lg-6">
                        <label for="image" class="control-label">Company Logo</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"
                            id="image">
                        @error('image')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Company-Logo -->
                    <!-- Career-From-Date -->
                    <div class="form-group col-lg-6">
                        <label for="from">From</label>
                        <input type="date" class="form-control @error('from') is-invalid @enderror" name="from" id="from">
                        @error('from')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Career-From-Date -->
                    <!-- Career-To-Date -->
                    <div class="form-group col-lg-6">
                        <label for="to">To</label>
                        <input type="date" class="form-control @error('to') is-invalid @enderror" name="to" id="to">
                        @error('to')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Career-To-Date -->
                    <!-- Career-Developer -->
                    {{-- <div class="form-group col-lg-6">
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
                    </div> --}}
                    <!-- /Career-Developer -->
                    <!-- Career-Status -->
                    <div class="form-group col-12 d-flex">
                        <label class="m-0">Still working there? &nbsp;</label>
                        <div class="custom-control custom-radio mx-3">
                            <input
                                class="custom-control-input custom-control-input-warning @error('status') is-invalid @enderror"
                                type="radio" name="status" id="customRadio1" value="1">
                            <label class="custom-control-label" for="customRadio1">Yes</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input
                                class="custom-control-input custom-control-input-warning @error('status') is-invalid @enderror"
                                type="radio" name="status" id="customRadio2" value="0">
                            <label class="custom-control-label" for="customRadio2">No</label>
                        </div>
                        @error('status')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Career-Status -->
                    <!-- Career-Description -->
                    <div class="form-group col-12">
                        <label for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                            id="description" cols="30" rows="9" placeholder="Describe your job"></textarea>
                        @error('description')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Career-Description -->
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
        <!-- /Career-Form -->
        <!-- Career-Section -->
        @if (count($career))
            <div class="col-md-6 col-xl-8 order-1 order-md-2">
                <!-- Career-Container -->
                <div class="row row-cols-1 row-cols-xl-3">
                    @foreach ($career as $career)
                        <!-- Career-Card -->
                        <div class="card-deck px-2">
                            <div class="card card-warning card-outline bg-dark pb-2">
                                <!-- Company-Image -->
                                <img src="{{ asset($career->image) }}" class="card-img-top rounded" alt="Company-Image">
                                <!-- /Company-Image -->
                                <div class="card-body box-profile">
                                    <!-- Job-Title -->
                                    <h5 class="card-title text-warning py-2">{{ $career->title }}</h5>
                                    <!-- /Job-Title -->
                                    <!-- Career-Description -->
                                    <p class="card-text">{{ $career->description }}</p>
                                    <!-- /Career-Description -->
                                    <!-- Career-Company -->
                                    <strong class="badge badge-warning p-2 mb-2 font-italic">
                                        {{ $career->company }}
                                    </strong>
                                    <!-- /Career-Company -->
                                    <!-- Career-From-Date -->
                                    <strong class="badge badge-warning p-2 mb-2 font-italic">
                                        From:
                                        {{ Carbon::createFromFormat('Y-m-d H:i:s', $career->from_date)->format('d M Y') }}
                                    </strong>
                                    <!-- /Career-From-Date -->
                                    <!-- Career-To-Date -->
                                    <strong class="badge badge-warning p-2 font-italic">
                                        @if ($career->status === 0)
                                            To:
                                            {{ Carbon::createFromFormat('Y-m-d H:i:s', $career->to_date)->format('d M Y') }}
                                        @else
                                            Till now
                                        @endif
                                    </strong>
                                    <!-- Career-To-Date -->
                                </div>
                                <!-- Career-Actions -->
                                <div class="card-footer border-top border-warning d-flex justify-content-start">
                                    <a href="{{ route('show-career', $career->id) }}"
                                        class="btn btn-primary rounded-circle mr-md-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('edit-career', $career->id) }}"
                                        class="btn btn-success rounded-circle mr-md-2">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('delete-career', $career->id) }}"
                                        class="btn btn-danger rounded-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                                <!-- Career-Actions -->
                            </div>
                        </div>
                        <!-- /Career-Card -->
                    @endforeach
                </div>
                <!-- /Career-Container -->
            @else
                <!-- Career-Alert -->
                <div class="col-12 order-0">
                    <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                        <strong>Sorry! </strong>There is no career to show!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <!-- /Career-Alert -->
        @endif
    </div>
@endsection
