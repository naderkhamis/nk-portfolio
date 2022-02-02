@extends('layouts.app')

@section('content')
    <!-- Header -->
    <div class="col-12 mb-2">
        <h1>Delete Contact Information</h1>
    </div>
    <!-- /Header -->
    <!-- Alert -->
    <div class="col-12">
        <div class="col-md-8 col-lg-6 alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
            <strong>Sorry! </strong>There is no such as contact to delete!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <!-- /Alert -->
@endsection
