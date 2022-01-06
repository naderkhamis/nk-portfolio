@extends('layouts.app')
@section('content')
    @if ($service)
        <div class="px-2">
            <div class="col-12 p-0 mb-1">
                <h1>Service</h1>
            </div>
            <div class="card card-warning bg-dark col-lg-8 p-0">
                <!-- Card-Header -->
                <div class="card-header d-flex">
                    <div>
                        <i class="fas fa-{{ $service->icon }} mr-2"></i>
                    </div>
                    <h3 class="card-title">{{ $service->name }}</h3>
                </div>
                <!-- /Card-Header -->
                <!-- Card-Body -->
                <div class="card-body row pb-0">
                    <!-- Image -->
                    <div class="col-md-4 p-0 pr-2">
                        <div class="text-center">
                            <img class="dev-img rounded img-fluid" src="{{ asset($service->image) }}"
                                alt="Developer Photo">
                        </div>
                    </div>
                    <!-- /Image -->
                    <!-- About Me Box -->
                    <div class="col-md-8 px-2">
                        <p class="card-text">{{ $service->description }}</p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item bg-dark">
                                <b>Developer</b>
                                <span class="float-right">
                                    {{ $service->developer->name }}
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!-- /About Me Box -->
                </div>
                <!-- /Card-Body -->
                <!-- Card-Footer -->
                <div class="card-footer p-2 px-3">
                    <a href="{{ route('edit-service', $service->id) }}" class="btn btn-success rounded-circle">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="{{ route('delete-service', $service->id) }}" class="btn btn-danger rounded-circle">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                <!-- /Card-Footer -->
            </div>
        </div>
    @else
        <div class="alert alert-danger alert-dismissible fade show col-md-6 rounded-pill" role="alert">
            <strong>Sorry! </strong> There is no such as service.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

@endsection
