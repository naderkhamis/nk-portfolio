<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if ($developer)
        <h3 class="text-white">Personal Infromation</h3>
        <form action="{{ route('update-developer', $developer->id) }}" method="post" class="text-white row"
            enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="{{ $developer->id }}">
            <div class="form-row col-md-6">
                <div class="form-group col-12">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Enter a name" value="{{ $developer->name }}">
                    @error('name')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality"
                        id="nationality" placeholder="Enter a nationality" value="{{ $developer->nationality }}">
                    @error('nationality')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="birth-date">Birth Date</label>
                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                        name="date_of_birth" id="birth-date"
                        value="{{ Carbon::createFromFormat('Y-m-d H:i:s', $developer->date_of_birth)->format('Y-m-d') }}">
                    @error('date_of_birth')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12">
                    <label for="experience">Experience Years</label>
                    <input type="number" class="form-control @error('experience') is-invalid @enderror" name="experience"
                        id="experience" placeholder="Enter experience years" value="{{ $developer->experience }}">
                    @error('experience')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <div class="p-0">
                        <img src="{{ asset($developer->image) }}" class="img-fluid border border-warning rounded"
                            alt="Developer Image">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="image" class="control-label">Photo</label>
                    <input type="file" class="form-control-file align-self-center m-0 @error('image') is-invalid @enderror"
                        name="image" id="image" value="{{ $developer->image }}">
                    @error('image')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row col-md-6">
                <div class="form-group col">
                    <label for="introduction">About Me</label>
                    <textarea class="form-control @error('introduction') is-invalid @enderror" name="introduction"
                        id="introduction" cols="30" rows="9"
                        placeholder="Type about yourself">{{ $developer->introduction }}</textarea>
                    @error('introduction')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <div class="col-md-2 pr-3 pr-md-0">
                <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                    Update
                    <i class="fas fa-sync-alt"></i>
                </button>
            </div>
        </form>
    @endif
@endsection
