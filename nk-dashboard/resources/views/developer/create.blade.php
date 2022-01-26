@extends('layouts.app')
@section('content')
    <h3 class="text-white">Personal Information</h3>
    <!-- Create-Form -->
    <form action="{{ route('store-developer') }}" method="post" class="text-white form-row col-xl-6"
        enctype="multipart/form-data">
        <!-- Developer-Name -->
        <div class="form-group col-12">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                placeholder="Enter a name">
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
                id="nationality" placeholder="Enter a nationality">
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
                id="birth-date">
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
                id="experience" placeholder="Enter experience years">
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
        <!-- Developer-Introduction -->
        <div class="form-group col-12">
            <label for="introduction">About Me</label>
            <textarea class="form-control @error('introduction') is-invalid @enderror" name="introduction" id="introduction"
                cols="30" rows="9" placeholder="Type about yourself"></textarea>
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
        <!-- Save-Button -->
        <div class="col-md-2 pr-3 pr-md-0">
            <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                Save
                <i class="fas fa-save"></i>
            </button>
        </div>
        <!-- /Save-Button -->
    </form>
    <!-- /Create-Form -->
@endsection
