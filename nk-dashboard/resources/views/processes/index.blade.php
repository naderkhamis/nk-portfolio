@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2 d-flex justify-content-between align-items-center">
            <h1>Processes</h1>
            <!-- Create-New-Process -->
            <div class="d-md-none">
                <a href="#form-create" class="btn btn-warning font-weight-bold rounded-pill">
                    New
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <!-- /Create-New-Process -->
        </div>
        <!-- /Header -->
        <!-- Process-Form -->
        <div class="col-md-6 col-xl-4 order-2 order-md-1">
            <!-- New-Service-Form -->
            <div class="card card-warning card-outline card-body bg-dark pt-1">
                <!-- Form-Header -->
                <div class="card-header text-warning px-0 border-0">
                    <h3 class="card-title">Create Process</h3>
                </div>
                <!-- /Form-Header -->
                <form action="{{ route('store-process') }}" method="post" class="text-white row">
                    <!-- TOKEN -->
                    @csrf
                    <!-- /TOKEN -->
                    <!-- Process-Name -->
                    <div class="form-group col-12">
                        <label for="name">Process Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                            placeholder="Please enter process name">
                        @error('name')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Process-Name -->
                    <!-- Process-Icon -->
                    <div class="form-group col-12">
                        <label for="icon">Process Icon</label>
                        <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" id="icon"
                            placeholder="Please enter process icon name">
                        @error('icon')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Process-Icon -->
                    <!-- Process-Developer -->
                    <div class="form-group col-12">
                        <label for="developer">Developer</label>
                        <select name="dev_id" id="developer" class="custom-select @error('dev_id') is-invalid @enderror">
                            <option selected disabled>Select a developer</option>
                            @foreach ($developers as $developer)
                                <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                            @endforeach
                        </select>
                        @error('dev_id')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Process-Developer -->
                    <!-- Process-Description -->
                    <div class="form-group col-12">
                        <label for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                            id="description" cols="30" rows="9" placeholder="Please enter process description"></textarea>
                        @error('description')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Process-Description -->
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
        <!-- /Process-Form -->
        <!-- Process-Section -->
        @if (count($processes))
            <div class="col-md-6 col-xl-8 order-1 order-md-2">
                <!-- Processes-Container -->
                <div class="row row-cols-1 row-cols-xl-3">
                    @foreach ($processes as $process)
                        <!-- Process-Card -->
                        <div class="card-deck px-2">
                            <div class="card card-warning card-outline bg-dark">
                                <!-- Process-Information -->
                                <div class="card-body text-center">
                                    <!-- Process-Icon -->
                                    <div>
                                        <i class="fas fa-{{ $process->icon }} fa-10x"></i>
                                    </div>
                                    <!-- /Process-Icon -->
                                    <!-- Process-Name -->
                                    <h5 class="text-warning pt-2 m-0">{{ $process->name }}</h5>
                                    <!-- /Process-Name -->
                                </div>
                                <!-- /Process-Information -->
                                <!-- Process-Actions -->
                                <div class="card-footer">
                                    <a href="{{ route('show-process', $process->id) }}"
                                        class="btn btn-primary rounded-circle mr-md-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('edit-process', $process->id) }}"
                                        class="btn btn-success rounded-circle mr-md-2">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('delete-process', $process->id) }}"
                                        class="btn btn-danger rounded-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                                <!-- /Process-Actions -->
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <!-- Process-Alert -->
            <div class="col-12 order-0">
                <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no processes to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Process-Alert -->
        @endif
        <!-- /Process-Section -->
    </div>
@endsection
