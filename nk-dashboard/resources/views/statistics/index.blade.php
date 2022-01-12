@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- New-Statistics-Form -->
        <div class="col-xl-3 p-0 mb-4 mr-xl-5">
            <!-- Header -->
            <div class="col-12 p-0 mb-3">
                <h1>Statistcs</h1>
            </div>
            <!-- /Header -->
            <!-- Statistics-Form -->
            <div class="card card-warning card-outline card-body bg-dark">
                <form action="{{ route('store-statistic') }}" method="post">
                    <!-- Statistics-Name-Input -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror"
                            placeholder="Please enter statistic name">
                        <!-- Error-Message -->
                        @error('name')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                        <!-- /Error-Message -->
                    </div>
                    <!-- /Statistics-Name-Input -->
                    <!-- Statistics-Number-Input -->
                    <div class="form-group">
                        <label for="count">Count</label>
                        <input type="number" name="count" id="count"
                            class="form-control  @error('count') is-invalid @enderror"
                            placeholder="Please enter statistic number">
                        <!-- Error-Message -->
                        @error('count')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                        <!-- /Error-Message -->
                    </div>
                    <!-- /Statistics-Number-Input -->
                    <!-- Statistics-Icon-Input -->
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" name="icon" id="icon" class="form-control  @error('icon') is-invalid @enderror"
                            placeholder="Please enter statistic icon">
                        <!-- Error-Message -->
                        @error('icon')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                        <!-- /Error-Message -->
                    </div>
                    <!-- /Statistics-Icon-Input -->
                    <!-- Statistics-Developer-Select -->
                    <div class="form-group">
                        <label for="icon">Developer</label>
                        @if ($developers)
                            <select name="dev_id" id="developer" class="custom-select  @error('icon') is-invalid @enderror">
                                <option selected disabled>Please select a developer</option>
                                @foreach ($developers as $developer)
                                    <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                                @endforeach
                            </select>
                            <!-- Error-Message -->
                            @error('dev_id')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                            <!-- /Error-Message -->
                        @endif
                    </div>
                    <!-- /Statistics-Developer-Select -->
                    <!-- TOKEN -->
                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                    <!-- /TOKEN -->
                    <!-- Form-Submit-Button -->
                    <div class="col-md-4 p-0">
                        <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                            Save
                            <i class="fas fa-save"></i>
                        </button>
                    </div>
                    <!-- /Form-Submit-Button -->
                </form>
            </div>
            <!-- /Statistics-Form -->
        </div>
        <!-- /New-Statistics-Form -->
        <!-- Statistics-Section -->
        @if (count($statistics))
            <div class="col-xl-8 p-0 pt-lg-5">
                <!-- Statistics-Container -->
                <div class="row">
                    @foreach ($statistics as $statistic)
                        <div class="col-md-6 col-lg-4 pt-3 pr-lg-3 text-center">
                            <div class="card card-warning card-outline bg-dark p-0">
                                <!-- Card-Body -->
                                <div class="card-body">
                                    <!-- Statistics-Icon -->
                                    <div class="text-center">
                                        <i class="fas fa-{{ $statistic->icon }} fa-10x"></i>
                                    </div>
                                    <!-- /Statistics-Icon -->
                                    <!-- Statistics-Name -->
                                    <h5 class="text-center text-warning py-2">{{ $statistic->name }}</h5>
                                    <!-- /Statistics-Name -->
                                    <!-- Statistics-Count -->
                                    <div class="text-center text-warning">
                                        <h1>
                                            {{ $statistic->count }}
                                        </h1>
                                    </div>
                                    <!-- /Statistics-Count -->
                                </div>
                                <!-- /Card-Body -->
                                <!-- Statistics-Actions -->
                                <div class="card-footer p-2 px-3">
                                    <a href="{{ route('edit-statistic', $statistic->id) }}"
                                        class="btn btn-success rounded-circle mx-2">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('delete-statistic', $statistic->id) }}"
                                        class="btn btn-danger rounded-circle mx-2">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                                <!-- /Statistics-Actions -->
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- /Statistics-Container -->
            </div>
            <!-- /Statistics-Section -->
        @else
            <!-- Statistics-Alert -->
            <div class="col-md-4 p-0">
                <!-- Alert -->
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no statistics to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- /Alert -->
            </div>
            <!-- /Statistics-Alert -->
        @endif
    </div>
@endsection
