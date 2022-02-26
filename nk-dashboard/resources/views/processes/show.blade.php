@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- Header -->
        <div class="col-12 p-0 mb-1">
            <h1>Process</h1>
        </div>
        <!-- /Header -->
        @if ($process)
            <div class="card card-warning bg-dark col-lg-8 p-0">
                <!-- Card-Header -->
                <div class="card-header d-flex">
                    <!-- PROCESS-NAME -->
                    <h3 class="card-title">{{ $process->name }}</h3>
                    <!-- /PROCESS-NAME -->
                </div>
                <!-- /Card-Header -->
                <!-- Card-Body -->
                <div class="card-body row">
                    <!-- PROCESS-ICON -->
                    <div class="col-md-3 pb-3 pb-md-0">
                        <div class="text-center">
                            <div>
                                <i class="fas fa-{{ $process->icon }} fa-10x mr-2"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /PROCESS-ICON -->
                    <!-- PROCESS-DESCRPTION -->
                    <div class="col-md-9">
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
                <!-- Process-Actions -->
                <div class="card-footer">
                    <a href="{{ route('edit-process', $process->id) }}" class="btn btn-success rounded-circle mr-2">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="{{ route('delete-process', $process->id) }}" class="btn btn-danger rounded-circle">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                <!-- /Process-Actions -->
            </div>
        @else
            <!-- Process-Alert -->
            <div class="col-md-6 p-0">
                <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                    <strong>Sorry! </strong>There is no such as process to show!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /Process-Alert -->
        @endif
    </div>
@endsection
