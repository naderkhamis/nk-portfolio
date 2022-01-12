@extends('layouts.app')
@section('content')
    <!-- Header -->
    <h3 class="text-white">Edit Statistic</h3>
    <!-- /Header -->
    @if ($statistic)
        <div class="card card-warning card-outline card-body bg-dark col-md-4 mt-3">
            <form action="{{ route('update-statistic') }}" method="post">
                <!-- Skill-Id-Hidden-Input -->
                <input type="hidden" name="id" id="name" value="{{ $statistic->id }}">
                <!-- /Skill-Id-Hidden-Input -->
                <!-- Skill-Name-Input -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror"
                        placeholder="Please enter statistic name" value="{{ $statistic->name }}">
                    <!-- Error-Message -->
                    @error('name')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                    <!-- /Error-Message -->
                </div>
                <!-- /Skill-Name-Input -->
                <!-- Statistic-Count-Input -->
                <div class="form-group">
                    <label for="count">Count</label>
                    <input type="number" name="count" id="count" class="form-control  @error('count') is-invalid @enderror"
                        placeholder="Please enter statistic count" value="{{ $statistic->count }}">
                    <!-- Error-Message -->
                    @error('count')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                    <!-- /Error-Message -->
                </div>
                <!-- /Statistic-Count-Input -->
                <!-- Statistic-Icon-Input -->
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" name="icon" id="icon" class="form-control  @error('icon') is-invalid @enderror"
                        placeholder="Please enter statistic icon" value="{{ $statistic->icon }}">
                    <!-- Error-Message -->
                    @error('icon')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                    <!-- /Error-Message -->
                </div>
                <!-- /Statistic-Icon-Input -->
                <!-- Statistic-Developer-Select -->
                <div class="form-group">
                    <label for="name">
                        Developer
                    </label>
                    <span class="float-right text-warning">
                        {{ $statistic->developer->name }}
                    </span>
                    <select name="dev_id" id="developer" class="custom-select  @error('dev_id') is-invalid @enderror">
                        <option disabled selected>Please select a developer</option>
                        @foreach ($developers as $developer)
                            <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                        @endforeach
                    </select>
                    <!-- Error-Message -->
                    @error('dev_id')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                    <!-- /Error-Message -->
                </div>
                <!-- /Statistic-Developer-Select -->
                <!-- TOKEN -->
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                <!-- /TOKEN -->
                <!-- Form-Submit-Button -->
                <div class="col-md-4 p-0">
                    <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                        Update
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
                <!-- /Form-Submit-Button -->
            </form>
        </div>
    @else
        <!-- Alert -->
        <div class="col-md-6 p-0">
            <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                <strong>Sorry! </strong>There is no such as statistic.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <!-- /Alert -->
    @endif

@endsection
