@extends('layouts.app')

@section('content')
    <h3 class="text-white">Edit Category</h3>
    @if ($category)
        <div class="card card-warning card-outline bg-dark card-body col-md-4 mt-3">
            <form action="{{ route('update-project-category') }}" method="post">
                <input type="hidden" name="id" id="name" value="{{ $category->id }}">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror"
                        placeholder="Please enter category name" value="{{ $category->name }}">
                    @error('name')
                        <span class="badge badge-pill badge-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                <div class="col-md-4 p-0">
                    <button type="submit" class="btn btn-block btn-warning font-weight-bold rounded-pill">
                        Update
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
            </form>
        </div>
    @else
        <!-- Alert -->
        <div class="col-md-6 p-0">
            <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                <strong>Sorry! </strong>There is no such as category.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <!-- /Alert -->
    @endif

@endsection
