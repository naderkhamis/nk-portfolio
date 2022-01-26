<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if ($developer)
        <!-- Header -->
        <h3 class="text-white">Personal Infromation</h3>
        <!-- /Header -->
        <!-- Update-Form -->
        <form action="{{ route('update-developer', $developer->id) }}" method="post" class="text-white form-row col-xl-6"
            enctype="multipart/form-data">
            <!-- Hidden-ID -->
            <input type="hidden" name="id" id="id" value="{{ $developer->id }}">
            <!-- /Hidden-ID -->
            <!-- Developer-Name -->
            <div class="form-group col-12">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    placeholder="Enter a name" value="{{ $developer->name }}">
                <!-- Error-Message -->
                @error('name')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
                <!-- /Error-Message -->
            </div>
            <!-- /Developer-Name -->
            <!-- Developer-Nationality -->
            <div class="form-group col-md-6">
                <label for="nationality">Nationality</label>
                <input type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality"
                    id="nationality" placeholder="Enter a nationality" value="{{ $developer->nationality }}">
                <!-- Error-Message -->
                @error('nationality')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
                <!-- /Error-Message -->
            </div>
            <!-- /Developer-Nationality -->
            <!-- Developer-Birth-Date -->
            <div class="form-group col-md-6">
                <label for="birth-date">Birth Date</label>
                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth"
                    id="birth-date"
                    value="{{ Carbon::createFromFormat('Y-m-d H:i:s', $developer->date_of_birth)->format('Y-m-d') }}">
                <!-- Error-Message -->
                @error('date_of_birth')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
                <!-- /Error-Message -->
            </div>
            <!-- /Developer-Birth-Date -->
            <!-- Developer-Experience-Years -->
            <div class="form-group col-md-6">
                <label for="experience">Experience Years</label>
                <input type="number" class="form-control @error('experience') is-invalid @enderror" name="experience"
                    id="experience" placeholder="Enter experience years" value="{{ $developer->experience }}">
                <!-- Error-Message -->
                @error('experience')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
                <!-- /Error-Message -->
            </div>
            <!-- /Developer-Experience-Years -->
            <!-- Developer-Image -->
            <div class="form-group col-md-6">
                <label for="image" class="control-label">Photo</label>
                <input type="file" class="form-control-file align-self-center m-0 @error('image') is-invalid @enderror"
                    name="image" id="image">
                <!-- Error-Message -->
                @error('image')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
                <!-- /Error-Message -->
            </div>
            <!-- /Developer-Image -->
            {{-- <div class="form-group col-md-6">
                    <div class="p-0">
                        <img src="{{ asset($developer->image) }}" class="img-fluid border border-warning rounded"
                            alt="Developer Image">
                    </div>
                </div> --}}
            <!-- Developer-Introduction -->
            <div class="form-group col-12">
                <label for="introduction">About Me</label>
                <textarea class="form-control @error('introduction') is-invalid @enderror" name="introduction"
                    id="introduction" cols="30" rows="9"
                    placeholder="Type about yourself">{{ $developer->introduction }}</textarea>
                <!-- Error-Message -->
                @error('introduction')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
                <!-- /Error-Message -->
            </div>
            <!-- /Developer-Introduction -->
            <!-- TOKEN -->
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <!-- /TOKEN -->
            <!-- Update-Button -->
            <div class="col-md-2 pr-3 pr-md-0">
                <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                    Update
                    <i class="fas fa-sync-alt"></i>
                </button>
            </div>
            <!-- /Update-Button -->
        </form>
        <!-- /Update-Form -->
    @else
        <!-- Alert -->
        <div class="col-md-6 p-0">
            <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                <strong>Sorry! </strong>There is no such as information.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <!-- /Alert -->
    @endif
@endsection
