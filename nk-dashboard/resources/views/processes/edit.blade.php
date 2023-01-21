@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-1">
            <h1>Edit Process</h1>
        </div>
        <!-- /Header -->
        @if ($process)
            <!-- Process-Form -->
            <div id="form-create" class="col-md-8 col-xl-5 order-1 order-xl-0">
                <!-- Edit-Process-Form -->
                <div class="card card-warning card-outline card-body bg-dark pt-1">
                    <!-- Form-Header -->
                    <div class="card-header text-warning px-0 border-0">
                        <h3 class="card-title">Edit Process</h3>
                    </div>
                    <!-- /Form-Header -->
                    <form action="{{ route('update-process', $process->id) }}" method="post" class="text-white row">
                        <!-- TOKEN -->
                        @csrf
                        <!-- /TOKEN -->
                        <!-- Hidden-Id -->
                        <input type="hidden" name="id" id="id" value="{{ $process->id }}">
                        <!-- /Hidden-Id -->
                        <!-- Process-Name -->
                        <div class="form-group col-12">
                            <label for="name">Process Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="Please enter process name" value="{{ $process->name }}">
                            @error('name')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Service-Name -->
                        <!-- Process-Icon -->
                        <div class="form-group col-12">
                            <label for="icon">Process Icon</label>
                            <i class="fas fa-{{ $process->icon }} text-warning float-right"></i>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon"
                                id="icon" placeholder="Please enter process icon name" value="{{ $process->icon }}">
                            @error('icon')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Process-Icon -->
                        <!-- Process-Description -->
                        <div class="form-group col-12">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                cols="30" rows="9" placeholder="Please enter process description">{{ $process->description }}</textarea>
                            @error('description')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Process-Description -->
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
            <!-- /Process-Form -->
        @else
            <!-- Process-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as process to edit!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Process-Alert -->
        @endif
    </div>
@endsection
