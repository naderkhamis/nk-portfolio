@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2 d-flex justify-content-between align-items-center">
            <h1>Services</h1>
            <!-- Create-New-Service -->
            <div class="d-md-none">
                <a href="#form-create" class="btn btn-warning font-weight-bold rounded-pill">
                    New
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <!-- /Create-New-Service -->
        </div>
        <!-- /Header -->
        <!-- Service-Form -->
        <div id="form-create" class="col-md-6 col-xl-4 order-2 order-md-1">
            <!-- New-Service-Form -->
            <div class="card card-warning card-outline card-body bg-dark pt-1">
                <!-- Form-Header -->
                <div class="card-header text-warning px-0 border-0">
                    <h3 class="card-title">Create Service</h3>
                </div>
                <!-- /Form-Header -->
                <form action="{{ route('store-service') }}" method="post" class="text-white row"
                    enctype="multipart/form-data">
                    <!-- TOKEN -->
                    @csrf
                    <!-- /TOKEN -->
                    <!-- Service-Name -->
                    <div class="form-group col-md-6">
                        <label for="name">Service Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Please enter service name">
                        @error('name')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Service-Name -->
                    <!-- Service-Icon -->
                    <div class="form-group col-md-6">
                        <label for="icon">service Icon</label>
                        <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon"
                            id="icon" placeholder="Please enter service icon name">
                        @error('icon')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Service-Icon -->
                    <!-- Service-Image -->
                    <div class="form-group col-12">
                        <label for="image" class="control-label">Service Image</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"
                            id="image">
                        @error('image')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Service-Image -->
                    <!-- Service-Description -->
                    <div class="form-group col-12">
                        <label for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            cols="30" rows="9" placeholder="Enter certificate description"></textarea>
                        @error('description')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Service-Description -->
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
        <!-- /Service-Form -->
        <!-- Service-Section -->
        @if (count($services))
            <div class="col-md-6 col-xl-8 order-1 order-md-2">
                <!-- Services-Container -->
                <div class="row row-cols-1 row-cols-xl-3">
                    @foreach ($services as $service)
                        <!-- Service-Card -->
                        <div class="card-deck px-2">
                            <div class="card card-warning card-outline bg-dark">
                                <!-- Service-Image -->
                                <img src="{{ asset($service->image) }}" class="card-img-top rounded-bottom"
                                    alt="Project-Image">
                                <!-- /Service-Image -->
                                <!-- Service-Information -->
                                <div class="card-body box-profile">
                                    <div class="text-warning d-flex py-2">
                                        <!-- Service-Icon -->
                                        <div>
                                            <i class="fas fa-{{ $service->icon }} mr-2"></i>
                                        </div>
                                        <!-- /Service-Icon -->
                                        <!-- Service-Name -->
                                        <h5 class="card-title">{{ $service->name }}</h5>
                                        <!-- /Service-Name -->
                                    </div>
                                    <!-- Service-Description -->
                                    <p class="card-text">{{ $service->description }}</p>
                                    <!-- /Service-Description -->
                                </div>
                                <!-- /Service-Information -->
                                <!-- Service-Actions -->
                                <div class="card-footer">
                                    <a href="{{ route('show-service', $service->id) }}"
                                        class="btn btn-primary rounded-circle mr-md-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('edit-service', $service->id) }}"
                                        class="btn btn-success rounded-circle mr-md-2">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('delete-service', $service->id) }}"
                                        class="btn btn-danger rounded-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                                <!-- /Service-Actions -->
                            </div>
                        </div>
                        <!-- /Service-Card -->
                    @endforeach
                </div>
            </div>
        @else
            <!-- Service-Alert -->
            <div class="col-12 order-0">
                <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no services to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Service-Alert -->
        @endif
        <!-- /Service-Section -->
    </div>
@endsection
