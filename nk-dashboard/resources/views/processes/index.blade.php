@extends('layouts.app')
@section('content')
    @if (count($processes))
        <div class="row px-2">
            <div class="col-12 p-0 mb-1">
                <h1>Processes</h1>
            </div>
            @foreach ($processes as $process)
                <div class="col-md-3 p-0 pr-3">
                    <div class="card card-warning bg-dark p-0">
                        <!-- Card-Header -->
                        <div class="card-header d-flex">
                            <!-- PROCESS-NAME -->
                            <h3 class="card-title">{{ $process->name }}</h3>
                            <!-- /PROCESS-NAME -->
                        </div>
                        <!-- /Card-Header -->
                        <!-- Card-Body -->
                        <div class="card-body">
                            <!-- PROCESS-ICON -->
                            <div class="text-center">
                                <i class="fas fa-{{ $process->icon }} fa-10x"></i>
                            </div>
                            <!-- /PROCESS-ICON -->
                        </div>
                        <!-- /Card-Body -->
                        <!-- Card-Footer -->
                        <div class="card-footer p-2 px-3">
                            <a href="{{ route('show-process', $process->id) }}" class="btn btn-primary rounded-circle">
                                <i class="fas fa-eye"></i>
                            </a>
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
            @endforeach
        </div>
    @else
        <div class="alert alert-danger alert-dismissible fade show col-md-6 rounded-pill" role="alert">
            <strong>Sorry! </strong> There is no available processes.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="col-md-1 p-0">
        <a href="{{ route('create-process') }}" class="btn btn-block btn-warning font-weight-bold rounded-pill">
            New
            <i class="fas fa-plus"></i>
        </a>
    </div>
@endsection
