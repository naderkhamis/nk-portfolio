<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2">
            <h1>Career Job</h1>
        </div>
        <!-- /Header -->
        @if ($career)
            <!-- Career-Form -->
            <div class="col-md-6 col-xl-4 order-2 order-md-1">
                <!-- Edit-Career-Form -->
                <div class="card card-warning card-outline card-body bg-dark pt-1">
                    <!-- Form-Header -->
                    <div class="card-header text-warning px-0 border-0">
                        <h3 class="card-title">Edit Career</h3>
                    </div>
                    <!-- /Form-Header -->
                    <form action="{{ route('update-career', $career->id) }}" method="post" class="text-white row"
                        enctype="multipart/form-data">
                        <!-- TOKEN -->
                        @csrf
                        <!-- /TOKEN -->
                        <!-- Hidden-Id -->
                        <input type="hidden" name="id" id="id" value="{{ $career->id }}">
                        <!-- /Hidden-Id -->
                        <!-- Job-Title -->
                        <div class="form-group col-lg-6">
                            <label for="title">Job Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                id="title" value="{{ $career->title }}" placeholder="Enter job title">
                            @error('title')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Job-Title -->
                        <!-- Career-Company -->
                        <div class="form-group col-lg-6">
                            <label for="company">Company</label>
                            <input type="text" class="form-control @error('company') is-invalid @enderror" name="company"
                                id="company" value="{{ $career->company }}" placeholder="Enter company name">
                            @error('company')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Career-Company -->
                        <!-- Company-Logo -->
                        {{-- <div class="form-group col-lg-6">
                            <label for="image" class="control-label">Company Logo</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"
                                id="image">
                            @error('image')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <!-- /Company-Logo -->
                        <!-- Career-From-Date -->
                        <div class="form-group col-lg-6">
                            <label for="from">From</label>
                            <input type="date" class="form-control @error('from') is-invalid @enderror" name="from"
                                id="from"
                                value="{{ Carbon::createFromFormat('Y-m-d H:i:s', $career->from_date)->format('Y-m-d') }}">
                            @error('from')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Career-From-Date -->
                        @if ($career->status === 0)
                            <!-- Career-To-Date -->
                            <div class="form-group col-lg-6">
                                <label for="to">To</label>
                                <input type="date" class="form-control @error('to') is-invalid @enderror" name="to" id="to"
                                    value="{{ Carbon::createFromFormat('Y-m-d H:i:s', $career->to_date)->format('Y-m-d') }}">
                                @error('to')
                                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- /Career-To-Date -->
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
                                        type="radio" name="status" id="customRadio2" value="0" checked>
                                    <label class="custom-control-label" for="customRadio2">No</label>
                                </div>
                                @error('status')
                                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- /Career-Status -->
                        @else
                            <!-- Career-To-Date -->
                            <div class="form-group col-lg-6">
                                <label for="to">To</label>
                                <input type="date" class="form-control @error('to') is-invalid @enderror" name="to" id="to"
                                    value="{{ $currentDate }}">
                                @error('to')
                                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- /Career-To-Date -->
                            <!-- Career-Status -->
                            <div class="form-group col-12 d-flex">
                                <label class="m-0">Still working there? &nbsp;</label>
                                <div class="custom-control custom-radio mx-3">
                                    <input
                                        class="custom-control-input custom-control-input-warning @error('status') is-invalid @enderror"
                                        type="radio" name="status" id="customRadio1" value="1" checked>
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
                        @endif
                        <!-- /Career-Status -->
                        <!-- Career-Developer -->
                        {{-- <div class="form-group col-lg-6">
                            <label for="developer">Developer</label>
                            <select name="dev_id" id="developer" class="form-control">
                                @foreach ($developers as $developer)
                                    <option value="{{ $developer->id }}" selected>{{ $developer->name }}</option>
                                @endforeach
                            </select>
                            @error('developer')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <!-- /Career-Developer -->
                        <!-- Career-Description -->
                        <div class="form-group col-12">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                                id="description" cols="30" rows="9"
                                placeholder="Describe your job">{{ $career->description }}</textarea>
                            @error('description')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Career-Description -->
                        <!-- Form-Submit-Button -->
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                                Update
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                        <!-- /Form-Submit-Button -->
                    </form>
                </div>
                <!-- /Edit-Career-Form -->
            </div>
            <!-- /Career-Form -->
        @else
            <!-- Career-Alert -->
            <div class="col-12">
                <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as career to edit!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Career-Alert -->
        @endif
    </div>
@endsection
