<?php
use Carbon\Carbon;
?>
@extends('layouts.app')
@section('content')
    @if ($clientReview)
        <h3 class="text-white">Edit Client Review</h3>
        <form action="{{ route('update-review', $clientReview->id) }}" method="post" class="text-white row"
            enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="{{ $clientReview->id }}">
            <div class="form-row col-md-6">
                <div class="form-group col-md-6">
                    <label for="name">Client Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Please enter client's name" value="{{ $clientReview->name }}">
                    @error('name')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="company">Company</label>
                    <input type="text" class="form-control @error('company') is-invalid @enderror" name="company"
                        id="company" placeholder="Please enter company's name" value="{{ $clientReview->company }}">
                    @error('company')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date"
                        value="{{ Carbon::createFromFormat('Y-m-d H:i:s', $clientReview->date)->format('Y-m-d') }}">
                    @error('date')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="image" class="control-label">Photo</label>
                    <input type="file" class="form-control-file align-self-center m-0 @error('image') is-invalid @enderror"
                        name="image" id="image">
                    @error('image')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="developer">Developer</label>
                    <select name="dev_id" id="developer" class="form-control">
                        @foreach ($developers as $developer)
                            <option value="{{ $developer->id }}" selected>{{ $developer->name }}</option>
                        @endforeach
                    </select>
                    @error('dev_id')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <div class="p-0">
                        <img src="{{ asset($clientReview->image) }}" class="img-fluid border border-warning rounded"
                            alt="Developer Image">
                    </div>
                </div>
            </div>
            <div class="form-row col-md-6">
                <div class="form-group col">
                    <label for="review">Review</label>
                    <textarea class="form-control @error('review') is-invalid @enderror" name="review" id="review" cols="30"
                        rows="9" placeholder="Type about yourself">{{ $clientReview->review }}</textarea>
                    @error('review')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <div class="col-md-2 p-0">
                <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                    Update
                    <i class="fas fa-sync-alt"></i>
                </button>
            </div>
        </form>
    @endif
@endsection
