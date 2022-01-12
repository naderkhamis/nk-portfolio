@extends('layouts.app')
@section('content')
    <h3 class="text-white">Create Project</h3>
    <!-- Create-Project-Form -->
    <form action="{{ route('store-project') }}" method="post" class="text-white row" enctype="multipart/form-data">
        <div class="form-row col-lg-6">
            <!-- Project-Name -->
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    placeholder="Please enter project name">
                @error('name')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- /Project-Name -->
            <!-- Project-Category -->
            <div class="form-group col-md-6">
                <label for="category">Category</label>
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
            <div class="form-group col-md-6">
                <label for="url">Url</label>
                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="url"
                    placeholder="Please enter project URL">
                @error('url')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Project-Developer -->
            <div class="form-group col-md-6">
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
            <!-- /Project-Developer -->
            <!-- Project-Image -->
            <div class="form-group col-12">
                <label for="image" class="control-label">Project Photo</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image">
                @error('image')
                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- /Project-Image -->
        </div>
        <!-- Project-Description -->
        <div class="form-row col-lg-6">
            <div class="form-group col">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" cols="30" rows="9" placeholder="Please enter project description"></textarea>
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
        <div class="col-lg-1 pr-3 pr-md-0">
            <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                Save
                <i class="fas fa-save"></i>
            </button>
        </div>
        <!-- /Save-Button -->
    </form>
    <!-- /Create-Project-Form -->
@endsection
