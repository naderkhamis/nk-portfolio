@extends('layouts.app')
@section('content')
    @if ($project)
        <h3 class="text-white">Edit Project</h3>
        <!-- Edit-Project-Form -->
        <form action="{{ route('update-project') }}" method="post" class="text-white row" enctype="multipart/form-data">
            <!-- Project-ID -->
            <input type="hidden" name="id" id="id" value="{{ $project->id }}">
            <!-- /Project-ID -->
            <div class="form-row col-lg-6">
                <!-- Project-Name -->
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Please enter project name" value="{{ $project->name }}">
                    @error('name')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- /Project-Name -->
                <!-- Project-Category -->
                <div class="form-group col-md-6">
                    <label for="category">Category</label>
                    <span class="text-warning float-right">{{ $project->category->name }}</span>
                    <select name="cat_id" id="category" class="custom-select @error('cat_id') is-invalid @enderror">
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
                    <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="url"
                        placeholder="Please enter project URL" value="{{ $project->url }}">
                    @error('url')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- /Project-URL -->
                <!-- Project-Developer -->
                <div class="form-group col-md-6">
                    <label for="developer">Developer</label>
                    <span class="text-warning float-right">{{ $project->developer->name }}</span>
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
                <!-- /Project-Developer -->
                <!-- Project-Image -->
                <div class="form-group col-12">
                    <label for="image" class="control-label">Project Photo</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"
                        id="image">
                    @error('image')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-lg-6  order-md-2">
                    <div class="p-0">
                        <img src="{{ asset($project->image) }}" class="img-fluid border border-warning rounded"
                            alt="Certificate Image">
                    </div>
                </div>
                <!-- /Project-Image -->
            </div>
            <!-- Project-Description -->
            <div class="form-row col-lg-6">
                <div class="form-group col">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                        id="description" cols="30" rows="9"
                        placeholder="Please enter certificate description">{{ $project->description }}</textarea>
                    @error('description')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- /Project-Description -->
            <!-- Token -->
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <!-- /Token -->
            <!-- Save-Button -->
            <div class="col-md-1 pr-3 pr-md-0">
                <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                    Save
                    <i class="fas fa-save"></i>
                </button>
            </div>
            <!-- Save-Button -->
        </form>
        <!-- /Edit-Project-Form -->
    @else
        <!-- Alert -->
        <div class="alert alert-danger alert-dismissible fade show col-md-6 rounded-pill" role="alert">
            <strong>Sorry! </strong> There is no such as project.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- /Alert -->
    @endif
@endsection
