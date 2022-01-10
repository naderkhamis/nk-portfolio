@extends('layouts.app')
@section('content')
    @if ($project)
        <div class="row px-2">
            <div class="col-12 p-0 mb-1">
                <h1>Project</h1>
            </div>
            <!-- Project-Card -->
            <div class="card card-warning bg-dark col-lg-10 p-0">
                <!-- Card-Header -->
                <div class="card-header">
                    <!-- Project-Name -->
                    <h3 class="card-title">{{ $project->name }}</h3>
                    <!-- /Project-Name -->
                </div>
                <!-- /Card-Header -->
                <!-- Card-Body -->
                <div class="row justify-content-around card-body">
                    <!-- Project-Image -->
                    <div class="col-md-3 p-2">
                        <div class="text-center">
                            <img class="dev-img rounded img-fluid" src="{{ asset($project->image) }}"
                                alt="Developer Photo">
                        </div>
                    </div>
                    <!-- /Project-Image -->
                    <div class="col-md-8 p-2">
                        <!-- Project-Description -->
                        <p class="card-text">{{ $project->description }}</p>
                        <!-- /Project-Description -->
                        <!-- Project-Category -->
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item bg-dark">
                                <strong class="badge badge-warning p-2 font-italic">
                                    {{ $project->category->name }}
                                </strong>
                            </li>
                        </ul>
                        <!--/ Project-Category -->
                    </div>
                    <!-- Card-Footer -->
                    <div class="col-md-1 d-flex flex-md-column justify-content-around align-items-md-center p-2">
                        <a href="{{ $project->url }}" target="_blank" class="btn btn-warning rounded-circle mr-md-2">
                            <i class="fas fa-link"></i>
                        </a>
                        <a href="{{ route('edit-project', $project->id) }}" class="btn btn-success rounded-circle">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a href="{{ route('delete-project', $project->id) }}" class="btn btn-danger rounded-circle">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                    <!-- /Card-Footer -->
                </div>
                <!-- /Card-Body -->
            </div>
            <!-- /Project-Card -->
        </div>
    @else
        <div class="alert alert-danger alert-dismissible fade show col-md-6" role="alert">
            <strong>Sorry! </strong> There is no such as project.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection
