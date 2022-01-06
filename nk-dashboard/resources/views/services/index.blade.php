@extends('layouts.app')
@section('content')
    @if (count($services))
        <div class="row px-2 d-flex justify-content-around">
            <div class="col-12 p-0 mb-1">
                <h1>Services</h1>
            </div>
            @foreach ($services as $service)
                <div class="col-lg-6 p-0 pr-3">
                    <div class="card card-warning bg-dark p-0">
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
                            <a href="{{ route('show-service', $service->id) }}" class="btn btn-primary rounded-circle">
                                <i class="fas fa-eye"></i>
                            </a>
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
            @endforeach
        </div>
    @else
        <div class="alert alert-danger alert-dismissible fade show col-md-6 rounded-pill" role="alert">
            <strong>Sorry! </strong> There is no available services.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="col-md-1 p-0">
        <a href="{{ route('create-service') }}" class="btn btn-block btn-warning font-weight-bold rounded-pill">
            New
            <i class="fas fa-plus"></i>
        </a>
    </div>
@endsection
