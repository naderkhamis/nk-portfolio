@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-1">
            <h1>Edit Service</h1>
        </div>
        <!-- /Header -->
        @if ($service)
            <!-- Service-Form -->
            <div class="col-md-8 col-xl-5 order-1 order-xl-0">
                <!-- Edit-Service-Form -->
                <div class="card card-warning card-outline card-body bg-dark pt-1">
                    <!-- Form-Header -->
                    <div class="card-header text-warning px-0 border-0">
                        <h3 class="card-title">Edit Service</h3>
                    </div>
                    <!-- /Form-Header -->
                    <form action="{{ route('update-service', $service->id) }}" method="post" class="text-white row"
                        enctype="multipart/form-data">
                        <!-- TOKEN -->
                        @csrf
                        <!-- /TOKEN -->
                        <!-- Hidden-Id -->
                        <input type="hidden" name="id" id="id" value="{{ $service->id }}">
                        <!-- /Hidden-Id -->
                        <!-- Service-Name -->
                        <div class="form-group col-md-6">
                            <label for="name">Service Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="Please enter service name" value="{{ $service->name }}">
                            @error('name')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Service-Name -->
                        <!-- Service-Icon -->
                        <div class="form-group col-md-6">
                            <label for="icon">service Icon</label>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon"
                                id="icon" placeholder="Please enter service icon name" value="{{ $service->icon }}">
                            @error('icon')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Service-Icon -->
                        <!-- Service-Image -->
                        <div class="form-group col-12">
                            <label for="image" class="control-label">Service Image</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                name="image" id="image">
                            @error('image')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Service-Image -->
                        <!-- Service-Description -->
                        <div class="form-group col-12">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                cols="30" rows="9" placeholder="Please enter certificate description">{{ $service->description }}</textarea>
                            @error('description')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Service-Description -->
                        <!-- Form-Submit-Button -->
                        <div class="col-lg-4 order-2">
                            <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                                Update
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                        <!-- /Form-Submit-Button -->
                    </form>
                </div>
                <!-- /Edit-Service-Form -->
            </div>
            <!-- /Service-Form -->
            <!-- Service-Existing-Image -->
            <div class="col-md-6 col-xl-4 order-0 order-xl-1 pb-3">
                <img src="{{ asset($service->image) }}" class="img-fluid border border-warning rounded"
                    alt="Certificate Image">
            </div>
            <!-- /Service-Existing-Image -->
        @else
            <!-- Service-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as service to edit!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Service-Alert -->
        @endif
    </div>
@endsection
