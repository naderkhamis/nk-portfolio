@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2">
            <h1>Projects</h1>
        </div>
        <!-- /Header -->
        <!-- Project-Form -->
        <div class="col-md-8 col-xl-5">
            <!-- Create-Project-Form -->
            <div class="card card-warning card-outline card-body bg-dark pt-1">
                <!-- Form-Header -->
                <div class="card-header text-warning px-0 border-0">
                    <h3 class="card-title">Create Project</h3>
                </div>
                <!-- /Form-Header -->
                <form action="{{ route('store-project') }}" method="post" class="text-white" enctype="multipart/form-data">
                    <div class="form-row">
                        <!-- TOKEN -->
                        @csrf
                        <!-- /TOKEN -->
                        <!-- Project-Name -->
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="Please enter project name">
                            @error('name')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Project-Name -->
                        <!-- Project-Category -->
                        <div class="form-group col-md-6">
                            <label for="category">Category</label>
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
                        <!-- Project-Url -->
                        <div class="form-group col-md-6">
                            <label for="url">Url</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                                id="url" placeholder="Please enter project URL">
                            @error('url')
                                <span class="badge badge-pill badge-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- /Project-Url -->
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
                    </div>
                    <!-- Project-Description -->
                    <div class="form-group col">
                        <label for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            cols="30" rows="9" placeholder="Please enter project description"></textarea>
                        @error('description')
                            <span class="badge badge-pill badge-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /Project-Description -->
                    <!-- Save-Button -->
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                            Save
                            <i class="fas fa-save"></i>
                        </button>
                    </div>
                    <!-- /Save-Button -->
                </form>
            </div>
            <!-- /Create-Project-Form -->
        </div>
        <!-- /Project-Form -->
    </div>
@endsection
