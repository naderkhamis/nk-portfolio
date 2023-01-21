@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2">
            <h1>Edit Project</h1>
        </div>
        <!-- /Header -->
        @if ($project)
            <!-- Certificate-Form -->
            <div class="col-md-8 col-xl-5 order-1 order-xl-0">
                <!-- Edit-Certificate-Form -->
                <div class="card card-warning card-outline card-body bg-dark pt-1">
                    <!-- Form-Header -->
                    <div class="card-header text-warning px-0 border-0">
                        <h3 class="card-title">Edit Project</h3>
                    </div>
                    <!-- /Form-Header -->
                    <form action="{{ route('update-project') }}" method="post" class="text-white row"
                        enctype="multipart/form-data">
                        <!-- TOKEN -->
                        @csrf
                        <!-- /TOKEN -->
                        <!-- Hidden-Id -->
                        <input type="hidden" name="id" id="id" value="{{ $project->id }}">
                        <!-- /Hidden-Id -->
                        <!-- Project-Name -->
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="Please enter project name" value="{{ $project->name }}">
                            @error('name')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Project-Name -->
                        <!-- Project-Category -->
                        <div class="form-group col-md-6">
                            <label for="category">Category</label>
                            <span class="text-warning float-right">{{ $project->category->name }}</span>
                            <select name="cat_id" id="category"
                                class="custom-select @error('cat_id') is-invalid @enderror">
                                <option selected disabled>Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('cat_id')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Project-Category -->
                        <!-- Project-URL -->
                        <div class="form-group col-md-6">
                            <label for="url">Url</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                                id="url" placeholder="Please enter project URL" value="{{ $project->url }}">
                            @error('url')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Project-URL -->
                        <!-- Project-Image -->
                        <div class="form-group col-md-6">
                            <label for="image" class="control-label">Project Photo</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                name="image" id="image">
                            @error('image')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Project-Image -->
                        <!-- Project-Description -->
                        <div class="form-group col-12">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                cols="30" rows="9" placeholder="Please enter certificate description">{{ $project->description }}</textarea>
                            @error('description')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Project-Description -->
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
                <!-- /Edit-Project-Form -->
            </div>
            <!-- /Certificate-Form -->
            <!-- Project-Existing-Image -->
            <div class="col-md-6 col-xl-4 order-0 order-xl-1 pb-3">
                <img src="{{ asset($project->image) }}" class="img-fluid border border-warning rounded"
                    alt="Certificate Image">
            </div>
            <!-- /Project-Existing-Image -->
        @else
            <!-- Project-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as project to edit!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Project-Alert -->
        @endif
    </div>
@endsection
