@extends('layouts.app')
@section('content')
    <h3 class="text-white">Career Path</h3>
    <form action="{{ route('storeCareer') }}" method="post" class="text-white">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Job Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    placeholder="Write your position">
                @error('title')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="company">Company</label>
                <input type="text" class="form-control @error('company') is-invalid @enderror" name="company" id="company"
                    placeholder="Write your company name">
                @error('company')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 col-lg-4">
                <label for="from">From</label>
                <input type="date" class="form-control @error('from') is-invalid @enderror" name="from" id="from">
                @error('from')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6 col-lg-4">
                <label for="to">To</label>
                <input type="date" class="form-control @error('to') is-invalid @enderror" name="to" id="to">
                @error('to')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-lg-4 align-self-end">
                <label>Still working there? &nbsp;</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status"
                        id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status"
                        id="inlineRadio2" value="0">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                @error('status')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                cols="30" rows="10" placeholder="Try to describe your job"></textarea>
            @error('description')
                <span class="badge badge-pill badge-danger">{{ $message }}</span>
            @enderror
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <div class="col-md-2 p-0">
            <button type="submit" class="btn btn-warning btn-lg btn-block">Save <i class="ri-save-3-line"></i></button>
        </div>
    </form>
@endsection
