@extends('layouts.app')
@section('content')
    <h3 class="text-white">Personal Information</h3>
    <form action="{{ route('store-developer') }}" method="post" class="text-white form-row" enctype="multipart/form-data">
        <div class="form-row col-md-6">
            <div class="form-group col">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    placeholder="Enter a name">
                @error('name')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="nationality">Nationality</label>
                <input type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality"
                    id="nationality" placeholder="Enter a nationality">
                @error('nationality')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="birth-date">Birth Date</label>
                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth"
                    id="birth-date">
                @error('date_of_birth')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="experience">Experience Years</label>
                <input type="number" class="form-control @error('experience') is-invalid @enderror" name="experience"
                    id="experience" placeholder="Enter experience years">
                @error('experience')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="image" class="control-label">Photo</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image">
                @error('image')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row col-md-6">
            <div class="form-group col">
                <label for="introduction">About</label>
                <textarea class="form-control @error('introduction') is-invalid @enderror" name="introduction"
                    id="introduction" cols="30" rows="9" placeholder="Type about yourself"></textarea>
                @error('introduction')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <div class="col-md-1 pr-3 pr-md-0">
            <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                Save
                <i class="fas fa-save"></i>
            </button>
        </div>
    </form>
@endsection
