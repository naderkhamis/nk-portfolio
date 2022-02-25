@extends('layouts.app')

@section('content')
    <h3 class="text-white">Delete Service</h3>
    <!-- Service-Alert -->
    <div class="col-md-6 p-0">
        <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
            <strong>Sorry! </strong>There is no such as service to delete!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <!-- /Service-Alert -->
@endsection
