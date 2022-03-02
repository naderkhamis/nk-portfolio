@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2">
            <h1>Statistic</h1>
        </div>
        <!-- /Header -->
        @if ($statistic)
            <!-- Statistic-Form -->
            <div class="col-md-6 col-xl-4 order-2 order-md-1">
                <!-- Edit-Statistic-Form -->
                <div class="card card-warning card-outline card-body bg-dark pt-1">
                    <!-- Form-Header -->
                    <div class="card-header text-warning px-0 border-0">
                        <h3 class="card-title">Edit Statistic</h3>
                    </div>
                    <!-- /Form-Header -->
                    <form action="{{ route('update-statistic') }}" method="post">
                        <!-- TOKEN -->
                        @csrf
                        <!-- /TOKEN -->
                        <!-- Hidden-Id -->
                        <input type="hidden" name="id" id="id" value="{{ $statistic->id }}">
                        <!-- /Hidden-Id -->
                        <!-- Statistic-Name -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name"
                                class="form-control  @error('name') is-invalid @enderror"
                                placeholder="Please enter statistic name" value="{{ $statistic->name }}">
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
                                placeholder="Please enter statistic count" value="{{ $statistic->count }}">
                            @error('count')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Statistic-Count -->
                        <!-- Statistic-Icon -->
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" name="icon" id="icon"
                                class="form-control  @error('icon') is-invalid @enderror"
                                placeholder="Please enter statistic icon" value="{{ $statistic->icon }}">
                            @error('icon')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Statistic-Icon -->
                        <!-- Statistic-Developer -->
                        <div class="form-group">
                            <label for="name">
                                Developer
                            </label>
                            <span class="float-right text-warning">
                                {{ $statistic->developer->name }}
                            </span>
                            <select name="dev_id" id="developer"
                                class="custom-select  @error('dev_id') is-invalid @enderror">
                                <option disabled selected>Please select a developer</option>
                                @foreach ($developers as $developer)
                                    <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                                @endforeach
                            </select>
                            @error('dev_id')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Statistic-Developer -->
                        <!-- Form-Submit-Button -->
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                                Update
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                        <!-- /Form-Submit-Button -->
                    </form>
                </div>
                <!-- /Edit-Statistic-Form -->
            </div>
        @else
            <!-- Career-Alert -->
            <div class="col-12">
                <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as statistic to edit!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Career-Alert -->
        @endif
    </div>
@endsection
