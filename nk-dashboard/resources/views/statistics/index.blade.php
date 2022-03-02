@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2 d-flex justify-content-between align-items-center">
            <h1>Statistics</h1>
            <!-- Create-New-Certificate -->
            <div class="d-md-none">
                <a href="#form-create" class="btn btn-warning font-weight-bold rounded-pill">
                    New
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <!-- /Create-New-Certificate -->
        </div>
        <!-- /Header -->
        <!-- Statistic-Form -->
        <div id="form-create" class="col-md-6 col-xl-4 order-2 order-md-1">
            <!-- New-Statistic-Form -->
            <div class="card card-warning card-outline card-body bg-dark pt-1">
                <!-- Form-Header -->
                <div class="card-header text-warning px-0 border-0">
                    <h3 class="card-title">Create Statistic</h3>
                </div>
                <!-- /Form-Header -->
                <form action="{{ route('store-statistic') }}" method="post">
                    <!-- TOKEN -->
                    @csrf
                    <!-- /TOKEN -->
                    <!-- Statistic-Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror"
                            placeholder="Please enter statistic name">
                        @error('name')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Statistic-Name -->
                    <!-- Statistic-Count -->
                    <div class="form-group">
                        <label for="count">Count</label>
                        <input type="number" name="count" id="count"
                            class="form-control  @error('count') is-invalid @enderror"
                            placeholder="Please enter statistic number">
                        @error('count')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Statistic-Count -->
                    <!-- Statistic-Icon -->
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" name="icon" id="icon" class="form-control  @error('icon') is-invalid @enderror"
                            placeholder="Please enter statistic icon">
                        @error('icon')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Statistic-Icon -->
                    <!-- Statistic-Developer -->
                    <div class="form-group">
                        <label for="icon">Developer</label>
                        @if ($developers)
                            <select name="dev_id" id="developer" class="custom-select  @error('icon') is-invalid @enderror">
                                <option selected disabled>Please select a developer</option>
                                @foreach ($developers as $developer)
                                    <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                                @endforeach
                            </select>
                            @error('dev_id')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        @endif
                    </div>
                    <!-- /Statistic-Developer -->
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
            <!-- /New-Statistic-Form -->
        </div>
        <!-- /Statistic-Form -->
        <!-- Statistics-Section -->
        @if (count($statistics))
            <div class="col-md-6 col-xl-8 order-1 order-md-2">
                <!-- Statistics-Container -->
                <div class="row row-cols-1 row-cols-xl-3">
                    @foreach ($statistics as $statistic)
                        <!-- Statistic-Card -->
                        <div class="card-deck px-2">
                            <div class="card card-warning card-outline bg-dark">
                                <!-- Statistic-Information -->
                                <div class="card-body text-center">
                                    <!-- Statistics-Icon -->
                                    <div>
                                        <i class="fas fa-{{ $statistic->icon }} fa-10x"></i>
                                    </div>
                                    <!-- /Statistics-Icon -->
                                    <!-- Statistics-Name -->
                                    <h5 class="text-warning py-2">{{ $statistic->name }}</h5>
                                    <!-- /Statistics-Name -->
                                    <!-- Statistics-Count -->
                                    <div class="text-warning">
                                        <h1>
                                            {{ $statistic->count }}
                                        </h1>
                                    </div>
                                    <!-- /Statistics-Count -->
                                </div>
                                <!-- /Statistic-Information -->
                                <!-- Statistics-Actions -->
                                <div class="card-footer">
                                    <a href="{{ route('edit-statistic', $statistic->id) }}"
                                        class="btn btn-success rounded-circle mr-md-2">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('delete-statistic', $statistic->id) }}"
                                        class="btn btn-danger rounded-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                                <!-- /Statistics-Actions -->
                            </div>
                        </div>
                        <!-- /Statistic-Card -->
                    @endforeach
                </div>
                <!-- /Statistics-Container -->
            </div>
            <!-- /Statistics-Section -->
        @else
            <!-- Statistics-Alert -->
            <div class="col-12 order-0">
                <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no statistics to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Statistics-Alert -->
        @endif
    </div>
@endsection
