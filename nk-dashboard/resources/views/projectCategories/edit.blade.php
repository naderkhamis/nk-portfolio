@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2">
            <h1>Edit Category</h1>
        </div>
        <!-- /Header -->
        @if ($category)
            <!-- Project-Category-Form -->
            <div class="col-md-6 col-xl-3">
                <!-- Edit-Category-Form -->
                <div class="card card-warning card-outline card-body bg-dark pt-1">
                    <!-- Form-Header -->
                    <div class="card-header text-warning px-0 border-0">
                        <h3 class="card-title">Edit Category</h3>
                    </div>
                    <!-- /Form-Header -->
                    <form action="{{ route('update-project-category') }}" method="post">
                        <!-- TOKEN -->
                        @csrf
                        <!-- /TOKEN -->
                        <!-- Hidden-Id -->
                        <input type="hidden" name="id" id="id" value="{{ $category->id }}">
                        <!-- /Hidden-Id -->
                        <!-- Category-Name -->
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" id="name"
                                class="form-control  @error('name') is-invalid @enderror"
                                placeholder="Please enter category name" value="{{ $category->name }}">
                            @error('name')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Category-Name -->
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
                <!-- /Edit-Category-Form -->
            </div>
            <!-- /Project-Category-Form -->
        @else
            <!-- Project-Category-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as category to edit!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Project-Category-Alert -->
        @endif
    </div>
@endsection
