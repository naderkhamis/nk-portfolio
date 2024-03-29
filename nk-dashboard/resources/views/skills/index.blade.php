@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 mb-2 d-flex justify-content-between align-items-center">
            <h1>Skills</h1>
        </div>
        <!-- /Header -->
        @if (count($categories))
            <!-- Categories-Section -->
            <div class="col-lg-3 p-0 mb-4">
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
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td class="pl-0 pl-md-2">
                                        <a href="{{ route('edit-category', $category->id) }}"
                                            class="btn btn-success rounded-circle mr-md-2">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="{{ route('delete-category', $category->id) }}"
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
                <div class="col-md-3 p-0">
                    <button class="btn btn-block btn-warning font-weight-bold rounded-pill" data-toggle="collapse"
                        data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                        New
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <!-- /New-Category-Button -->
                <!-- New-Category-Form -->
                <div class="collapse p-0 pr-md-2 pt-3" id="collapseCategory">
                    <div class="card card-warning card-outline card-body bg-dark">
                        <form action="{{ route('store-category') }}" method="post">
                            <!-- TOKEN -->
                            @csrf
                            <!-- /TOKEN -->
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
        @else
            <!-- Categories-Alert -->
            <div class="col-md-6 p-0">
                <!-- Alert -->
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no categories to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- /Alert -->
                <!-- New-Category-Button -->
                <div class="col-md-2 p-0">
                    <button href="{{ route('create-career') }}"
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
                        <form action="{{ route('store-category') }}" method="post">
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
        @if (count($skills))
            <!-- Skills-Section -->
            <div class="col-lg-3 p-0 mx-lg-4">
                <!-- Skills-Container -->
                <div class="card card-warning card-outline bg-dark p-0">
                    <!-- Card-Header -->
                    <div class="card-header border-bottom border-warning">
                        <h3 class="card-title">Skills</h3>
                    </div>
                    <!-- /Card-Header -->
                    <!-- Skills-Table -->
                    <div class="table-responsive-sm">
                        <table class="table table-borderless m-0">
                            <thead>
                                <tr class="bg-warning">
                                    <th style="width: 10px">#</th>
                                    <th>Skill</th>
                                    <th>Category</th>
                                    <th>Rate</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($skills as $skill)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $skill->name }}</td>
                                        <td>{{ $skill->category->name }}</td>
                                        <td>{{ $skill->performance }} %</td>
                                        <td>
                                            <a href="{{ route('edit-skill', $skill->id) }}"
                                                class="btn btn-success rounded-circle mr-2">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{ route('delete-skill', $skill->id) }}"
                                                class="btn btn-danger rounded-circle">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /Skills-Table -->
                </div>
                <!-- /Skills-Container -->
                <!-- New-Category-Button -->
                <div class="col-md-3 p-0">
                    <a href="{{ route('create-skill') }}" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                        New
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
                <!-- /New-Category-Button -->
            </div>
            <!-- /Skills-Section -->
        @else
            <!-- Skills-Alert -->
            <div class="col-md-6 p-0 mx-md-4">
                <!-- Alert -->
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no skills to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- /Alert -->
            </div>
            <!-- /Skills-Alert -->
        @endif
    </div>
@endsection
