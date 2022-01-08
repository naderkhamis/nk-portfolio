@extends('layouts.app')
@section('content')
    @if ($process)
        <div class="px-2">
            <div class="col-12 p-0 mb-1">
                <h1>Process</h1>
            </div>
            <div class="card card-warning bg-dark col-lg-8 p-0">
                <!-- Card-Header -->
                <div class="card-header d-flex">
                    <!-- PROCESS-NAME -->
                    <h3 class="card-title">{{ $process->name }}</h3>
                    <!-- /PROCESS-NAME -->
                </div>
                <!-- /Card-Header -->
                <!-- Card-Body -->
                <div class="card-body row pb-0">
                    <!-- PROCESS-ICON -->
                    <div class="col-md-4 p-0 pr-2">
                        <div class="text-center">
                            <div>
                                <i class="fas fa-{{ $process->icon }} fa-10x mr-2"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /PROCESS-ICON -->
                    <!-- PROCESS-DESCRPTION -->
                    <div class="col-md-8 px-2">
                        <p class="card-text">{{ $process->description }}</p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item bg-dark">
                                <b>Developer</b>
                                <span class="float-right text-warning">
                                    {{ $process->developer->name }}
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!-- /PROCESS-DESCRPTION -->
                </div>
                <!-- /Card-Body -->
                <!-- Card-Footer -->
                <div class="card-footer p-2 px-3">
                    <a href="{{ route('edit-process', $process->id) }}" class="btn btn-success rounded-circle">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="{{ route('delete-process', $process->id) }}" class="btn btn-danger rounded-circle">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                <!-- /Card-Footer -->
            </div>
        </div>
    @else
        <div class="alert alert-danger alert-dismissible fade show col-md-6 rounded-pill" role="alert">
            <strong>Sorry! </strong> There is no such as process.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

@endsection
