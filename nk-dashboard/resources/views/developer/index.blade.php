@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2 d-flex justify-content-between align-items-center">
            <h1>Personal Information</h1>
            <!-- Create-New-Information -->
            <div class="d-md-none">
                <a href="#form-create" class="btn btn-warning font-weight-bold rounded-pill">
                    New
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <!-- /Create-New-Information -->
        </div>
        <!-- /Header -->
        <!-- Information-Form -->
        <div id="form-create" class="col-md-6 col-xl-4 order-2 order-md-1">
            <!-- New-Information-Form -->
            <div class="card card-warning card-outline card-body bg-dark pt-1">
                <!-- Form-Header -->
                <div class="card-header text-warning px-0 border-0">
                    <h3 class="card-title">Create Developer</h3>
                </div>
                <!-- /Form-Header -->
                <form action="{{ route('store-developer') }}" method="post" class="row"
                    enctype="multipart/form-data">
                    <!-- TOKEN -->
                    @csrf
                    <!-- /TOKEN -->
                    <!-- Developer-Name -->
                    <div class="form-group col-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                            placeholder="Enter a name">
                        @error('name')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Developer-Name -->
                    <!-- Developer-Nationality -->
                    <div class="form-group col-md-6">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control @error('nationality') is-invalid @enderror"
                            name="nationality" id="nationality" placeholder="Enter a nationality">
                        @error('nationality')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Developer-Nationality -->
                    <!-- Developer-Birth-Date -->
                    <div class="form-group col-md-6">
                        <label for="birth-date">Birth Date</label>
                        <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                            name="date_of_birth" id="birth-date">
                        @error('date_of_birth')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Developer-Birth-Date -->
                    <!-- Developer-Experience-Years -->
                    <div class="form-group col-md-6">
                        <label for="experience">Experience Years</label>
                        <input type="number" class="form-control @error('experience') is-invalid @enderror"
                            name="experience" id="experience" placeholder="Enter experience years">
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
                            id="introduction" cols="30" rows="9" placeholder="Type about yourself"></textarea>
                        @error('introduction')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Developer-Introduction -->
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
            <!-- /New-Information-Form -->
        </div>
        <!-- /Information-Form -->
        <!-- Information-Section -->
        @if (count($developers))
            <div class="col-md-6 col-xl-8 order-1 order-md-2">
                <!-- Information-Container -->
                <div class="row row-cols-1 row-cols-xl-3">
                    @foreach ($developers as $developer)
                        <!-- Information-Card -->
                        <div class="card-deck px-2">
                            <div class="card card-warning card-outline bg-dark">
                                <!-- Developer-Image -->
                                <img src="{{ asset($developer->image) }}" class="card-img-top rounded"
                                    alt="Developer Image">
                                <!-- /Developer-Image -->
                                <!-- Developer-Information -->
                                <div class="card-body box-profile">
                                    <!-- Developer-Name -->
                                    <h5 class="card-title text-warning py-2">{{ $developer->name }}</h5>
                                    <!-- /Developer-Name -->
                                    <!-- Developer-Introduction -->
                                    <p class="card-text">{{ $developer->introduction }}</p>
                                    <!-- /Developer-Introduction -->
                                </div>
                                <!-- /Developer-Information -->
                                <!-- Information-Actions -->
                                <div class="card-footer">
                                    <a href="{{ route('show-developer', $developer->id) }}"
                                        class="btn btn-primary rounded-circle mr-md-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('edit-developer', $developer->id) }}"
                                        class="btn btn-success rounded-circle mr-md-2">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('delete-developer', $developer->id) }}"
                                        class="btn btn-danger rounded-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                                <!-- /Information-Actions -->
                            </div>
                        </div>
                        <!-- /Information-Card -->
                    @endforeach
                </div>
                <!-- /Information-Container -->
            </div>
        @else
            <!-- Information-Alert -->
            <div class="col-12 order-0">
                <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no information to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Information-Alert -->
        @endif
        <!-- /Information-Section -->
    </div>
@endsection
