@extends('layouts.app')

@section('content')
    <div class="row">
        @if (count($categories))
            <!-- Categories-Section -->
            <div class="col-lg-3 p-0 mb-4 mr-md-5">
                <!-- Header -->
                <div class="col-12 p-0 mb-3">
                    <h1>Categories</h1>
                </div>
                <!-- /Header -->
                <!-- Categories-Container -->
                <div class="card card-warning card-outline bg-dark p-0">
                    <!-- Card-Header -->
                    <div class="card-header border-bottom border-warning">
                        <h3 class="card-title">Categories</h3>
                    </div>
                    <!-- /Card-Header -->
                    <!-- Categories-Table -->
                    <table class="table table-borderless m-0">
                        <thead>
                            <tr class="bg-warning">
                                <th style="width: 10px">#</th>
                                <th colspan="2">Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td class="pl-0 text-center">
                                        <a href="{{ route('edit-project-category', $category->id) }}"
                                            class="btn btn-success rounded-circle mr-md-2">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="{{ route('delete-project-category', $category->id) }}"
                                            class="btn btn-danger rounded-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- /Categories-Table -->
                </div>
                <!-- /Categories-Container -->
                <!-- New-Category-Button -->
                <div class="col-md-5 p-0">
                    <button class="btn btn-block btn-warning font-weight-bold rounded-pill" data-toggle="collapse"
                        data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                        New
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <!-- /New-Category-Button -->
                <!-- New-Category-Form -->
                <div class="collapse p-0 pt-3" id="collapseCategory">
                    <div class="card card-warning card-outline card-body bg-dark">
                        <form action="{{ route('store-project-category') }}" method="post">
                            <!-- Category-Name-Input -->
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" id="name"
                                    class="form-control  @error('name') is-invalid @enderror"
                                    placeholder="Please enter category name">
                                <!-- Error-Message -->
                                @error('name')
                                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                                @enderror
                                <!-- /Error-Message -->
                            </div>
                            <!-- /Category-Name-Input -->
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
                </div>
                <!-- /New-Category-Form -->
            </div>
            <!-- /Categories-Section -->
            <!-- Projects-Section -->
            <div class="col-lg-8">
                <!-- Header -->
                <div class="col-12 p-0 mb-3">
                    <h1>Projects</h1>
                </div>
                <!-- /Header -->
                @if (count($projects))
                    <!-- Projects-Container -->
                    <div class="row">
                        @foreach ($projects as $project)
                            <!-- Project-Card -->
                            <div class="col-md-5 col-lg-4">
                                <div class="card card-warning card-outline bg-dark p-0">
                                    <!-- Project-Image -->
                                    <img src="{{ asset($project->image) }}" class="card-img-top" alt="Project-Image">
                                    <!-- /Project-Image -->
                                    <div class="card-body box-profile">
                                        <!-- Project-Name -->
                                        <h5 class="card-title text-warning py-2">{{ $project->name }}</h5>
                                        <!-- /Project-Name -->
                                        <!-- Project-Description -->
                                        <p class="card-text">{{ $project->description }}</p>
                                        <!-- /Project-Description -->
                                        <!-- Project-Category -->
                                        <strong class="badge badge-warning p-2 font-italic">
                                            {{ $project->category->name }}
                                        </strong>
                                        <!-- /Project-Category -->
                                    </div>
                                    <!-- Project-Actions -->
                                    <div class="card-footer">
                                        <a href="{{ $project->url }}" target="_blank"
                                            class="btn btn-warning rounded-circle mr-md-2">
                                            <i class="fas fa-link"></i>
                                        </a>
                                        {{-- <a href="{{ route('show-project', $project->id) }}"
                                        class="btn btn-primary rounded-circle mr-md-2">
                                        <i class="fas fa-eye"></i>
                                    </a> --}}
                                        <a href="{{ route('edit-project', $project->id) }}"
                                            class="btn btn-success rounded-circle mr-md-2">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="{{ route('delete-project', $project->id) }}"
                                            class="btn btn-danger rounded-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                    <!-- /Project-Actions -->
                                </div>
                            </div>
                            <!-- /Project-Card -->
                        @endforeach
                    </div>
                    <!-- /Projects-Container -->
                    <!-- New-Project-Button -->
                    <div class="col-md-2 p-0">
                        <a href="{{ route('create-project') }}"
                            class="btn btn-block btn-warning font-weight-bold rounded-pill">
                            New
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <!-- /New-Project-Button -->
                @else
                    <!-- Projects-Alert -->
                    <div class="col-md-6 p-0">
                        <!-- Alert -->
                        <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                            <strong>Sorry! </strong>There is no projects to show!.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- /Alert -->
                        <!-- New-Project-Button -->
                        <div class="col-md-3 p-0">
                            <a href="{{ route('create-project') }}"
                                class="btn btn-block btn-warning font-weight-bold rounded-pill">
                                New
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                        <!-- /New-Project-Button -->
                    </div>
                    <!-- /Projects-Alert -->
                @endif
            </div>
            <!-- /Projects-Section -->
        @else
            <!-- Header -->
            <div class="col-12 p-0 mb-3">
                <h1>Projects Categories</h1>
            </div>
            <!-- /Header -->
            <!-- Categories-Alert -->
            <div class="col-md-6 p-0">
                <!-- Alert -->
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no projects categories to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- /Alert -->
                <!-- New-Category-Button -->
                <div class="col-md-2 p-0">
                    <button href="{{ route('create-project-category') }}"
                        class="btn btn-block btn-warning font-weight-bold rounded-pill" data-toggle="collapse"
                        data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                        New
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <!-- /New-Category-Button -->
                <!-- New-Category-Form -->
                <div class="collapse col-md-8 p-0 pr-md-2 pt-3" id="collapseCategory">
                    <div class="card card-warning card-outline card-body bg-dark">
                        <form action="{{ route('store-project-category') }}" method="post">
                            <!-- Category-Name-Input -->
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" id="name"
                                    class="form-control  @error('name') is-invalid @enderror"
                                    placeholder="Please enter category name">
                                <!-- Error-Message -->
                                @error('name')
                                    <span class="badge badge-pill badge-danger">{{ $message }}</span>
                                @enderror
                                <!-- /Error-Message -->
                            </div>
                            <!-- /Category-Name-Input -->
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
                </div>
                <!-- /New-Category-Form -->
            </div>
            <!-- /Categories-Alert -->
        @endif
    </div>
@endsection
